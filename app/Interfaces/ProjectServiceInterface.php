<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

interface ProjectServiceInterface
{
    public function getAllProject();
    public function addProject($data);
    public function editProject($id);
    public function updateProject($id, $data);
    public function deleteProject($id);
}
