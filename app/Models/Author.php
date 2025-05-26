<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
        'nome',
        'cpf',
        'data_nasc',
        'pais',
        'estado',
    ];

    public function Books()
    {
        return $this->hasMany(Book::class);
    }
}
