<?php

namespace App\Models\Mantenance;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Relación uno a uno inversa
    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }
}
