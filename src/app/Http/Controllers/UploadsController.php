<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\XMLParser;
use App\Upload;
use DB;
use PhpParser\Serializer\XML;

class UploadsController extends Controller
{

    public function __construct(XMLParser $xmlParser)
    {
        $this->xmlParser = $xmlParser;
    }

    public function index()
    {
        return view('uploads.index');
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

        $user = $request->user();
        $file = $request->file('screenings');

        $upload = new Upload();
        DB::transaction(function () use ($user, $file, $upload) {
            $upload->fill([
                'original_name' => $file->getClientOriginalName(),
            ]);
            $user->uploads()->save($upload);

            $path = $file->storeAs('', $upload->generateStorageName(), 'uploads');

            $upload->path = $path;
            $upload->save();
        });

        $screening_data = $this->xmlParser->parseToArray($upload->path, 'uploads');

        return redirect()->action(
            'UploadsController@show', ['upload' => $upload]
        )->with('status', 'File uploaded!');
    }

    public function show(Upload $upload)
    {

        return '';
    }
}
