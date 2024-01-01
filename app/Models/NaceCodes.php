<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NaceCodes extends Model
{

    use HasFactory;

    protected $table = "nace_codes";
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'nace_code',
        'business',
        'hazard_class',
        'created_at',
        'updated_at'
    ];
}
