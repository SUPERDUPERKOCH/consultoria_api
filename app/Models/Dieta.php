<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dieta extends Model
{
    use SoftDeletes;
    protected $table = "dietas";
    protected $guarded = [
        'id'
    ];

    protected $fillable = [
        "aluno_id",
        "horario",
        "refeicao_ordem",
        "alimento_id",
        "quantidade",
    ];
}