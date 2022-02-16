<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Movie extends Model
{
    use SoftDeletes,HasFactory;

    protected $table = 'movies';

    protected $primaryKey = 'id';

    protected $fillable = ['title','description','length','release','mpaa_rating'];

    public function scopeNowshowing($query)
    {
        $now = Carbon::now();

        return $query->where('release', '<', $now->format('Y-m-d'))->whereHas('shows', function ($query) use ($now) {
            $query->where('start_time', '>', $now->format('Y-m-d H:i:s'));
        });

    }

    public function genres()
    {
        return $this->hasManyThrough(MovieGenres::class, Genre::class);
    }

    public function performers()
    {
        return $this->hasManyThrough(MoviePerformers::class, Performer::class);
    }

    public function languages()
    {
        return $this->hasManyThrough(MovieLanguages::class, Language::class);
    }

    public function directors()
    {
        return $this->hasManyThrough(MovieDirectors::class, Director::class);
    }

    public function theaters()
    {
        return $this->hasManyThrough(Shows::class, Theater::class);
    }

    public function shows()
    {
        return $this->hasMany(Shows::class, 'movie_id', 'id');
    }
}
