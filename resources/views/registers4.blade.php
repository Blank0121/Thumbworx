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

            <div class=" w-full flex p-2 gap-2 ">
                <div class="bg-white text-black w-6 rounded-full p-1 text-xs ">1</div>
                <div> Personal</div>
            </div>
            <div class="flex p-2 gap-2 w-full">
                <div class="bg-white text-black w-6 rounded-full p-1 text-xs ">2</div>
                <div>Contact </div>
            </div>
            <div class="flex p-2 gap-2 w-full">
                <div class="bg-white text-black w-6 rounded-full p-1 text-xs ">3</div>Address
            </div>
            <div class="bg-blue-900 rounded-full text-white flex p-2 gap-2 w-full">
                <div class="bg-white text-black w-6 rounded-full p-1 text-xs ">4</div>Emergency
            </div>
            <div class="flex p-2 gap-2 w-full">
                <div class="bg-white text-black w-6 rounded-full p-1 text-xs ">5</div>Document
            </div>
        </div>
        <form action="/registers5" class=" flex-col flex gap-4 w-full signup-form px-10 py-8">
            @csrf


            <div class="flex row w-full justify-between">
                <div class="w-full">
                    <label for="Full"> Full name</label>
                    <x-bladewind.input name="Full" type="text" required="true" id="Full" class="rounded-md"
                        error_message="Full Name is required"
                        onfocus="changeCss('.Full', '!border-2,!border-red-400')"
                        onblur="changeCss('.Full', '!border-2,!border-red-400', 'remove')" />

                </div>
               
            </div>

            <div class="flex row w-full justify-between">
                <div class="w-3/5">
                    <label for="relationship">Relationship</label>
                    <x-bladewind.input name="relationship" type="text" required="true" id="relationship" class="rounded-md"
                        error_message="Relationship is required" 
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
                        error_message="Email is required"
                        onfocus="changeCss('.email', '!border-2,!border-red-400')"
                        onblur="changeCss('.email', '!border-2,!border-red-400', 'remove')" />

                </div>
               
            </div>
            <div class="flex row w-full justify-between">
                <div class="w-full">
                    <label for="Address">Address</label>
                    <x-bladewind.input name="Address" type="text" required="true" id="Address" class="rounded-md"
                        error_message="Address is required"
                        onfocus="changeCss('.Address', '!border-2,!border-red-400')"
                        onblur="changeCss('.Address', '!border-2,!border-red-400', 'remove')" />
                </div>
               
            </div>
            <div class="flex w-full justify-between">
               
            <x-bladewind::button size="small" color="black" can_submit="true" name="btn-save" has_spinner="true"
                onclick="showModal('success')">Save As Draft </x-bladewind.button>
                <x-bladewind::button size="small" color="black" can_submit="true" name="btn-save" has_spinner="true"
                onclick="showModal('Continue')">Next </x-bladewind.button>
            </div>
        </form>
    </div>





</body>

</html>
