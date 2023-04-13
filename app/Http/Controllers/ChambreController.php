<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Chambre;
use Illuminate\Http\Request;

class ChambreController extends Controller
{
    
    
        public function index()
    {
        $chambers = Chambre::all();
        $hotels =Hotel::all();
        return view('chamber', compact('chambers','hotels'));
    }
    

    public function create()
    {
        return view('chambers');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'numero' => 'required',
            'prix' => 'required',
            'réserve' => 'required',
            'type' => 'required',
            'nbre_lits' => 'required|integer',
            'hotel_id' => 'required|exists:hotels,id',
            'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
            
        ]);
        $chamber = new Chambre();
        $chamber->fill($validatedData);
        if ($image = $request->file('image1')) {
            $destinationPath = 'images/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $chamber['image1'] = "$postImage";

        }

       

       
     
     

    
        $chamber->save();

        return redirect()->route('chambers.index');
    }

    public function show(Chambre $chambre)
    {
        
    }

    public function edit(Chambre $chambre)
    {
        return view('chamber', compact('chambre'));
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

        return redirect()->route('chambers.index');
    }

    public function destroy( $id)
    {  

        $chamber=Chambre::findOrFail($id);
        $chamber->delete();
        return redirect()->route('chambers.index');
    }

}
