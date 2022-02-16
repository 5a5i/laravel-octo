<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Performer extends Model
{
    use SoftDeletes;

    protected $table = 'performers';

    protected $fillable = ['name'];

    public function moviePerformers()
    {
        return $this->hasMany(MoviePerformers::class);
    }
}
