<?php

namespace App\Repositories;


use App\Interfaces\IProvince;
use App\Models\Province;
use Illuminate\Support\Facades\DB;


class ProvincesRepository implements IProvince
{

    public function Provinceswithdistricts(){
        $provinces = Province::with(['district'])->get();
        return $provinces;
    }

}
