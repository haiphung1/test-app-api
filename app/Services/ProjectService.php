<?php

namespace App\Services;

use App\Interfaces\ProjectServiceInterface;
use App\Models\Project;

class ProjectService implements ProjectServiceInterface
{
    public function getAllProject()
    {
        return Project::all();
    }
}
