<?php

namespace App\Http\Controllers;

use App\Interfaces\ProjectServiceInterface;
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
}
