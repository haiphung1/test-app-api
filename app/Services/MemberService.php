<?php

namespace App\Services;

use App\Interfaces\MemberServiceInterface;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberService implements MemberServiceInterface
{
    const CHECK_IMAGE = 0;
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

    public function updateMember($id, $data)
    {
        $member = Member::find($id);
        $member->fill($data->all());
        if ($member->avatar > self::CHECK_IMAGE) {
            $path = $this->uploadService->upload($data);
            $member->avatar = asset($path);
        };

        return $member->update();
    }
}
