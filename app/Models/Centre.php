<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centre extends Model
{
    use HasFactory;

    public function commune()
    {
        return $this->belongsTo(Commune::class);
    }

    public function bureau()
    {
        return $this->hasMany(Bureau::class);
    }
}
