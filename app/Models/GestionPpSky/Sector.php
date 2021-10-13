<?php

namespace App\Models\GestionPpSky;

use App\Models\Mantenance\Unit;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function categories()
    {
        return $this->hasmany(Category::class);
    }

    public function units()
    {
        return $this->hasmany(Unit::class);
    }
}
