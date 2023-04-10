<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            
        ]);
    }

    protected function create(array $data) {
        
        if (request()->hasFile('image')) {
            $image = request()->file('image');
            $destinationPath = 'images/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);

           $data['image'] = "$postImage";
        //   $image = request()->file('image')->getClientOriginalName();
        //     request()->file('image')->storeAs('avatars', $image, 'public');
    }
    return User::create([
        'name'     => $data['name'],
        'email'    => $data['email'],
        'image'    => $data['image'] ,
        'password' => Hash::make($data['password']),
    ]);
}}