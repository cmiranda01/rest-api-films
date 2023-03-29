<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilmImage extends Model
{
    use HasFactory;
    protected $table = 'f_image';
// aqui marcamos su relacion con film
    public function film()
    {
        return $this->belongsTo(Film::class);
    }
}
