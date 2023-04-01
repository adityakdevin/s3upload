<?php

namespace App\Http\Controllers;

use App\Http\Requests\FileUploadRequest;

class FileUploadController extends Controller
{
    public function __invoke(FileUploadRequest $request)
    {
        $path = $request->file('file')->storePublicly(path: 'test-folder', options: 's3');
        $path = \Storage::url($path);
        return view('welcome', compact('path'));
    }
}
