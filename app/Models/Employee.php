<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'nome',
        'cpf',
        'email',
        'data_nasc',
        'estado',
    ];
}