<?php

namespace App\Repositories;


use App\Interfaces\INaceCodes;
use App\Models\NaceCodes;
use Illuminate\Support\Facades\DB;


class NaceCodesRepository implements INaceCodes
{

    public function getAllNaceCodes($search,$per_page){

        return response()->json(NaceCodes::where('business', 'like', '%'.$search.'%')
        ->orWhere('nace_code', 'like', '%'.$search.'%')
        ->paginate($per_page)->appends(request()->query()),200);

    }

}
