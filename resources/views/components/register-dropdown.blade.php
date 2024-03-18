<ul class="flex items-center justify-center gap-2">
    <li>
        <x-bladewind.button class="navbar-link" type="secondary" size="tiny">
            Login
        </x-bladewind.button>
    </li>
    <li class="relative">
        <x-bladewind.button onclick="clickMe()" type="secondary" size="tiny">
            Register
        </x-bladewind.button>
        <ul id="drp" class="absolute invisible hidden left-[-80%] top-10 bg-[#334155] rounded-lg">
            <li id="dh-drp" class="relative">
                <x-bladewind.button class="w-full" radius="small" type="secondary" size="small">
                    <div class="flex items-center justify-center gap-2 w-full">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-3 h-3">
                            <path fill-rule="evenodd"
                                d="M14 8a.75.75 0 0 1-.75.75H4.56l3.22 3.22a.75.75 0 1 1-1.06 1.06l-4.5-4.5a.75.75 0 0 1 0-1.06l4.5-4.5a.75.75 0 0 1 1.06 1.06L4.56 7.25h8.69A.75.75 0 0 1 14 8Z"
                                clip-rule="evenodd" />
                        </svg>
                        <p>Driver/Helper</p>
                    </div>
                </x-bladewind.button>
                <ul id="dh" class="absolute invisible hidden left-[-105%] top-0 bg-[#334155] rounded-lg">
                    <a href="{{ route('dh.step-1') }}">
                        <x-bladewind.button class="w-full" radius="small" type="secondary" size="small">
                            New registration
                        </x-bladewind.button>
                    </a>
                    <li class="mt-1">
                        <x-bladewind.button class="w-full" radius="small" can_submit="false"
                            onclick="showModal('draft-modal')" type="secondary" size="small">
                            Draft
                        </x-bladewind.button>
                        <x-draft-modal />
                    </li>
                </ul>
            </li>
            <li id="cl-drp" class="mt-1">
                <x-bladewind.button class="w-full" radius="small" type="secondary" size="small">
                    <div class="flex items-center justify-center gap-2 w-full">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-3 h-3">
                            <path fill-rule="evenodd"
                                d="M14 8a.75.75 0 0 1-.75.75H4.56l3.22 3.22a.75.75 0 1 1-1.06 1.06l-4.5-4.5a.75.75 0 0 1 0-1.06l4.5-4.5a.75.75 0 0 1 1.06 1.06L4.56 7.25h8.69A.75.75 0 0 1 14 8Z"
                                clip-rule="evenodd" />
                        </svg>
                        <p>Client</p>
                    </div>
                </x-bladewind.button>
                <ul id="cl" class="absolute invisible hidden left-[-105%] top-0 bg-[#334155] rounded-lg">
                    <li>
                        <x-bladewind.button class="w-full" radius="small" type="secondary" size="small">
                            New registration
                        </x-bladewind.button>
                    </li>
                    <li class="mt-1">
                        <x-bladewind.button class="w-full" radius="small" type="secondary" size="small">
                            Draft
                        </x-bladewind.button>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
</ul>
