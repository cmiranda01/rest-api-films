<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $table = 'f_film';
    protected $fillable = ['rating', 'title', 'year'];
    public function filmImage()
    {
        return $this->hasOne(FilmImage::class,'film_fk');
    }
}
