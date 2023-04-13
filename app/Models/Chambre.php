<?php

namespace App\Models;

use App\Models\Hotel;
use App\Models\Reservation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Chambre extends Model
{
    use HasFactory;
   
    protected $fillable = [
        'numero',
        'image1',
        'image2',
        'image3',
        'image4',
        'nbre_lits',
        'description',
        'réserve',
        'hotel_id',
        'type',
        'prix',
    ];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function reservations()
    {
        return $this->belongsTo(Reservation::class);
    }
}
