<x-registration-layout>
    <x-registration-card>
        <form action="/registers3" class=" flex-col flex gap-4 w-full signup-form px-10 py-8">
            @csrf
            <div class="flex row w-full justify-between">
                <div class="w-5/12">
                    <label for="Number">Phone Number 1</label>
                    <x-bladewind.input name="Number" type="text" required="true" id="Number" class="rounded-md"
                        error_message=" Phone Number 1 is required"
                        onfocus="changeCss('.Number', '!border-2,!border-red-400')"
                        onblur="changeCss('.Number', '!border-2,!border-red-400', 'remove')" />
                </div>
                <div class="w-5/12">
                    <label for="Phone" class="">Phone Number 2</label>
                    <x-bladewind.input name="Phone" type="text" required="true" id="Phone" class="rounded-md"
                        error_message="Phone Number 2 is required"
                        onfocus="changeCss('.Phone', '!border-2,!border-red-400')"
                        onblur="changeCss('.Phone', '!border-2,!border-red-400', 'remove')" />

                </div>
            </div>
            <div class="flex w-full justify-between">
                <div class="w-full">
                    <label for="Email">Email</label>
                    <x-bladewind.input name="Email" type="text" required="true" id="Email" class="rounded-md"
                        error_message="Email is required" onfocus="changeCss('.Email', '!border-2,!border-red-400')"
                        onblur="changeCss('.Email', '!border-2,!border-red-400', 'remove')" />
                </div>
            </div>

            <div class="flex w-full justify-between">

                <x-bladewind::button size="small" color="black" can_submit="true" name="btn-save" has_spinner="true"
                    onclick="showModal('success')">Save As Draft </x-bladewind.button>
                    <x-bladewind::button size="small" color="black" can_submit="true" name="btn-save"
                        has_spinner="true" onclick="showModal('Continue')">Next </x-bladewind.button>
            </div>
        </form>
    </x-registration-card>


</x-registration-layout>
