<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Foglalas extends Model
{
    use SoftDeletes;
    /** @use HasFactory<\Database\Factories\FoglalasFactory> */
    use HasFactory;

    public function book()
    {
        return $this->belongsTo(book::class, 'id', 'konyv_id');
    }
}
