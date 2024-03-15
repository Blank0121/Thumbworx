<x-registration-layout>
    <x-registration-card>
        <form action="/registers5" class=" flex-col flex gap-4 w-full signup-form px-10 py-8">
            @csrf
            <div class="flex row w-full justify-between">
                <div class="w-full">
                    <label for="Full"> Full name</label>
                    <x-bladewind.input name="Full" type="text" required="true" id="Full" class="rounded-md"
                        error_message="Full Name is required" onfocus="changeCss('.Full', '!border-2,!border-red-400')"
                        onblur="changeCss('.Full', '!border-2,!border-red-400', 'remove')" />

                </div>

            </div>

            <div class="flex row w-full justify-between">
                <div class="w-3/5">
                    <label for="relationship">Relationship</label>
                    <x-bladewind.input name="relationship" type="text" required="true" id="relationship"
                        class="rounded-md" error_message="Relationship is required"
                        onfocus="changeCss('.relationship', '!border-2,!border-red-400')"
                        onblur="changeCss('.relationship', '!border-2,!border-red-400', 'remove')" />

                </div>

                <div>
                    <label for="number"> Phone Number</label>
                    <x-bladewind.input name="number" type="text" required="true" id="number" class="rounded-md"
                        error_message="Phone Number is required"
                        onfocus="changeCss('.number', '!border-2,!border-red-400')"
                        onblur="changeCss('.number', '!border-2,!border-red-400', 'remove')" />
                </div>
            </div>
            <div class="flex row w-full justify-between">
                <div class="w-full">
                    <label for="email">Email</label>
                    <x-bladewind.input name="email" type="text" required="true" id="email" class="rounded-md"
                        error_message="Email is required" onfocus="changeCss('.email', '!border-2,!border-red-400')"
                        onblur="changeCss('.email', '!border-2,!border-red-400', 'remove')" />

                </div>

            </div>
            <div class="flex row w-full justify-between">
                <div class="w-full">
                    <label for="Address">Address</label>
                    <x-bladewind.input name="Address" type="text" required="true" id="Address" class="rounded-md"
                        error_message="Address is required" onfocus="changeCss('.Address', '!border-2,!border-red-400')"
                        onblur="changeCss('.Address', '!border-2,!border-red-400', 'remove')" />
                </div>

            </div>
            <div class="flex w-full justify-between">

                <x-bladewind::button size="small" color="black" can_submit="true" name="btn-save" has_spinner="true"
                    onclick="showModal('success')">Save As Draft </x-bladewind.button>
                    <x-bladewind::button size="small" color="black" can_submit="true" name="btn-save"
                        has_spinner="true" onclick="showModal('Continue')">Next </x-bladewind.button>
            </div>
        </form>
        </div>
    </x-registration-card>
</x-registration-layout>
