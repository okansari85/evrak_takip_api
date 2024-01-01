<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\INaceCodes;

class NaceCodesController extends Controller
{
    //
    private INaceCodes $naceCodesRepository;

    public function __construct(INaceCodes $_naceCodesRepository)
    {
        $this->naceCodesRepository = $_naceCodesRepository;
    }

    public function index(Request $request)
    {
        $search = $request->query('search');
        $per_page = $request->query('per_page');

        return response()->json($this->naceCodesRepository->getAllNaceCodes($search,$per_page));
    }



}
