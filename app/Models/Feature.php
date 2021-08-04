<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    // Relación muchos a muchos
    public function products(){
        return $this->belongsToMany(Product::class);
    }

    public function dimensions(){
        return $this->belongsToMany(Dimension::class);
    }

}
