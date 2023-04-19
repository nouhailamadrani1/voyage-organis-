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
        return view('hotel.edit', compact('hotel'));
    }

    public function update(Request $request, Hotel $hotel)
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
    $searchTerm = $request->input('searchHotelD');
    $query = Transport::query();

    if (!empty($searchTerm)) {
        $query->where('nom', 'like', '%'.$searchTerm.'%');
    }
     $transports = $query->paginate(4);
    
        
     return redirect()->back([
        'hotels' => $hotels,
        'searchTerm' => $searchTerm,
        'transports' => $transports
        ]);
    }
}