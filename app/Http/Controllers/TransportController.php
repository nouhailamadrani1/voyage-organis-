<?php

namespace App\Http\Controllers;

use App\Models\Transport;
use Illuminate\Http\Request;

class TransportController extends Controller
{
    public function index(Request $request)
    {

         $searchTerm = $request->input('search');
        $query = Transport::query();

        if (!empty($searchTerm)) {
            $query->where('nom', 'like', '%'.$searchTerm.'%');
        }
         $transports = $query->get();
        

        return view('transport', [

            'transports' => $transports,
            'searchTerm' => $searchTerm
        ]);
    }

    public function create()
    {
        return view('transport');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'depuis'  => 'required',
            'pour'  => 'required',
            'date_de_départ'  => 'required',
            'date_arrivee'  => 'required|after_or_equal:date_de_départ',
            'heure_de_départ'  => 'required',
            'heure_arrivee'  => 'required ',
            'nombre_passagers'  => 'required',
            'prix'  => 'required',
            'description' => 'required',
            'image'=>'required'
        ]);

        $transport = new Transport();
        $transport->fill($validatedData);
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $transport['image'] = "$postImage";

        }

        $transport->save();

        return redirect()->route('voyageDashboard.index');
    }

    public function show(Transport $Transport)
    {
        return view('transport', compact('transports.index'));
    }

    public function edit(Transport $Transport)
    {
        return view('transport', compact('transports.index'));
    }

    public function update(Request $request, Transport $Transport)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'nombre_passagers'  => 'required',
            'prix'  => 'required',
            'image'=>'required'
        ]);

        $Transport->fill($validatedData);
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $Transport['image'] = "$postImage";

        }
        $Transport->save();

        return redirect()->route('transports');
    }

    public function destroy(Transport $Transport)
    {
        $Transport->delete();
        return redirect()->route('transports.index');
    }
    public function indexClient()
    {
        $transports = Transport::all();
        return view('transportHome', compact('transports'));
    }
}
