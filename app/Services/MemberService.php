<?php

namespace App\Services;

use App\Interfaces\MemberServiceInterface;
use App\Models\Member;
use App\Models\Join;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;

class MemberService implements MemberServiceInterface
{
    public function __construct(UploadService $uploadService)
    {
        $this->uploadService = $uploadService;
    }

    public function getAllMember()
    {
        return Member::all();
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

        if ($member->avatar > 0) {
            $path = $this->uploadService->upload($data);
            $member->avatar = asset($path);
        };

        return $member->update();
    }

    public function deleteMember($id)
    {
        $join = Join::where('member_id', $id)->delete();
        $member = Member::where('id', $id)->delete();

        return response()->json(Lang::get('messages.success'), 200);
    }

    public function getMemberById($id)
    {
        return Member::find($id);
    }
}
