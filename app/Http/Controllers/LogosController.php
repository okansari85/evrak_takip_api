<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logos;


use App\Interfaces\ILogos;


class LogosController extends Controller
{

    private ILogos $logosRepository;

    public function __construct(ILogos $_logos_repository)
    {
        $this->logosRepository = $_logos_repository;
    }

    //

    public function store(Request $request)
    {

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            return response()->json($this->logosRepository->uploadLogo($file),200);
        }
    }

    public function update_file(Request $request) //POST
    {

        $file_id = $request->input('file_id');

        if ($request->hasFile('file') && $file_id!=0) {
            $file =  $request->file('file');
            return response()->json($this->logosRepository->updateLogo($file,$file_id),200);
        }

    }
}
