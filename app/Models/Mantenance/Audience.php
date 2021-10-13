<?php

namespace App\Models\Mantenance;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audience extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Relación uno a muchos inversa

    public function service(){
        return $this->belongsTo(Service::class);
    }

}
