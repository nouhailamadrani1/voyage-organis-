<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Transport;
use App\Models\Voyage;
use Illuminate\Http\Request;

class VoyageController extends Controller
{
    public function index()
    {
        $voyages = Voyage::all();
         $transports= Transport::all();
         $hotels=Hotel::all();
        return view('voyageDashboard', compact('voyages','transports','hotels'));
    }

    public function create()
    {
        return view('voyageDashboard');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'titre' => 'required',
            'image' => 'nullable|image|max:2048',
            'pays' => 'required|max:255',
            'prix' => 'nullable',
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
      

        $voyage = new Voyage();
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

    public function edit(Voyage $voyage)
    {
        return view('voyageDashboard', compact('voyageOrganise'));
    }

    public function update(Request $request, Voyage $voyage)
    {
     

    }
    public function showHome()
    {
        $voyages = Voyage::all();
         $transports= Transport::all();
         $hotels=Hotel::all();
        
        return view('voyage', compact('voyages','transports','hotels'));
    }
    // public function destroy(Voyage $voyage ,$id)
    // {
    //     $voyage->delete($id);
    //     return redirect()->route('voyageDashboard.index');
    // }

    public function destroy($id)
{
    $voyage = Voyage::findOrFail($id);
    $voyage->delete();
    return redirect()->route('voyageDashboard.index');
}

}
