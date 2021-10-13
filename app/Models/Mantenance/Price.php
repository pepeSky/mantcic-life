<?php

namespace App\Models\Mantenance;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Relación uno a muchos

    public function services(){
        return $this->hasMany(Service::class);
    }


}
