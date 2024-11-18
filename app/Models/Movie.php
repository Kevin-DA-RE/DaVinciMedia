<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $fillable = [
        "id_movie",
        "name",
        "synopsis",
        "url_img",
        "genre_id"
    ];

    public function category (){
     return $this->belongsTo(Genre::class);
    }

}
