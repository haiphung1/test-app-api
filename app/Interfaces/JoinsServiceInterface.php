<?php

namespace App\Interfaces;

interface JoinsServiceInterface
{
    public function getProjectById($id);
    public function addMemberToProject($data);
    public function deleteMember($id);
    public function member();
    public function updateRole($id, $data);
}
