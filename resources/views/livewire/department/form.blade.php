<div class="space-y-6">

    <div>
        <x-input-label for="name" :value="__('Name')" />
        <x-text-input wire:model="form.name" id="name" name="name" type="text" class="mt-1 block w-full"
            autocomplete="name" placeholder="Name" />
        @error('form.name')
            <x-input-error class="mt-2" :messages="$message" />
        @enderror
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>