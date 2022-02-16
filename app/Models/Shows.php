<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Shows extends Model
{
    use SoftDeletes,HasFactory;

    protected $table = 'shows';

    protected $primaryKey = 'id';

    protected $fillable = ['movie_id','theater_id','theater_room_no','start_time','end_time'];

    public function getStartTimeAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d\TH:i:s');
    }

    public function getEndTimeAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d\TH:i:s');
    }

    public function movie()
    {
        return $this->belongsTo(Movie::class,'id','movie_id');
    }

    public function theater()
    {
        return $this->belongsTo(Theater::class,'id','theater_id');
    }

}
