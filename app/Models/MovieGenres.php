<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MovieGenres extends Model
{
    use SoftDeletes;

    protected $table = 'movie_genres';

    protected $fillable = ['movie_id','genre_id'];

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
