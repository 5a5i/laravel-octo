<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MovieLanguages extends Model
{
    use SoftDeletes;

    protected $table = 'movie_languages';

    protected $fillable = ['movie_id','language_id'];

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
