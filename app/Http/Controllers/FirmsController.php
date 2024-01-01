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

    public function getMainCompanies(){
        return response()->json($this->firmsRepository->getMainCompanies());
    }

    public function index(Request $request)
    {
        $search = $request->query('search');
        $per_page = $request->query('per_page');
        $parent_company_id  = $request->query('parent_company_id');

        return response()->json($this->firmsRepository->getCompanies($search,$per_page,$parent_company_id));
    }

    public function store(Request $request)
    {
        $attr = $request->validate([
            'company_title' => 'required|string',
            'short_name' => 'required|string',
        ]);
        return response()->json($this->firmsRepository->addCompany($request));
    }

    public function update(Request $request, $id){
        return response()->json($this->firmsRepository->updateCompany($request,$id),200);
    }



}

