<x-registration-layout>
    <x-registration-card>

        <?php
        $employee = [['label' => '1-50', 'value' => '1-50'], ['label' => '51-200', 'value' => '51-200'], ['label' => '200 above', 'value' => '200 above']];
        ?>

        <form action="/registerscl3" class=" flex-col flex gap-4 w-full signup-form px-10 py-8">
            @csrf


            <div class="flex row w-full justify-between">
                <div class="w-full">
                    <label for="Name"> Company Name</label>
                    <x-bladewind.input name="Name" type="text" required="true" id="Name" class="rounded-md"
                        error_message="First Name is required" onfocus="changeCss('.Name', '!border-2,!border-red-400')"
                        onblur="changeCss('.Name', '!border-2,!border-red-400', 'remove')" />

                </div>

            </div>

            <div class="flex row w-full justify-between">
                <div class="w-full">
                    <x-bladewind.textarea name="events" label="Company Description" required="true"
                        class="rounded-md border-gray-400" onfocus="changeCss('.events', '!border-2,!border-red-400')"
                        onblur="changeCss('.events', '!border-2,!border-red-400', 'remove')">
                    </x-bladewind.textarea>
                </div>
            </div>
            <div class="flex row w-full justify-between">

                <div class="w-5/12">
                    <label for="employee" class="py-0">No. of Employee</label>
                    <x-bladewind.dropdown name="employee" :data="$employee" id="employee" class="rounded-md" />
                </div>

                <div class="flex flex-col w-6/12">
                    <label for="Industry"> Industry type</label>
                    <x-bladewind.input name="Industry" type="text" required="true" id="Industry" class="rounded-md"
                        error_message="Industry is required"
                        onfocus="changeCss('.Industry', '!border-2,!border-red-400')"
                        onblur="changeCss('.Industry', '!border-2,!border-red-400', 'remove')" />
                </div>
            </div>
            <div class="flex row w-full justify-between">


                <div class="w-5/12">
                    <label for="Daily">Daily Trucking</label>
                    <x-bladewind.input name="Daily" type="text" required="true" id="Daily" class="rounded-md"
                        error_message="Daily Trucking is required"
                        onfocus="changeCss('.Daily', '!border-2,!border-red-400')"
                        onblur="changeCss('Daily', '!border-2,!border-red-400', 'remove')" />
                </div>
                <div class="flex flex-col w-6/12">
                    <label for="Budget">Trucking Budget</label>
                    <x-bladewind.input name="Budget" type="text" required="true" id="Budget" class="rounded-md"
                        error_message="Trucking Budget is required"
                        onfocus="changeCss('.Budget', '!border-2,!border-red-400')"
                        onblur="changeCss('Budget', '!border-2,!border-red-400', 'remove')" />
                </div>
            </div>
            <div class="flex row w-full justify-between">
                <div class="w-5/12">
                    <label for="Size">Trucking Size</label>
                    <x-bladewind.input name="Size" type="text" required="true" id="Size" class="rounded-md"
                        error_message="Trucking Size is required"
                        onfocus="changeCss('.Size', '!border-2,!border-red-400')"
                        onblur="changeCss('Size', '!border-2,!border-red-400', 'remove')" />
                </div>
                <div class="flex flex-col w-6/12">
                    <label for="Vehicle">Trucking Vehicle</label>
                    <x-bladewind.input name="Vehicle" type="text" required="true" id="Vehicle" class="rounded-md"
                        error_message="Trucking Vehicle is required"
                        onfocus="changeCss('.Vehicle', '!border-2,!border-red-400')"
                        onblur="changeCss('Vehicle', '!border-2,!border-red-400', 'remove')" />
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
