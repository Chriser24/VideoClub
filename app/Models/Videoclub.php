<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videoclub extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombrePelicula',
        'descripcion',
        'categoria',
        'Actores',
    ];
}