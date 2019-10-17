<?php

namespace App\Services;

use Illuminate\Http\Request;

class UploadService
{
    public function upload($data)
    {
        $filename = $data->avatar->getClientOriginalName();
        $filename = str_replace(' ', '-', $filename);
        $filename = uniqid() . '-' . $filename;
        $path = request()->avatar->move('images/avatar', $filename);

        return $path;
    }
}
