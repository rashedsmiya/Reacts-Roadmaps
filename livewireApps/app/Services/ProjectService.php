<?php

namespace App\Services;

use App\Repositories\ProjectRepository;

class ProjectService
{
    private $projectRepository;

    /**
     * Create a new class instance.
     */
    public function __construct(ProjectRepository $projectRepository)
    {
        $this->projectRepository = $projectRepository;
    }

    public function saveProject($projectRepository)
    {
        if (! empty($projectRepository['project_logo'])) {

            $projectRepository['project_logo'] = $projectRepository['project_logo']->store('public');
        }
    }
}
