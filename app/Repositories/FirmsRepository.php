<?php

namespace App\Repositories;


use App\Interfaces\IFirms;
use App\Models\Firms;
use Illuminate\Support\Facades\DB;


class FirmsRepository implements IFirms
{

    public function getMainCompanies(){
        return response()->json(Firms::where('parent_company_id',0)->get(),200);
    }

    public function getCompanies($search,$per_page,$parent_company_id)
    {

        return response()->json(Firms::Select('firms.*','nace.hazard_class')
          ->where('firms.parent_company_id',$parent_company_id)
          ->where(function ($query) use ($search) {
            $query->where('firms.company_title', 'like', '%'.$search.'%')
                    ->orWhere('firms.short_name', 'like', '%'.$search.'%');
         })
           ->leftJoin('nace_codes as nace', 'nace.id', '=', 'firms.nace_code_id')
           ->orderBy('firms.id','desc')
           ->paginate($per_page)
           ->appends(request()->query()),200);

    }

    public function addCompany($company){


        $company = Firms::create([
            'company_title' => $company['company_title'],
            'short_name' => $company['short_name'],
            'nace_code_id' => $company['nace_code_id'],
            'firm_type_id' => $company['firm_type_id'],
            'firm_sgk' => $company['firm_sgk'],
            'parent_company_id' => $company['parent_company_id'],
            'name_surname' => $company['name_surname'],
            'province_id'=> $company['province_id'],
            'district_id'=> $company['district_id'],
        ]);

        return response()->json($company,200);

    }

    public function updateCompany($company,$id){


        $is_company_main = ($company->parent_company_id==0) ? true : false;

        /*
        if (!$is_company_main) {
            if(is_null($company->nace_code_id)){
                //hata dondur
            }
        }
        */

        $the_company = Firms::find($id);

        $the_company->company_title = $company->company_title;
        $the_company->firm_sgk = $company->firm_sgk;
        $the_company->province_id =  $company->province_id;
        $the_company->district_id =  $company->district_id;

        //is_company_main
        if($is_company_main)
        {
            $the_company->short_name = $company->short_name;
            $the_company->firm_type_id = $company->firm_type_id;
            $the_company->name_surname = $company->name_surname;

        }
        else
        {
            if(!is_null($company->nace_code_id)){
                $the_company->nace_kod_id = $company->nace_code_id;
            }
        }

        $the_company->update();
        return response()->json($the_company,200);

    }

    public function deleteCompany($id){

        $company = Firms::find($id);
        $company->update();

        return response()->json($id,200);

    }



}
