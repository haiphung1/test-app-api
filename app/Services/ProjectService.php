<?php

namespace App\Services;

use App\Interfaces\ProjectServiceInterface;
use App\Models\Project;
use App\Models\Join;
use Illuminate\Support\Facades\Lang;

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

    public function editProject($id)
    {
        return Project::find($id);
    }

    public function updateProject($id, $data)
    {
        return Project::where('id', $id)->update($data);
    }

    public function deleteProject($id)
    {
        $join = Join::where('project_id', $id)->delete();
        $project = Project::where('id', $id)->delete();

        return response()->json(Lang::get('messages.success'), 200);
    }
}
