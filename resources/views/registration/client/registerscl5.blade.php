<x-registration-layout>

    <x-registration-card>
        <form action="/" class=" flex-col flex gap-4 w-full signup-form px-10 py-8">
            @csrf


            <div class="flex row w-full justify-between">
                <div class="w-full font-semibold">
                    <label for="License">Business Permit</label>
                    <x-bladewind.filepicker name="Permitpng" placeholder="Upload a PNG" accepted_file_types=".png"
                        id="Permit" class="rounded-md" />
                    <div class="flex justify-center">OR</div>
                    <x-bladewind.filepicker name="Permitjpeg" placeholder="Upload a Jpeg" accepted_file_types=".jpeg"
                        class="rounded-md" />
                </div>
            </div>

            <div class="flex col w-full justify-between">
                <div class="w-full font-semibold">
                    <label for="DTI"> DTI(SEC)</label>
                    <x-bladewind.filepicker name="DTIpng" placeholder="Upload a PNG" accepted_file_types=".png"
                        id="DTI" class="rounded-md" />
                    <div class="flex justify-center">OR</div>
                    <x-bladewind.filepicker name="DTIjpeg" placeholder="Upload a Jpeg" accepted_file_types=".jpeg"
                        class="rounded-md" />
                </div>
            </div>

            <div class="flex col w-full justify-between">
                <div class="w-full font-semibold">
                    <div class="font-bold">
                        <h1>Optional</h1>
                    </div>
                    <label for="Others"> Others</label>
                    <x-bladewind.filepicker name="Others" placeholder="Upload a PDF" accepted_file_types=".pdf"
                        id="Others" class="rounded-md" />
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
