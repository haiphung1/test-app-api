<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

interface ProjectServiceInterface
{
    public function getAllProject();
    public function addProject(Request $request);
    public function updateProject(Request $request);
}
