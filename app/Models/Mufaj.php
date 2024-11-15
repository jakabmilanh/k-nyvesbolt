<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mufaj extends Model
{
    use SoftDeletes;
    use HasFactory;

    public function book(): HasMany
    {
        return $this->hasMany(book::class, 'mufaj', 'id');
    }
}
