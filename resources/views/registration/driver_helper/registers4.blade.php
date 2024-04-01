<x-registration-layout>
    <x-registration-card>
        <form action="{{ route('dh.step-4') }}" method="POST" class=" flex-col flex gap-4 w-full signup-form px-10 py-8">
            @csrf
            <div class="w-full">
                <label for="emergency_name" class="text-sm font-semibold">Full name<span
                        class="text-red-600">*</span></label>
                @if ($user != null && $user->emergency_fullname != null)
                    <x-text-input required id="emergency_name" class="block mt-1 w-full" name="emergency_name"
                        value="{{ $user->emergency_name }}" autocomplete="off" />
                @else
                    <x-text-input required id="emergency_name" class="block mt-1 w-full" name="emergency_name"
                        :value="old('emergency_name')" autofocus autocomplete="off" />
                @endif
                @if ($errors->has('emergency_name'))
                    <x-input-error :messages="$errors->get('emergency_name')" class="mt-1" />
                @endif
            </div>
            <div class="flex gap-4 w-full">
                <div class="w-full">
                    <label for="emergency_relationship" class="text-sm font-semibold">Relationship<span
                            class="text-red-600">*</span></label>
                    @if ($user != null && $user->phone_number2 != null)
                        <x-text-input placeholder="Parent/Guardian, Sibling, Friend, etc." required
                            id="emergency_relationship" class="block mt-1 w-full" name="emergency_relationship"
                            value="{{ $user->emergency_relationship }}" autocomplete="off" />
                    @else
                        <x-text-input placeholder="Parent/Guardian, Sibling, Friend, etc." required
                            id="emergency_relationship" class="block mt-1 w-full" name="emergency_relationship"
                            :value="old('emergency_relationship')" autocomplete="off" />
                    @endif
                    @if ($errors->has('emergency_relationship'))
                        <x-input-error :messages="$errors->get('emergency_relationship')" class="mt-1" />
                    @endif
                </div>
                <div class="w-full">
                    <label for="emergency_phone" class="text-sm font-semibold">Phone number<span
                            class="text-red-600">*</span></label>
                    @if ($user != null && $user->emergency_phone != null)
                        <x-text-input required id="emergency_phone" class="block mt-1 w-full" name="emergency_phone"
                            value="{{ $user->emergency_phone }}" autocomplete="off" />
                    @else
                        <x-text-input required id="emergency_phone" class="block mt-1 w-full" name="emergency_phone"
                            :value="old('emergency_phone')" autocomplete="off" />
                    @endif
                    @if ($errors->has('emergency_phone'))
                        <x-input-error :messages="$errors->get('emergency_phone')" class="mt-1" />
                    @endif
                </div>
            </div>
            <div class="w-full">
                <label for="emergency_email" class="text-sm font-semibold">Email <span
                        class="text-red-600">*</span></label>
                @if ($user != null && $user->emergency_email != null)
                    <x-text-input type="email" required id="emergency_email" class="block mt-1 w-full"
                        name="emergency_email" value="{{ $user->emergency_email }}" autocomplete="off" />
                @else
                    <x-text-input type="email" required id="emergency_email" class="block mt-1 w-full"
                        name="emergency_email" :value="old('emergency_email')" autocomplete="off" />
                @endif
                @if ($errors->has('emergency_email'))
                    <x-input-error :messages="$errors->get('emergency_email')" class="mt-1" />
                @endif
            </div>
            <div class="w-full">
                <label for="emergency_address" class="text-sm font-semibold">Emergency Address<span
                        class="text-red-600">*</span></label>
                @if ($user != null && $user->emergency_address != null)
                    <x-text-input id="emergency_address" type="emergency_address" class="block mt-1 w-full"
                        name="emergency_address" value="{{ $user->emergency_address }}" autocomplete="off" />
                @else
                    <x-text-input required id="emergency_address" class="block mt-1 w-full" name="emergency_address"
                        :value="old('emergency_address')" autocomplete="off" />
                @endif
                @if ($errors->has('emergency_address'))
                    <x-input-error :messages="$errors->get('emergency_address')" class="mt-1" />
                @endif
            </div>
            <div class="flex w-full justify-between">
                <x-bladewind.button size="small" can_submit="false" onclick="showModal('save-draft')">Save as
                    draft</x-bladewind.button>
                <x-bladewind.button can_submit="true" size="small">Next</x-bladewind.button>
            </div>
        </form>
    </x-registration-card>
    <x-confirm-draft-modal />
</x-registration-layout>
