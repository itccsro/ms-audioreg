<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Upload;
use DB;

class UploadsController extends Controller
{
    public function index()
    {
        return 'user home';
    }

    public function create()
    {
        return view('uploads.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'screenings' => 'required|file|mimetypes:application/xml',
        ]);

        $file = $request->file('screenings');

        $upload = new Upload();

        DB::transaction(function () use ($file, $upload) {
            $upload->fill([
                'original_file_name' => $file->path(),
            ]);
            $upload->save();

            $path = $file->storeAs('uploads', $upload->generateStorageName());

            $upload->path = $path;
            $upload->save();
        });

        return redirect()->action(
            'UploadsController@show', ['upload' => $upload]
        )->with('status', 'File uploaded!');
    }

    public function show(Upload $upload)
    {
        
        return '';
    }
}
