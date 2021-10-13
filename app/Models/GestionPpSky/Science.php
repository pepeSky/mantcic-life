<?php

namespace App\Models\GestionPpSky;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Science extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function branches(){
        return $this->hasMany(Branch::class);
    }
}
