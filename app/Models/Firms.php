<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Firms extends Model
{
    use HasFactory;
    protected $table = 'firms';

    protected $fillable = [
        'company_title',
        'short_name',
        'nace_code_id',
        'firm_type_id',
        'firm_sgk',
        'parent_company_id',
        'name_surname',
        'province_id',
        'district_id',
        'created_at',
        'updated_at'
    ];

}
