<?php

namespace App\Http\Controllers;

use App\Models\Chambre;
use Illuminate\Http\Request;

class ChambreController extends Controller
{
    public function index()
    {
        $chambres = Chambre::all();
        return view('chambres.index', compact('chambres'));
    }

    public function create()
    {
        return view('chambres.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'numero' => 'required',
            'prix' => 'required',
            'réserve' => 'required',
            'nbre_lits' => 'required|integer',
            'hotel_id' => 'required|exists:hotels,id'
        ]);

        $chambre = new Chambre();
        $chambre->fill($validatedData);
        $chambre->save();

        return redirect()->route('chambres.index');
    }

    public function show(Chambre $chambre)
    {
        return view('chambres.show', compact('chambre'));
    }

    public function edit(Chambre $chambre)
    {
        return view('chambres.edit', compact('chambre'));
    }

    public function update(Request $request, Chambre $chambre)
    {
        $validatedData = $request->validate([
            'numero' => 'required',
            'prix' => 'required',
            'réserve' => 'required',
            'nbre_lits' => 'required|integer',
            'hotel_id' => 'required|exists:hotels,id'
        ]);

        $chambre->fill($validatedData);
        $chambre->save();

        return redirect()->route('chambres.index');
    }

    public function destroy(Chambre $chambre)
    {
        $chambre->delete();
        return redirect()->route('chambres.index');
    }
}
