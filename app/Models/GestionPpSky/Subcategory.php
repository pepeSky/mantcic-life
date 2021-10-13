<?php

namespace App\Models\GestionPpSky;

use App\Models\Mantenance\Unit;
use App\Models\Store\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    protected $guarded = ['id'];



    // Relacion uno a muchos

    public function products(){
        return $this->hasMany(Product::class);
    }

    // Relación uno a muchos inversa

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
        }

    public function units(){
        return $this->hasMany(Unit::class);
    }


}
