<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MovieDirectors extends Model
{
    use SoftDeletes;

    protected $table = 'movie_directors';

    protected $fillable = ['movie_id','director_id'];

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    public function director()
    {
        return $this->belongsTo(Director::class);
    }
}
