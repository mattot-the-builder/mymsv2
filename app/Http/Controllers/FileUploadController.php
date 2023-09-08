<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\TemporaryFile;

class FileUploadController extends Controller
{
    //
    public function tmpUpload(Request $request)
    {
        if ($request->hasfile('front_ic')) {
            $image = $request->file('front_ic');
            $file_name = $image->getClientOriginalName();
            $folder = uniqid('ic', true);
            $image->storeAs('tmp/' . $folder, $file_name);
            TemporaryFile::create([
                'folder' => $folder,
                'file' => $file_name
            ]);
            return $folder;
        }

        if ($request->hasfile('back_ic')) {
            $image = $request->file('back_ic');
            $file_name = $image->getClientOriginalName();
            $folder = uniqid('ic', true);
            $image->storeAs('tmp/' . $folder, $file_name);
            TemporaryFile::create([
                'folder' => $folder,
                'file' => $file_name
            ]);
            return $folder;
        }

        return '';
    }

    public function tmpDelete()
    {
        $tmp_file = TemporaryFile::where('folder', request()->getContent())->first();
        if ($tmp_file) {
            Storage::deleteDirectory('tmp/' . $tmp_file->folder);
            $tmp_file->delete();
            return response('');
        }
    }
}
