<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    use HasFactory;
    protected $fillable = [
          'nom',
          'nombre_passagers',
          'image',
          'prix',

         
    ];
    public function reservationsTransport()
    {
        return $this->hasMany(ReservationTransport::class);
    }
}
