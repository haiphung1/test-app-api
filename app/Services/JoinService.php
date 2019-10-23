<?php

namespace App\Services;

use App\Interfaces\JoinsServiceInterface;
use App\Models\Join;
use App\Models\Project;
use App\Models\Member;

class JoinService implements JoinsServiceInterface
{
    public function addMemberToProject($data)
    {
        return Join::create($data);
    }

    public function getProjectById($id)
    {
        return  Join::where('project_id', $id)->get()->load('members')->load('projects');
    }

    public function deleteMember($id)
    {
        return Join::where('id', $id)->delete();
    }

    public function updateRole($id, $data)
    {
        return Join::where('id', $id)->update($data);
    }

    public function member()
    {
        $project = Project::all();
        $member = Member::all();
        $join = Join::all();
//        dd($member->toArray());
//        dd($join->toArray());
        dd($project->toArray(), $member->toArray(), $join->toArray());
    }
}
