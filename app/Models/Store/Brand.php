<?php

namespace App\Models\Store;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\GestionPpSky\Category;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = ['name'];


    // Relacion uno a muchos
    public function products(){
        return $this->hasMany(Product::class);
    }

    // Relacion muchos a muchos
    public function categories(){
        return $this->belongsToMany(Category::class);
    }





}
