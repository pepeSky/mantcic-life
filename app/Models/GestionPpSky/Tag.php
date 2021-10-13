<?php

namespace App\Models\GestionPpSky;

use App\Models\Mantenance\Input;
use App\Models\Store\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

        // Relación muchos a muchos

        public function posts(){
            return $this->belongsToMany(Post::class);
        }

        public function getRouteKeyName()
        {
            return "slug";
            }

        // Relacion n a n
        // Belongs to many = pertenece a muchos
        // La función se traduce de manera implicita con el objeto
        // 1 Tag pertenece a muchos posts
        public function inputs(){
            return $this->belongsToMany(Input::class);
        }

        public function subcategories(){
            return $this->belongsToMany(Subcategory::class);
        }
}
