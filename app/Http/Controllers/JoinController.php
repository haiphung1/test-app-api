<?php

namespace App\Http\Controllers;

use App\Interfaces\JoinsServiceInterface;
use App\Http\Requests\JoinRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;

class JoinController extends Controller
{
    public function __construct(JoinsServiceInterface $joinsService)
    {
        $this->joinsService = $joinsService;
    }

    public function store(JoinRequest $request)
    {
        $data = $request->all();
        $this->joinsService->addMemberToProject($data);

        return response()->json(Lang::get('messages.success'), 200);
    }

    public function show($id)
    {
        $project = $this->joinsService->getProjectById($id);

        return response()->json($project);
    }

    public function destroy($id)
    {
        $this->joinsService->deleteMember($id);

        return response()->json(Lang::get('messages.success'), 200);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $this->joinsService->updateRole($id, $data);

        return response()->json(Lang::get('messages.success'), 200);
    }
    public function member()
    {
        $this->joinsService->member();
    }
}
