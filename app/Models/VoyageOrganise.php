<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoyageOrganise extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = [
        'titre',
        'nombre_place',
        'image',
        'prix',
        'depuis',
        'pour',
        'date_de_départ',
        'date_arrivee',
        'heure_de_départ',
        'heure_arrivee',
         'pays',
         'hotel_id',
         'transport_id',
     
  ];
}
