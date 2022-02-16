<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rating extends Model
{
    use SoftDeletes,HasFactory;

    protected $table = 'ratings';

    protected $fillable = ['movie_id','rating','username','description'];

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
