<?php

namespace App\Services;

use App\Interfaces\ProjectServiceInterface;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectService implements ProjectServiceInterface
{
    public function getAllProject()
    {
        return Project::all();
    }

    public function addProject($data)
    {
        return Project::create($data);
    }

    public function updateProject($id, $data)
    {
        return Project::where('id', $id)->update($data);
    }
}
