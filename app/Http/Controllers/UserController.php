<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show($id)
{
    $user = User::findOrFail($id);
    return view('profile', compact('user'));
}
    public function update(Request $request, $id)
    {

        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');

        if (request()->hasFile('image')) {
            $image = request()->file('image');
            $destinationPath = 'images/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);

            $user['image'] = "$postImage"; }
           $user->save();

        return redirect()->back()->with('success', 'User updated successfully.');
   
    }

    
    public function delete(Request $request, $id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('/')->with('success', 'Profile deleted successfully.');
    }
}