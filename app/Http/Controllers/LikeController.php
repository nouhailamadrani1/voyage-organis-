<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

use App\Models\Like;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function store(Request $request)
    {

        $like = new Like;

        $like->user_id = Auth::user()->id;
        $like->article_id = $request->article_id;
        $like->save();

        return redirect()->back();
    }

    public function destroy(Like $like)
    {
        $like->delete();

        return redirect()->back();
    }
}
