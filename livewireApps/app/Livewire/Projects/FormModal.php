<?php

namespace App\Livewire\Projects;

use Livewire\Attributes\Validate;
use App\Services\ProjectService;
use Livewire\WithFileUploads;
use Livewire\Component;

class FormModal extends Component
{
    use WithFileUploads;

    #[Validate('required|string|max:100')]
    public $name = null;

    #[Validate('required|string|max:255')]
    public $description = null;

    #[Validate('required|string')]
    public $deadline = null;

    #[Validate('required|string')]
    public $status = 'pending';

    #[Validate('nullable|image|max:5120')]
    public $project_logo = null;

    public function saveProject(ProjectService $projectService)
    {
        // validate form here
        $validatedProjectRequest = $this->validate();

        $projectService->saveProject($validatedProjectRequest);
    }

    /**
     * Render the Livewire component view.
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function render()
    {
        return view('livewire.projects.form-modal');
    }
}
