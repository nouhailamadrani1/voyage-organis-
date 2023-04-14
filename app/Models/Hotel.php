<?php

namespace App\Models;

use App\Models\Voyage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'image',
        'ville',
        'pays',
        'description',
        'nbre_etoiles',
        
        
    ];

    

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
    public function voyage()
    {
        return $this->hasMany(Voyage::class);
    }
}
