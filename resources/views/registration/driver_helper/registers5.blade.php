<x-registration-layout>
    <x-registration-card>
        <form action="/registerscl1" class=" flex-col flex gap-4 w-full signup-form px-10 py-8">
            @csrf
            <div class="flex row w-full justify-between">
                <div class="w-full font-semibold">
                    <label for="License">License</label>
                    <x-bladewind.filepicker name="Licensepng" placeholder="Upload a PNG" accepted_file_types=".png"
                        id="License" class="rounded-md" />
                    <div class="flex justify-center">OR</div>
                    <x-bladewind.filepicker name="Licensejpeg" placeholder="Upload a Jpeg" accepted_file_types=".jpeg"
                        class="rounded-md" />
                </div>
            </div>

            <div class="flex col w-full justify-between">
                <div class="w-full font-semibold">
                    <label for="NBI"> NBI Clearance</label>
                    <x-bladewind.filepicker name="NBIpng" placeholder="Upload a PNG" accepted_file_types=".png"
                        id="NBI" class="rounded-md" />
                    <div class="flex justify-center">OR</div>
                    <x-bladewind.filepicker name="NBIjpeg" placeholder="Upload a Jpeg" accepted_file_types=".jpeg"
                        class="rounded-md" />
                </div>
            </div>
            <div class="flex col w-full justify-between">
                <div class="w-full font-semibold"> <label for="History"> Driving History</label>
                    <x-bladewind.filepicker name="History" placeholder="Upload a PDF" accepted_file_types=".pdf"
                        id="History" class="rounded-md" />
                </div>

            </div>
            <div class="flex col w-full justify-between">
                <div class="w-full font-semibold">
                    <div class="font-bold">
                        <h1>Optional</h1>
                    </div>
                    <label for="Insurance"> Insurance</label>
                    <x-bladewind.filepicker name="Insurance" placeholder="Upload a PDF" accepted_file_types=".pdf"
                        id="Insurance" class="rounded-md" />
                </div>
            </div>


            <div class="flex w-full justify-between">
                <x-bladewind.button size="small" can_submit="false" onclick="showModal('save-draft')">Save as
                    draft</x-bladewind.button>
                <x-bladewind.button can_submit="true" size="small">Finish</x-bladewind.button>
            </div>
        </form>
        </div>
        </div>
    </x-registration-card>
    <x-confirm-draft-modal />
</x-registration-layout>
