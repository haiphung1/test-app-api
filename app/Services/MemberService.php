<?php

namespace App\Services;

use App\Interfaces\MemberServiceInterface;
use App\Models\Member;

class MemberService implements MemberServiceInterface
{

    public function __construct(UploadService $uploadService)
    {
        $this->uploadService = $uploadService;
    }

    public function addMember($data)
    {
        $member = new Member();
        $member->fill($data->all());
        if ($member->avatar) {
            $path = $this->uploadService->upload($data);
            $member->avatar = asset($path);
        };

        return $member->save();
    }
}
