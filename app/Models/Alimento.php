<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Alimento extends Model
{
    use SoftDeletes;
    protected $table = 'alimentos';
    protected $guarded = [
        'id'
    ];

    protected $fillable = [
        "nome",
        "porcao",
        "carboidratos",
        "proteinas",
        "gorduras",
        "fibras",
        "sodio",
        "calorias",
        "status"
    ];
}