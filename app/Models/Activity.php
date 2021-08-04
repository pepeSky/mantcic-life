<?php

namespace App\Models;

use GrahamCampbell\ResultType\Result;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function getCompletedAttribute(){
       return $this->users->contains(auth()->user()->id);
    }

    // Relación uno a uno
    public function description()
    {
        return $this->hasOne(Description::class);
    }

    // Relación uno a uno polimorfica
    public function resource(){
        return $this->morphOne(resource::class, 'resourceable');
    }


    // Relación muchos a muchos
    public function users(){
        return $this->BelongsToMany(User::class);
    }

    // Relación uno a muchos inversa
    public function module()
    {
        return $this->hasMany(Module::class);
    }

    public function platform()
    {
        return $this->belongsTo(Platform::class);
    }

    // Relación uno a muchos polimorfica
    public function comments(){
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function reactions(){
        return $this->morphMany(Reaction::class, 'reactionable');
    }
}
