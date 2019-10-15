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

    public function addProject(Request $request)
    {
        return Project::create($request->all());
    }

    public function updateProject(Request $request)
    {
        $data = $request->except('_token', 'id');
        $project = Project::find($request->id);

        return $project->update($data);
    }
}
