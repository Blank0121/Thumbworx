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
    $maritalStatus = [['label' => 'Single', 'value' => 'single'], ['label' => 'Divorced', 'value' => 'divorced'], ['label' => 'Widowed', 'value' => 'widowed'], ['label' => 'Married', 'value' => 'married']];
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

            <div class="bg-blue-900 rounded-full w-full text-white flex p-2 gap-2 ">
                <div class="bg-white text-black w-6 rounded-full p-1 text-xs ">1</div>
                <div> Personal</div>
            </div>
            <div class="flex p-2 gap-2 w-full">
                <div class="bg-white text-black w-6 rounded-full p-1 text-xs ">2</div>
                <div>Company </div>
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
        <form action="/registerscl2" class=" flex-col flex gap-4 w-full signup-form px-10 py-8">
            @csrf


            <div class="flex row w-full justify-between">
                <div class="w-3/5">
                    <label for="First_Name"> First Name</label>
                    <x-bladewind.input name="First Name" type="text" required="true" id="First_Name"
                        class="rounded-md" error_message="First Name is required"
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

                <x-bladewind::button size="small" color="black" can_submit="true" name="btn-save"
                    has_spinner="true" onclick="showModal('success')">Save As Draft </x-bladewind.button>
                    <x-bladewind::button size="small" color="black" name="btn-save" has_spinner="true"
                        can_submit="true" onclick="showModal('Continue')">Next </x-bladewind.button>

            </div>
        </form>
    </div>
    <x-bladewind.modal type="success" title="Continue" name="Continue">
        Continuing the registration
    </x-bladewind.modal>




</body>

</html>
