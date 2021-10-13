<?php

namespace App\Models\GestionPpSky;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function science(){
        return $this->belongsTo(Science::class);
    }

    public function sectors(){
        return $this->hasMany(Sector::class);
    }
}
