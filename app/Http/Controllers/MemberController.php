<?php

namespace App\Http\Controllers;

use App\Interfaces\MemberServiceInterface;
use Illuminate\Support\Facades\Lang;
use App\Http\Requests\MemberRequest;

class MemberController extends Controller
{
    public function __construct(MemberServiceInterface $memberService)
    {
        $this->memberService = $memberService;
    }

    public function store(MemberRequest $request)
    {
        $data = $request;
        $this->memberService->addMember($data);

        return response()->json(Lang::get('messages.success'), 200);
    }
}
