<x-registration-layout>
    <?php
    $maritalStatus = [['label' => 'Single', 'value' => 'single'], ['label' => 'Divorced', 'value' => 'divorced'], ['label' => 'Widowed', 'value' => 'widowed'], ['label' => 'Married', 'value' => 'married']];
    ?>

    <x-registration-card>
        <form action="/registerscl2" class=" flex-col flex gap-4 w-full signup-form px-10 py-8">
            @csrf
            <div class="flex row w-full justify-between">
                <div class="w-3/5">
                    <label for="First_Name"> First Name</label>
                    <x-bladewind.input name="First Name" type="text" required="true" id="First_Name" class="rounded-md"
                        error_message="First Name is required"
                        onfocus="changeCss('.First_Name', '!border-2,!border-red-400')"
                        onblur="changeCss('.First_Name', '!border-2,!border-red-400', 'remove')" />

                </div>
                <div>
                    <label for="Middle_Name"> Middle Name</label>
                    <x-bladewind.input name="Middle_Name" type="text" required="true" id="Middle_Name"
                        class="rounded-md" error_message="Middle Name is required"
                        onfocus="changeCss('.Middle_Name', '!border-2,!border-red-400')"
                        onblur="changeCss('.Middle_Name', '!border-2,!border-red-400', 'remove')" />
                </div>
            </div>

            <div class="flex row w-full justify-between">
                <div class="w-3/5">
                    <label for="Surname">Surname</label>
                    <x-bladewind.input name="Surname" type="text" required="true" id="Surname" class="rounded-md"
                        error_message="Surname is required" onfocus="changeCss('.Surname', '!border-2,!border-red-400')"
                        onblur="changeCss('Surname', '!border-2,!border-red-400', 'remove')" />

                </div>

                <div class="flex flex-col gap-2">
                    <label for="Gender" class="">Gender</label>
                    <div class="flex">
                        <x-bladewind.radio-button label="Male" name="mgender" id="Gender" value="Male" />
                        <x-bladewind.radio-button label="Female" name="fmgender" value="Female" />
                    </div>
                </div>
            </div>
            <div class="flex row w-full justify-between">
                <div class="w-7/12">
                    <label for="date" class="">Birthdate</label>
                    <x-bladewind.datepicker name="date2" format="mm-dd-yyyy" id="date" class="rounded-md" />
                </div>
                <div class="flex flex-col">
                    <label for="Age">Age</label>
                    <input type="text" @readonly(true) class="rounded-md">
                </div>
            </div>
            <div class="flex row w-full justify-between">
                <div class="w-5/12">
                    <label for="Marital" class="">Marital Status</label>
                    <x-bladewind.dropdown name="marital" :data="$maritalStatus" id="Marital" class="rounded-md" />
                </div>
                <div class="flex flex-col">
                    <div class="w-72">
                        <label for="Role">Role in the Company</label>
                        <x-bladewind.input name="Role" type="text" required="true" id="Role"
                            class="rounded-md" error_message="Role in the company is required"
                            onfocus="changeCss('.Role', '!border-2,!border-red-400')"
                            onblur="changeCss('Role', '!border-2,!border-red-400', 'remove')" />

                    </div>

                </div>
            </div>
            <div class="flex w-full justify-between">

                <x-bladewind::button size="small" color="black" can_submit="true" name="btn-save" has_spinner="true"
                    onclick="showModal('success')">Save As Draft </x-bladewind.button>
                    <x-bladewind::button size="small" color="black" name="btn-save" has_spinner="true"
                        can_submit="true" onclick="showModal('Continue')">Next </x-bladewind.button>

            </div>
        </form>
    </x-registration-card>
</x-registration-layout>
