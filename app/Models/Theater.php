<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Theater extends Model
{
    use SoftDeletes;

    protected $table = 'theaters';

    protected $primaryKey = 'id';

    protected $fillable = ['name'];

    public function shows()
    {
        return $this->hasMany(Shows::class, 'theater_id', 'id');
    }
}
