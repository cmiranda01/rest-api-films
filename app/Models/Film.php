<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    protected $table = 'f_film';
    // aqui ponemos los atributos de la película
    protected $fillable = ['rating', 'title', 'year'];
    // aqui defino la relacion que hay entre imagen y pelicula, que en este caso con el ejemplo que tenía decií que fuera de uno a uno
    public function filmImage()
    {
        // y claro tambein pongo cual es la clave foranea
        return $this->hasOne(FilmImage::class,'film_fk');
    }
}
