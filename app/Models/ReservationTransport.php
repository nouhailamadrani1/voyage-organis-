<?php

namespace App\Models;

use App\Models\User;
use App\Models\Transport;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ReservationTransport extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'transport_id',
        'user_id',
        
    ];
    public function transport()
    {
        return $this->belongsTo(Transport::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
