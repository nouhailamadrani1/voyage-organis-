<?php

namespace App\Models;

use App\Models\Voyage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
    public function voyage()
    {
        return $this->hasMany(Voyage::class);
    }
}
