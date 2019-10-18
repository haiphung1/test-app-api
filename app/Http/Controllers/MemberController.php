<?php

namespace App\Http\Controllers;

use App\Interfaces\MemberServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Http\Requests\MemberRequest;

class MemberController extends Controller
{
    public function __construct(MemberServiceInterface $memberService)
    {
        $this->memberService = $memberService;
    }

    public function index()
    {
        $member = $this->memberService->getAllMember();

        return response()->json($member);
    }

    public function store(MemberRequest $request)
    {
        $data = $request;
        $this->memberService->addMember($data);

        return response()->json(Lang::get('messages.success'), 200);
    }

    public function update(MemberRequest $request, $id)
    {
        $data = $request;
        $this->memberService->updateMember($id, $data);

        return response()->json(Lang::get('messages.success'), 200);
    }

    public function destroy($id)
    {
        $this->memberService->deleteProject($id);

        return response()->json(Lang::get('messages.success'), 200);
    }
}
