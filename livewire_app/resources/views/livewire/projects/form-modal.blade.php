<div class="p-4">


    <flux:modal name="project-modal" class="md:w-[32rem]">
        <div class="space-y-6">
            <div>
                <flux:heading class="font-bold" size="lg">Create Project</flux:heading>
                <flux:text size="mt-2">Add a new project using this form below.</flux:text>
            </div>

             
            <div class="form-group">
                <flux:input label="Project Name" placeholder="Enter Project Name" />
            </div>

          
            <div class="form-group">
                <flux:textarea label="Description" placeholder="Short project description" rowa="3" />
            </div>

            
            <div class="form-group">
                <flux:input label="Deadline" type="date" />
            </div>

         
            <div class="form-group">
                <flux:select wire:model="status" label="Status" placeholder="Select Status..." />

                <flux:select.option value="pending">Pending</flux:select.option>
                <flux:select.option value="in-progress">In-Progress</flux:select.option>
                <flux:select.option value="completed">Completed</flux:select.option>
                <flux:select.option value="cancelled">Cancelled</flux:select.option>
                </flux:select>
            </div>

           
            <div class="form-group">
                <flux:input type="file" class="cursor-pointer" label="Project Logo" accept="image/*"
                    placeholder="Upload Project Name" />
            </div>

            <div class="flex">
                <flux:spacer />

                <flux:modal.close>
                    <flux:button variant="ghost" class="cursor-pointer">Cancel</flux:button>
                </flux:modal.close>

                <flux:button type="submit" variant="primary" color="indigo" class="cursor-pointer ms-2">Save Project
                </flux:button>
            </div>
        </div>
    </flux:modal>

</div>
