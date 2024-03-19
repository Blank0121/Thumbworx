<x-registration-layout>
    <x-registration-card>
        <form action="{{ route('dh.step-2') }}" method="POST" class=" flex-col flex gap-4 w-full signup-form px-10 py-8">
            @csrf
            <div class="flex w-full gap-4">
                <div class="w-full">
                    <label for="phone_number1" class="text-sm font-semibold">Phone Number 1</label>
                    @if ($user != null && $user->phone_number1 != null)
                        <x-text-input required id="phone_number1" class="block mt-1 w-full" name="phone_number1"
                            value="{{ $user->phone_number1 }}" autocomplete="off" />
                    @else
                        <x-text-input required id="phone_number1" class="block mt-1 w-full" name="phone_number1"
                            :value="old('phone_number1')" autofocus autocomplete="off" />
                    @endif
                    @if ($errors->has('phone_number1'))
                        <x-input-error :messages="$errors->get('phone_number1')" class="mt-1" />
                    @endif
                </div>
                <div class="w-full">
                    <label for="phone_number2" class="text-sm font-semibold">Phone Number 2</label>
                    @if ($user != null && $user->phone_number2 != null)
                        <x-text-input required id="phone_number2" class="block mt-1 w-full" name="phone_number2"
                            value="{{ $user->phone_number2 }}" autocomplete="off" />
                    @else
                        <x-text-input required id="phone_number2" class="block mt-1 w-full" name="phone_number2"
                            :value="old('phone_number2')" autocomplete="off" />
                    @endif
                    @if ($errors->has('phone_number2'))
                        <x-input-error :messages="$errors->get('phone_number2')" class="mt-1" />
                    @endif
                </div>
            </div>
            <div class="flex w-full justify-between">
                <div class="w-full">
                    <label for="email" class="text-sm font-semibold">Email</label>
                    @if ($user != null && $user->email != null)
                        <x-text-input id="email" type="email" class="block mt-1 w-full" name="email"
                            value="{{ $user->email }}" autocomplete="off" />
                    @else
                        <x-text-input required id="email" type="email" class="block mt-1 w-full" name="email"
                            :value="old('email')" autocomplete="off" />
                    @endif
                    @if ($errors->has('email'))
                        <x-input-error :messages="$errors->get('email')" class="mt-1" />
                    @endif
                </div>
            </div>
            <div class="flex w-full justify-between">
                <x-bladewind.button size="small" can_submit="false" onclick="showModal('save-draft')">Save as
                    draft</x-bladewind.button>
                <x-bladewind.button can_submit="true" size="small">Next</x-bladewind.button>
            </div>
        </form>
    </x-registration-card>
    <x-confirm-draft-modal />
</x-registration-layout>
