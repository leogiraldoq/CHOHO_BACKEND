<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class terceros extends Model
{
    use HasFactory;

    protected $table = "terceros";

    protected $fillable =[
        'nit',
        'razon_social',
        'tipo',
        'activo'
    ];
}
