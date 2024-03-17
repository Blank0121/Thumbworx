<x-registration-layout>
    <?php
    $userType = [['label' => 'Trucker', 'value' => 'trucker'], ['label' => 'Helper', 'value' => 'helper']];
    $maritalStatus = [['label' => 'Single', 'value' => 'single'], ['label' => 'Married', 'value' => 'married']];
    
    ?>

    @if ($user != null)
        {{ $user }}
    @endif

    <x-registration-card>
        <form action="{{ route('dh.step-1') }}" method="POST" class="flex-col flex gap-4 w-full px-10 py-8">
            @csrf
            <div class="flex w-full gap-4">
                <div class="w-3/5">
                    <label for="first_name" class="text-sm font-semibold">First Name</label>
                    <x-text-input required id="first_name" class="block mt-1 w-full" name="first_name" :value="old('first_name')"
                        autofocus autocomplete="off" />
                    @if ($errors->has('first_name'))
                        <x-input-error :messages="$errors->get('first_name')" class="mt-1" />
                    @endif
                </div>
                <div class="w-2/5">
                    <label for="middle_name" class="text-sm font-semibold"> Middle Name</label>
                    <x-text-input required id="middle_name" class="block mt-1 w-full" name="middle_name"
                        :value="old('middle_name')" autocomplete="off" />
                    @if ($errors->has('middle_name'))
                        <x-input-error :messages="$errors->get('middle_name')" class="mt-1" />
                    @endif
                </div>
            </div>
            <div class="flex w-full gap-4">
                <div class="w-3/5">
                    <label for="surname" class="text-sm font-semibold">Surname</label>
                    <x-text-input required id="surname" class="block mt-1 w-full" name="surname" :value="old('surname')"
                        autocomplete="off" />
                    @if ($errors->has('surname'))
                        <x-input-error :messages="$errors->get('surname')" class="mt-1" />
                    @endif
                </div>
                <div class="flex flex-col gap-2 w-2/5">
                    <label for="gender" class="text-sm font-semibold">Gender</label>
                    <div class="flex gap-6 w-full justify-center mt-1">
                        <div class="flex items-center justify-center gap-1">
                            <label class="text-sm font-semibold" for="male"><x-male-svg /></label>
                            <input type="radio" class="p-[0.65rem]" id="male" required name="gender"
                                id="gender" value="male">
                        </div>
                        <div class="flex items-center justify-center gap-1">
                            <label class="text-sm font-semibold" for="female"><x-female-svg /></label>
                            <input type="radio" class="p-[0.65rem]" id="female" required name="gender"
                                id="gender" value="female">
                        </div>
                    </div>
                    @if ($errors->has('gender'))
                        <x-input-error :messages="$errors->get('gender')" class="mt-1" />
                    @endif
                </div>
            </div>
            <div class="flex w-full justify-center gap-4">
                <div class="flex flex-col w-3/5">
                    <label for="date" class="text-sm font-semibold">Birthdate</label>
                    <input required type="date" name="birth_date" id="birth_date"
                        class="rounded-md focus:border-indigo-600 focus:ring-indigo-600 text-sm font-semibold">
                    @if ($errors->has('birth_date'))
                        <x-input-error :messages="$errors->get('birth_date')" class="mt-1" />
                    @endif
                </div>
                <div class="flex flex-col w-2/5">
                    <label for="age" class="text-sm font-semibold">Age</label>
                    <input type="text" id="age" name="age" @readonly(true)
                        class="rounded-md focus:border-indigo-600 focus:ring-indigo-600 text-sm font-semibold">
                    @if ($errors->has('age'))
                        <x-input-error :messages="$errors->get('age')" class="mt-1" />
                    @endif
                </div>
            </div>
            <div class="flex row w-full justify-center gap-4">
                <div class="flex flex-col w-full">
                    <label for="user_type" class="text-sm font-semibold">User Type</label>
                    <select required
                        class="rounded-md focus:border-indigo-600 focus:ring-indigo-600 text-sm font-semibold text-gray-600"
                        name="user_type" id="user_type">
                        <option class="text-sm font-semibold" value="">Select a type</option>
                        <option class="text-sm font-semibold" value="driver">Driver</option>
                        <option class="text-sm font-semibold" value="helper">Helper</option>
                    </select>
                    @if ($errors->has('user_type'))
                        <x-input-error :messages="$errors->get('user_type')" class="mt-1" />
                    @endif
                </div>
                <div class="flex flex-col w-full">
                    <label for="marital_status" class="text-sm font-semibold">Marital Status</label>
                    <select required
                        class="rounded-md focus:border-indigo-600 focus:ring-indigo-600 text-sm font-semibold text-gray-600"
                        name="marital_status" id="marital_status">
                        <option class="text-sm font-semibold" value="">Select a marital status</option>
                        <option class="text-sm font-semibold" value="single">Single</option>
                        <option class="text-sm font-semibold" value="married">Married</option>
                    </select>
                    @if ($errors->has('marital_status'))
                        <x-input-error :messages="$errors->get('marital_status')" class="mt-1" />
                    @endif
                </div>
            </div>
            <div class="flex w-full justify-between">
                <x-bladewind::button size="small" color="black" can_submit="true" name="btn-save"
                    has_spinner="true">Save As Draft </x-bladewind.button>
                    <x-bladewind::button size="small" color="black" name="btn-save" has_spinner="true"
                        can_submit="true">Next </x-bladewind.button>

            </div>
        </form>

        <script>
            const birthDateElement = document.querySelector("#birth_date")
            const ageElement = document.querySelector("#age")

            birthDateElement.addEventListener("change", (e) => {
                const month_diff = Date.now() - new Date(e.target.value).getTime()
                const age_dt = new Date(month_diff);
                const year = age_dt.getUTCFullYear();
                const age = Math.abs(year - 1970);

                return ageElement.value = age
            })
        </script>
    </x-registration-card>
</x-registration-layout>
