<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('vendor/bladewind/css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('vendor/bladewind/js/helpers.js') }}"></script>
    @vite('resources/css/app.css')
    <title>Save Draft Successful</title>
</head>

<body class="bg-gradient-to-r from-[#0E0F62] to-[#1D1FC8] min-h-screen flex flex-col gap-4 items-center justify-center">
    <x-bladewind.card class="max-w-lg">
        <div class="flex flex-col gap-2 items-center justify-center">
            <h1 class="text-4xl font-bold capitalize text-gray-800">Registration saved!</h1>
            <p class="text-lg font-bold text-gray-700 text-center">Your registration has been saved. Comeback later to
                continue.
            </p>
            <p class="text-sm font-bold text-gray-600">Save your Draft ID</p>
            <div
                class="bg-gray-100 flex items-center justify-center gap-4 w-max rounded-md border-dashed border-2 border-gray-600 p-4">
                <p class="draft-id font-bold text-sm">{{ $draft_id }}</p>
                <button
                    class="copy bg-white px-2 py-1 rounded-md flex items-center justify-center gap-1 cursor-pointer">
                    <p class="copy-text text-xs font-bold">copy</p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                    </svg>
                </button>
            </div>
        </div>
    </x-bladewind.card>
    <x-bladewind.button can_submit="false" size="small" icon="arrow-small-left">
        <a href="/" class="w-full">
            Go to homepage
        </a>
    </x-bladewind.button>
    <script>
        const copyButton = document.querySelector(".copy")
        const copyText = document.querySelector(".copy-text")
        const draftID = document.querySelector(".draft-id").textContent

        copyButton.addEventListener("click", async () => {
            await navigator.clipboard.writeText(draftID)
            copyText.textContent = 'copied!'
        })
    </script>
</body>

</html>
