<?php

namespace App\Models\Store;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\GestionPpSky\Category;
use App\Models\GestionPpSky\tag;
use App\Models\Mantenance\Image;

class Post extends Model
{
    use HasFactory;

       // Relación 1 a Muchos Inversa

       public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

        // Relación muchos a muchos

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

        // Relación 1 a 1 polimorfica

    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
}

