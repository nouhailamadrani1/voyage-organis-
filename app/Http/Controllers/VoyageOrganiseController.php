<?php

namespace App\Http\Controllers;

use App\Models\VoyageOrganise;
use Illuminate\Http\Request;

class VoyageOrganiseController extends Controller
{
    public function index()
    {
        $voyageOrganises = VoyageOrganise::all();

        return view('voyageDashboard.index', compact('voyageOrganises'));
    }

    public function create()
    {
        return view('voyageDashboard');
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

        return redirect()->route('voyageDashboard.index')->with('success', 'Voyage organisé ajouté avec succès.');
    }

    public function edit(VoyageOrganise $voyageOrganise)
    {
        return view('voyageDashboard', compact('voyageOrganise'));
    }

    public function update(Request $request, VoyageOrganise $voyageOrganise)
    {
     

    }

}
