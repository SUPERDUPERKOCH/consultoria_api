<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dobra extends Model
{
    protected $guarded = [
        'id'
    ];

    protected $fillable = [
        'title', 'description'
    ];
}