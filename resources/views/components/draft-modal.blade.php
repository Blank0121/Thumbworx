<x-bladewind.modal size="large" name="save-draft" ok_button_label="Continue" ok_button_action="saveDraft()">
    <p class="text-xl font-bold">Are you sure you want to stop the registration process?</p>
    <br />
    <p class="text-base font-semibold">Drafting your registration enables you to continue your registration
        within a period of time.</p>
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
