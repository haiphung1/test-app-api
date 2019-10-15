<?php

namespace App\Http\Controllers;

use App\Interfaces\ProjectServiceInterface;
use App\Http\Requests\ProjectRequest;
use Illuminate\Http\Request;

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
        $this->projectService->addProject($request);

        return response()->json("success", 200);
    }

    public function update(ProjectRequest $request)
    {
        $this->projectService->updateProject($request);

        return response()->json("success", 200);
    }
}
