<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Genre extends Model
{
    use SoftDeletes;

    protected $table = 'genres';

    protected $fillable = ['genre'];

    // public function movieGenres()
    // {
    //     return $this->belongsTo(MovieGenres::class);
    // }
}
