<?php

namespace App\Http\Controllers;

use App\Models\Transport;
use Illuminate\Http\Request;

class TransportController extends Controller
{
    public function __construct() {
        $this->middleware(['auth']);
        $this->middleware(['role'])->only([
            'update',
            'delete',
            'create',
        ]);
    }
    public function index(Request $request)
    {

        $searchTerm = $request->input('search');
        $query = Transport::query();

        if (!empty($searchTerm)) {
            $query->where('nom', 'like', '%' . $searchTerm . '%');
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
            'nom' => 'required|max:255',
            'nombre_passagers' => 'required|numeric',
            'prix' => 'required|numeric',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
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
        session()->flash('alert', 'Transport enregistrée avec succès');

        return redirect()->route('voyageDashboard.index');
    }

    public function show(Transport $Transport)
    {
        return view('EditTransport', compact('transport'));
    }

    public function edit(Transport $transport)
    {
        return view('EditTransport', compact('transport'));
    }

    public function update(Request $request, $id)
    {
        $transport = Transport::find($id);
        $transport->fill($request->all());
    
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $transport->image = $postImage;
        }
    
        $transport->save();
        session()->flash('alert', 'Mise à jour de l Transport avec succes');
        return redirect()->route('transports.index');
    }
    
      
    public function destroy(Transport $Transport)
    {
        $Transport->delete();
        session()->flash('alert', 'Supprimer transport avec succes');
        return redirect()->route('transports.index');
    }
    public function indexClient()
    {
        $transports = Transport::all();
        return view('transportHome', compact('transports'));
    }
}
