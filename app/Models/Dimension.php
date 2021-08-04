<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dimension extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'product_id'];

    // Relación uno a muchos inversa

    public function product(){
        return $this->belongsTo(Product::class);
    }

    // Relacion muchos a muchos

    public function features(){
        return $this->belongsToMany(Feature::class);
    }
}
