<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function create()
    {
        return view('blog');
    }
    public function store(Request $request, Article $article)
    {
        $request->validate([
           
            'article_id' => 'required',
            'description' => 'required'
        ]);

        $comment = new Comment;
        $comment->user_id = Auth::user()->id;
        $comment->article_id = $request->article_id ;
        $comment->description = $request->description;
        $comment->save();

        return redirect()->back();
    }


    public function show($comment) {
        $comments = Comment::where('article_id',$comment)->get();
        return view('blog', ['comments' => $comments]);
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();

        return redirect()->back();
    }
}
