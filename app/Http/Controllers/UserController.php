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
        $user->save();

        return redirect()->route('profile.show')->with('success', 'User updated successfully.');
    }
}
