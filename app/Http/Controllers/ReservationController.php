<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        $reservation = new Reservation([
            'clientNom' => $request->input('clientNom'),
            'clientEmail' => $request->input('clientEmail'),
            'hotel_nom' => $request->input('hotel_nom'),
            'pays' => $request->input('pays'),
            'depuis' => $request->input('depuis'),
            'pour' => $request->input('pour'),
            'date_de_départ' => $request->input('date_de_départ'),
            'date_arrivee' => $request->input('date_arrivee'),
            'heure_de_départ' => $request->input('heure_de_départ'),
            'heure_arrivee' => $request->input('heure_arrivee'),
            'client_id' => $request->input('client_id'),
            'prix_totale'=>$request->input('prix_totale')
           
        ]);

        $reservation->save();

        return redirect()->back()->with('success', 'Reservation added successfully!');
    }
}