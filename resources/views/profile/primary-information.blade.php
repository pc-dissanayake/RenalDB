<x-jet-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Basic Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Basic  account information') }}
    </x-slot>



    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
