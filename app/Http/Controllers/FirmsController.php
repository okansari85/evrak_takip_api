<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\IFirms;

class FirmsController extends Controller
{
    //
    private IFirms $firmsRepository;

    public function __construct(IFirms $_firms_repository)
    {
        $this->firmsRepository = $_firms_repository;
    }

    public function getMainFirms(){
        return response()->json($this->firmsRepository->getMainFirms());
    }


}
