<?php

namespace App\Http\Controllers;

use App\Interfaces\ProjectServiceInterface;
use App\Http\Requests\ProjectRequest;
use Illuminate\Support\Facades\Lang;

class ProjectController extends Controller
{
    public function __construct(ProjectServiceInterface $projectService)
    {
        $this->projectService = $projectService;
    }

    public function index()
    {
        $project = $this->projectService->getAllProject();
        return response()->json($project);
    }

    public function store(ProjectRequest $request)
    {
        $data = $request->except('_token');
        $this->projectService->addProject($data);

        return response()->json(Lang::get('messages.success'), 200);
    }

    public function update(ProjectRequest $request, $id)
    {
        $data = $request->except('_token');
        $this->projectService->updateProject($id, $data);

        return response()->json(Lang::get('messages.success'), 200);
    }
}
