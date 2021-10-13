<?php

namespace App\Models\Mantenance;

use App\Models\GestionPpSky\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    const DRAFT = 1;        // BORRADOR
    const REVIEW = 2;       // REVISION
    const PUBLISHED = 3;    // PUBLICADO

    protected $guarded = ['id', 'status'];


    public function getRatingAttribute(){

        if($this->reviews_count){
            return round($this->reviews->avg('rating'), 1);
        }else{
            return 5;
        }
    }

    // Query Scopes
    public function scopeCategory($query, $category_id){
        if($category_id){
            return $query->where('category_id', $category_id);
        }
    }

    public function scopeLevel($query, $level_id){
        if($level_id){
            return $query->where('level_id', $level_id);
        }
    }

    public function scopeService($query, $service_id){
        if($service_id){
            return $query->where('service_id', $service_id);
        }
    }

    public function getRouteKeyName(){
        return 'slug';
    }

    // Relación uno a muchos inversa

    //worker = Trabajador
    public function worker(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function level(){
        return $this->belongsTo(Level::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function price(){
        return $this->belongsTo(Price::class);
    }

    // Relación uno a muchos

    public function reviews(){
        return $this->hasMany(Review::class);
    }

    public function requirements(){
        return $this->hasMany(Requirement::class);
    }

    public function goals(){
        return $this->hasMany(Goal::class);
    }

    public function audiences(){
        return $this->hasMany(Audience::class);
    }

    public function modules(){
        return $this->hasMany(Module::class);
    }


    // Relación muchos a muchos

    //worker = Obrero
    public function jobs(){
        return $this->belongsToMany(User::class);
    }

    public function clients(){
        return $this->belongsToMany(User::class);
    }

    // Relación uno a uno polimorfica

    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }

    public function activities(){
        return $this->hasManyThrough(Activity::class, Module::class);
    }


}
