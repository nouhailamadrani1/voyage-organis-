<?php

namespace App;

use App\Models\User;
use App\Models\Voyage;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'clientNom',
        'clientEmail',
        'hotel_nom',
        'pays',
        'depuis',
        'pour',
        'date_de_départ',
        'date_arrivee',
        'heure_de_départ',
        'heure_arrivee',
         'client_id',
         'voyage_id',
         'prix_totale',
    ];
    public function voyage()
    {
        return $this->belongsTo(Voyage::class);
    }
    public function client()
    {
        return $this->belongsTo(User::class);
    }
}
