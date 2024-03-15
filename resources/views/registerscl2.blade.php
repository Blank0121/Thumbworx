<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hello
    </title>
    <link href="{{ asset('vendor/bladewind/css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('vendor/bladewind/js/helpers.js') }}"></script>
    @vite('resources/css/app.css')
    <script defer src="//unpkg.com/alpinejs"></script>
</head>

<body>
    <?php
    $employee = [['label' => '1-50', 'value' => '1-50'], ['label' => '51-200', 'value' => '51-200'], ['label' => '200 above', 'value' => '200 above']];
    ?>


    <div class="flex flex-col mx-auto w-1/12"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
            <path strokeLinecap="round" strokeLinejoin="round"
                d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
        </svg>
        <div class="font-bold text-3xl flex justify-center">
            <h1>Registration</h1>
        </div>
    </div>



    <div
        class="bg-white mt-10 dark:bg-slate-800 rounded-lg  ring-1 ring-slate-900/5 shadow-xl border-x-4 flex w-2/4 flex-col mx-auto">
        <div class=" text-black flex gap-4 text-center w-full bg-gray-300 rounded-full">

            <div class="flex p-2 gap-2 ">
                <div class="bg-white text-black w-6 rounded-full p-1 text-xs ">1</div>
                <div> Personal</div>
            </div>
            <div class="bg-blue-900 rounded-full w-full text-white flex p-2 gap-2">
                <div class="bg-white text-black w-6 rounded-full p-1 text-xs ">2</div>
                <div>Company</div>
            </div>
            <div class="flex p-2 gap-2 w-full">
                <div class="bg-white text-black w-6 rounded-full p-1 text-xs ">3</div>Address
            </div>
            <div class="flex p-2 gap-2 w-full">
                <div class="bg-white text-black w-6 rounded-full p-1 text-xs ">4</div>Contact
            </div>
            <div class="flex p-2 gap-2 w-full">
                <div class="bg-white text-black w-6 rounded-full p-1 text-xs ">5</div>Document
            </div>
        </div>
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
            <x-bladewind::button size="small" color="black" name="btn-save" has_spinner="true" can_submit="true"
                onclick="showModal('Continue')">Next </x-bladewind.button>

    </div>
    </form>
    </div>
    <x-bladewind.modal type="success" title="Continue" name="Continue">
        Continuing the registration
    </x-bladewind.modal>




</body>

</html>
