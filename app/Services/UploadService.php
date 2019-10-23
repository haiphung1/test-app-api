<?php

namespace App\Services;


use Illuminate\Http\Request;

class UploadService
{
    public function upload(Request $request)
    {

            $filename = $request->avatar->getClientOriginalName();
//            dd($filename);
            $filename = str_replace(' ', '-', $filename);
            $filename = uniqid() . '-' . $filename;
            $path = request()->avatar->move('images/avatar', $filename);
//            dd($path);
            return $path;

    }
}
