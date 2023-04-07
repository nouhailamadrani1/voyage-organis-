<?php

namespace App\Http\Controllers;

use App\Models\ReservationTransport;

use Illuminate\Http\Request;


class ReservationTransportController extends Controller
{
    public function index()
    {
        $ReservationTransport = ReservationTransport::all();
        return view('ReservationTransport.index', compact('ReservationTransport'));
    }

    public function create()
    {
        return view('ReservationTransport.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after_or_equal:date_debut',
            'chambre_id' => 'required|exists:chambres,id'
        ]);

        $ReservationTransport = new ReservationTransport();
        $ReservationTransport->fill($validatedData);
        $ReservationTransport->save();

        return redirect()->route('ReservationTransport.index');
    }

    public function show(ReservationTransport $ReservationTransport)
    {
        return view('ReservationTransport.show', compact('ReservationTransport'));
    }

    public function edit(ReservationTransport $ReservationTransport)
    {
        return view('ReservationTransport.edit', compact('ReservationTransport'));
    }

    public function update(Request $request, ReservationTransport $ReservationTransport)
    {
        $validatedData = $request->validate([
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after_or_equal:date_debut',
            'chambre_id' => 'required|exists:chambres,id'
        ]);

        $ReservationTransport->fill($validatedData);
        $ReservationTransport->save();

        return redirect()->route('reservations.index');
    }

    public function destroy(ReservationTransport $ReservationTransport)
    {
        $ReservationTransport->delete();
        return redirect()->route('ReservationTransport.index');
    }
}
