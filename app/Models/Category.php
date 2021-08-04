<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Relación uno a muchos
    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }

    // Relacion muchos a muchos
    public function brands()
    {
        return $this->belongsToMany(Brand::class);
    }

    // relación uno a muchos a traves de otra relación
    public function products()
    {
        return $this->hasManyThrough(Product::class, Subcategory::class);
    }
}
