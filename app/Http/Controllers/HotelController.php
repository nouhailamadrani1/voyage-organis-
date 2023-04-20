<?php

namespace App\Http\Controllers;


use App\Models\Hotel;
use App\Models\Transport;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index(Request $request)
    {
        $searchTerm = $request->input('search');
        $query = Hotel::query();
        
        if (!empty($searchTerm)) {
            $query->where('nom', 'like', '%'.$searchTerm.'%');
        }
        
        $hotels = $query->get();
        
        return view('hotel', [
            'hotels' => $hotels,
            'searchTerm' => $searchTerm
        ]);
    }
  
    public function create()
    {
        return view('hotel.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'ville' => 'required',
            'pays' => 'required',
            'prix' => 'required|float',
            'description' => 'required',
            'nbre_etoiles' => 'required|integer'
        ]);

        $hotel = new Hotel();
        $hotel->fill($validatedData);
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $hotel['image'] = "$postImage";

        }

        $hotel->save();

        return redirect()->route('hotel.index');
    }

    public function show(Hotel $hotel)
    {
        return view('hotel.show', compact('hotel'));
    }
   

    public function edit(Hotel $hotel)
    {
        return view('EditHotel', compact('hotel'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([

            'nom' => 'required',
            'image' => 'sometimes|nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'ville' => 'required',
            'pays' => 'required',
            'prix' => 'required',
            'description' => 'required',
            'nbre_etoiles' => 'required|integer'
        ]);
                // Find the hotel by its ID
            $hotel = Hotel::findOrFail($id);

            // Update the hotel properties with the new input data
            $hotel->nom = $validatedData['nom'];
            $hotel->ville = $validatedData['ville'];
            $hotel->pays = $validatedData['pays'];
            $hotel->nbre_etoiles = $validatedData['nbre_etoiles'];
            $hotel->prix = $validatedData['prix'];
            $hotel->description = $validatedData['description'];

                if ($image = $request->file('image')) {
                    $destinationPath = 'images/';
                    $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                    $image->move($destinationPath, $postImage);
                    $hotel['image'] = "$postImage";
                }

        $hotel->fill($validatedData);
        $hotel->save();

        return redirect()->route('hotel.index');
    }

    public function destroy(Hotel $hotel)
    {
        $hotel->delete();
        return redirect()->route('hotel.index');
    }
    public function indexClient()
    {
        $hotels = Hotel::all();
        return view('hotelHome', compact('hotels'));
    }
    public function indexHome(Request $request)
    {
        $searchTerm = $request->input('search');
        $query = Hotel::query();
        

        if (!empty($searchTerm)) {
            $query->where('ville', 'like', '%'.$searchTerm.'%');
        }
        
         
    $hotels = $query->paginate(4);
    $searchTerm = $request->input('search');
    $query = Transport::query();

    if (!empty($searchTerm)) {
        $query->where('nom', 'like', '%'.$searchTerm.'%');
    }
     $transports = $query->paginate(4);
    
        
        return view('home', [
            'hotels' => $hotels,
            'searchTerm' => $searchTerm,
            'transports' => $transports
        ]);
    }
}