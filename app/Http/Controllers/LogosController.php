<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logos;
use App\Traits\Upload; //import the trait
use Illuminate\Support\Str;


class LogosController extends Controller
{
    use Upload;//add this trait
    //

    public function store(Request $request)
    {

        //file_id var mı yok mu bak 
        

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $ext = $file->getClientOriginalExtension();


            $path = $this->UploadFile($file, 'Logos');//use the method in the trait
            //ext ve name alınacak 
            
            Logos::create([
                'path' => $path,
                'name' => Str::of($path)->basename($ext),
                'ext' => $ext
            ]);


            return response()->json('File Uploaded Successfully',200);
        }
    }

    public function update_file(Request $request) //POST
    {
        //get the file id and retrieve the file record from the database
        $file_id = $request->input('file_id');
        $file = Logos::where('id', $file_id)->first();
        //check if the request has a file
        if ($request->hasFile('file')) {
            //check if the existing file is present and delete it from the storage
            if (!is_null($file->path)) {
                $this->deleteFile($file->path);
            }
            //upload the new file
            $path = $this->UploadFile($request->file('file'), 'Logos');
        }
        //upadate the file path in the database
        $file->update(['path' => $path]);

        //redirect with the success message

        return response()->json('File Updated Successfully',200);
    }
}
