<x-jet-action-section>
    <x-slot name="title">
        {{ __('Delete Account') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Permanently delete your account.') }}
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600">
            {{ __('Contact Administrator to Delete the account.') }}
        </div>

        <div class="mt-5">
            <x-jet-danger-button wire:click="confirmUserDeletion" disabled readanly>
                {{ __('Delete Account') }}
            </x-jet-danger-button>
        </div>

   
    </x-slot>
</x-jet-action-section>
