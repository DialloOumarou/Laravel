<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bureau extends Model
{
    use HasFactory;

    public function centre()
    {
        return $this->belongsTo(Centre::class);
    }

    public function resultat()
    {
        return $this->hasMany(Resultat::class);
    }
}
