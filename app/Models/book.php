<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class book extends Model
{
    use SoftDeletes;
    /** @use HasFactory<\Database\Factories\BookFactory> */
    use HasFactory;

    public function Foglalas()
    {
        return $this->hasMany(Foglalas::class, 'konyv_id', 'id');
    }

    
}
