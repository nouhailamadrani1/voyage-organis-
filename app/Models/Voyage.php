<?php

namespace App\Models;

use App\Reservation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voyage extends Model
{
  
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
         'description',
     
  ];
  public function hotel()
  {
      return $this->belongsTo(Hotel::class);
  }
  public function transport()
  {
      return $this->belongsTo(Transport::class);
  }
  public function reservation()
  {
      return $this->hasMany(Reservation::class);
  }

}
