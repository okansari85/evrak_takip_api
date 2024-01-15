<?php

namespace App\Repositories;


use App\Interfaces\ILogos;
use App\Models\Logos;
use Illuminate\Support\Facades\DB;
use App\Traits\Upload; //import the trait
use Illuminate\Support\Str;



class LogosRepository implements ILogos
{

    use Upload;//add this trait

    public function uploadLogo($file){

        $ext = $file->getClientOriginalExtension();
        $path = $this->UploadFile($file, 'Logos_');//use the method in the trait

        $logo = Logos::create([
            'path' => $path,
            'name' => Str::of($path)->basename($ext),
            'ext' => $ext
        ]);

        return  response()->json($logo,200);

    }


    public function updateLogo($file,$file_id){

        $exist_file = Logos::where('id', $file_id)->first();

        if (!is_null($exist_file->path)) {
                $this->deleteFile($exist_file->path);
        }

        $path = $this->UploadFile($file, 'Logos_');
        $exist_file->update(['path' => $path]);

        return  response()->json($exist_file,200);

    }

}
