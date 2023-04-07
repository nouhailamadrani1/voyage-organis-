<?php

namespace App\Models;

use App\Models\User;
use App\Models\Chambre;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_debut',
        'date_fin',
        'chambre_id',
        'user_id'
    ];

    public function chambre()
    {
        return $this->belongsTo(Chambre::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
