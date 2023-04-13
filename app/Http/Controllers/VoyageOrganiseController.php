<?php

namespace App\Http\Controllers;

use App\Models\VoyageOrganise;
use Illuminate\Http\Request;

class VoyageOrganiseController extends Controller
{
    public function index()
    {
        $voyageOrganises = VoyageOrganise::all();

        return view('voyage_organises.index', compact('voyageOrganises'));
    }

    public function create()
    {
        return view('voyage_organises.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'titre' => 'required|max:255',
            'image' => 'nullable|image|max:2048',
            'pays' => 'required|max:255',
            'nombre_place' => 'required|integer',
            'description' => 'required',
                        'depuis'  => 'required',
            'pour'  => 'required',
            'date_de_départ'  => 'required',
            'date_arrivee'  => 'required|date|after_or_equal:date_de_départ',
            'heure_de_départ'  => 'required',
            'heure_arrivee'  => 'required',
            'hotel_id' => 'required|exists:hotels,id',
            'transport_id' => 'required|exists:transports,id',
        ]);

        $voyage = new VoyageOrganise();
        $voyage->fill($validatedData);
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $voyage['image'] = "$postImage";

        }

        $voyage->save();

        return redirect()->route('voyage_organises.index')->with('success', 'Voyage organisé ajouté avec succès.');
    }

    public function edit(VoyageOrganise $voyageOrganise)
    {
        return view('voyage_organises.edit', compact('voyageOrganise'));
    }

    public function update(Request $request, VoyageOrganise $voyageOrganise)
    {
        $validatedData = $request->validate([
            'titre' => 'required|max:255',
            'image' => 'nullable|image|max:2048',
            'pays' => 'required|max:255',
            'nombre_place' => 'required|integer',
            'description' => 'required',
            'prix' => 'required|numeric',
            'depuis' => 'required|max:255',
            'pour' => 'required|max:255',
            'date_de_départ' => 'required|date',
            'date_arrivee' => 'required|date',
            'heure_de_départ' => 'required|date_format:H:i',
            'heure_arrivee' => 'required|date_format:H:i',
            'hotel_id' => 'required|exists:hotels,id',
            'transport_id' => 'required|exists:transports,id',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('public/images');
            $validatedData['image'] = str_replace('public/', '', $image);
        }

        $voyageOrganise->update($validatedData);

        return redirect()->route('voyage_organises.index')->with('success', 'Voyage organisé modifié avec succès.');
    }

}
