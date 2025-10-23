<div class="p-4">
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Project Management') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Create and manage your projects.') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

    {{-- Button Section  --}}
    <div class="text-end md-4">


        <flux:modal.trigger name="project-modal">
            <flux:button variant="primary" color="indigo" icon="plus-circle" class="cursor-pointer">Add Project
            </flux:button>
        </flux:modal.trigger>
    </div>

    {{-- Render Form component --}}
    <livewire:projects.form-modal />

</div>
