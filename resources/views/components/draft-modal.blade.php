<x-bladewind.modal size="large" name="draft-modal" ok_button_label="Continue" show_action_buttons="false">
    <p class="text-xl font-bold text-white">Continue Your Registration</p>
    <br />
    <p class="font-semibold text-lg">Welcome back!</p>
    <br />

    <p class="font-semibold">To continue where you left off, please paste the draft ID you received when you saved your
        registration:</p>
    <form action="{{ route('dh.get-draft') }}" class="draft-form w-full flex flex-col" method="post">
        @csrf
        <x-text-input required autocomplete="off" name="draft_id" class="mt-2 w-full" />
        @if ($errors->has('draft_id'))
            <x-input-error :messages="$errors->get('draft_id')" class="mt-1" />
        @endif
        <x-bladewind.button class="self-end mt-2" type="secondary" can_submit="true"
            size="small">Continue</x-bladewind.button>
    </form>
</x-bladewind.modal>

<script>
    saveDraft = () => {
        if (validateForm('.draft-form')) {
            domEl('.draft-form').submit();
        } else {
            return false;
        }
    }
</script>
