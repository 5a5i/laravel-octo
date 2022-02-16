<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MoviePerformers extends Model
{
    use SoftDeletes;

    protected $table = 'movie_performers';

    protected $fillable = ['movie_id','performer_id'];

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    public function performer()
    {
        return $this->belongsTo(Performer::class);
    }
}
