<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    protected $table = "province";

    protected $primaryKey = 'id';

    protected $casts = [ 'order' => 'integer', 'plate'  => 'integer'];

    protected $fillable = [
        'title',
        'order',
        'plate',
        'created_at',
        'updated_at'
    ];

    public function district(){
        return $this->hasMany(District::class,'province_id');
    }
}
