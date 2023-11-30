<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aluno extends Model
{
    use SoftDeletes;
    protected $table = 'alunos';
    protected $guarded = [
        'id'
    ];

    protected $fillable = [
        "nome",
        "email",
        "sexo",
        "idade",
        "altura",
        "peso",
        "tmb",
    ];
}