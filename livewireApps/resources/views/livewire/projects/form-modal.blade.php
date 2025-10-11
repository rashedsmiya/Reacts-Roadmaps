<div>
    <flux:modal name="project-modal" class="md:w-[32rem]">
        <form wire:submit="saveProject" class="space-y-6">
            <div>
                <flux:heading class="font-bold" size="lg">Create profile</flux:heading>
                <flux:text class="mt-2">Add a new project using the from below.</flux:text>
            </div>

            {{-- Project Name --}}
            <div class="form-group">
                <flux:input wire:model="name" label="Project Name" placeholder="Enter Project name" />
            </div>

            {{-- Description    --}}
            <div class="form-group">
                <flux:textarea wire:model="description" label="Description" placeholder="Short Project Description"
                    rows="3" />
            </div>

            {{-- Deadline --}}
            <div class="form-group">
                <flux:input wire:model="deadline" type="date" label="Deadline" placeholder="Enter Project name" />
            </div>

            {{-- Status    --}}
            <div class="form-group">
                <flux:select wire:model="status" label="Status" placeholder="Select Status...">
                    <flux:select.option value="pending">Pending</flux:select.option>
                    <flux:select.option value="in-progress">In-Progress</flux:select.option>
                    <flux:select.option value="completed">Completed</flux:select.option>
                    <flux:select.option value="cancelled">Cancelled</flux:select.option>
                </flux:select>
            </div>

            {{-- Project Logo    --}}
            <div class="form-group">
                <flux:input wire:model="project_logo" type="file" class="cursor-pointer" label="Project Logo"
                    accept="image/*" placeholder="Enter Project name" />
            </div>


            {{-- Button  --}}
            <div class="flex justify-end pt-4">
                <flux:spacer />

                <flux:modal.close>
                    <flux:button variant="ghost" class="cursor-pointer">Cancel</flux:button>
                </flux:modal.close>

                <flux:button type="submit" variant="primary" color="indigo" class="cursor-pointer ms-2">Save
                    changes
                </flux:button>
            </div>
        </form>
    </flux:modal>
</div>
