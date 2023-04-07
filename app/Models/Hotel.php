<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'image',
        'ville',
        'pays',
        'description',
        'nbre_etoiles'
    ];

    public function chambres()
    {
        return $this->hasMany(Chambre::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
