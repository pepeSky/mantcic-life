<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    const BORRADOR = 1;
    const PUBLICADO = 2;

    protected $guarded = ['id','created_at','updated_at'];


    // Relacion uno a muchos
    public function dimensions(){
        return $this->hasMany(Dimension::class);
    }

    // Relación uno a muchos inversa
    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function subcategory(){
        return $this->belongsTo(subcategory::class);
    }

    // Relación muchos a muchos
    public function features(){
        return $this->belongsToMany(Feature::class);
    }

    // Relación uno a muchos polimorfica
    public function images(){
        return $this->morphMany(Image::class, 'imageable');
    }


}
