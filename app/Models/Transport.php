<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    use HasFactory;
    protected $fillable = [
          'nom',
          'depuis',
          'pour',
          'date_de_départ',
          'date_arrivee',
          'heure_de_départ',
          'heure_arrivee',
          'nombre_passagers',
          'image',
          'prix',

         
    ];
    public function reservationsTransport()
    {
        return $this->hasMany(ReservationTransport::class);
    }
}
