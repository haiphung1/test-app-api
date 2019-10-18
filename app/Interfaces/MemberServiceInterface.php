<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

interface MemberServiceInterface
{
    public function getAllMember();
    public function addMember($data);
    public function updateMember($id, $data);
    public function deleteProject($id);
}
