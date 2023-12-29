<?php

namespace App\Repositories;


use App\Interfaces\IFirms;
use App\Models\Firms;
use Illuminate\Support\Facades\DB;


class FirmsRepository implements IFirms
{

    public function getMainFirms(){
        return response()->json(Firms::where('parent_company_id',0)->get(),200);
    }


}
