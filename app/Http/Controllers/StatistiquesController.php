<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use App\Models\Hotel;
use App\Models\Transport;
use Illuminate\Http\Request;

class StatistiquesController extends Controller
{
    public function count(){
        $countUser = User::count();
        $countHotel = Hotel::count();
        $countTransport = Transport::count();
        $countBlog = Article::count();
        $users = User::all();
        $hotels= Hotel::all();


        return view('dashbord')->with(compact('countUser','countHotel','countTransport','countBlog','users','hotels'));
    }

    
}