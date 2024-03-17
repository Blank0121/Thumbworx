<div class="bg-white rounded-3xl shadow-xl flex flex-col">
    <div class=" text-black flex gap-4 text-center w-full bg-gray-300 rounded-full overflow-hidden">
        @if (Str::contains(url()->current(), 'cl'))
            <div
                class="{{ url()->current() === 'http://127.0.0.1:8000/registerscl1' ? 'bg-blue-800 text-white' : '' }} rounded-r-full w-full flex p-2 gap-2">
                <div class="bg-white text-black font-medium w-6 rounded-full p-1 text-xs ">1</div>
                <p>Personal</p>
            </div>
            <div
                class="{{ url()->current() === 'http://127.0.0.1:8000/registerscl2' ? 'bg-blue-800 text-white' : '' }} rounded-full flex p-2 gap-2 w-full">
                <div class="bg-white text-black w-6 rounded-full p-1 text-xs ">2</div>
                <p>Company</p>
            </div>
            <div
                class="{{ url()->current() === 'http://127.0.0.1:8000/registerscl3' ? 'bg-blue-800 text-white' : '' }} rounded-full flex p-2 gap-2 w-full">
                <div class="bg-white text-black w-6 rounded-full p-1 text-xs ">3</div>
                <p>Address</p>
            </div>
            <div
                class="{{ url()->current() === 'http://127.0.0.1:8000/registerscl4' ? 'bg-blue-800 text-white' : '' }} rounded-full flex p-2 gap-2 w-full">
                <div class="bg-white text-black w-6 rounded-full p-1 text-xs ">4</div>
                <p>Contact</p>
            </div>
            <div
                class="{{ url()->current() === 'http://127.0.0.1:8000/registerscl5' ? 'bg-blue-800 text-white' : '' }} rounded-l-full flex p-2 gap-2 w-full">
                <div class="bg-white text-black w-6 rounded-full p-1 text-xs ">5</div>
                <p>Document</p>
            </div>
        @else
            <div
                class="{{ Str::contains(url()->current(), 'step/1') ? 'bg-blue-800 text-white' : '' }} rounded-r-full w-full flex p-2 gap-2">
                <div class="bg-white text-black font-medium w-6 rounded-full p-1 text-xs ">1</div>
                <p>Personal</p>
            </div>
            <div
                class="{{ Str::contains(url()->current(), 'step/2') ? 'bg-blue-800 text-white' : '' }} rounded-full flex p-2 gap-2 w-full">
                <div class="bg-white text-black w-6 rounded-full p-1 text-xs ">2</div>
                <p>Contact</p>
            </div>
            <div
                class="{{ Str::contains(url()->current(), 'step/3') ? 'bg-blue-800 text-white' : '' }} rounded-full flex p-2 gap-2 w-full">
                <div class="bg-white text-black w-6 rounded-full p-1 text-xs ">3</div>
                <p>Address</p>
            </div>
            <div
                class="{{ Str::contains(url()->current(), 'step/4') ? 'bg-blue-800 text-white' : '' }} rounded-full flex p-2 gap-2 w-full">
                <div class="bg-white text-black w-6 rounded-full p-1 text-xs ">4</div>
                <p>Emergency</p>
            </div>
            <div
                class="{{ Str::contains(url()->current(), 'step/5') ? 'bg-blue-800 text-white' : '' }} rounded-l-full flex p-2 gap-2 w-full">
                <div class="bg-white text-black w-6 rounded-full p-1 text-xs ">5</div>
                <p>Document</p>
            </div>
        @endif
    </div>
    {{ $slot }}
</div>
