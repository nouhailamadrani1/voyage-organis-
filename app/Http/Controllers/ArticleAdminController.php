<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleAdminController extends Controller
{
    public function index(){
        $articles = Article::all();
        return view('blogDashboard')->with(compact('articles'));
        
        }
    
        public function create()
        {
            return view('blogDashboard');
        }
    
        public function store(Request $request)
        {
            $validatedData = $request->validate([
                'title' => 'required',
                'description' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
    
            $article = new Article;
            $article->title = $validatedData['title'];
            $article->description = $validatedData['description'];
            $article->user_id = auth()->user()->id;
    
            
            if ($image = $request->file('image')) {
                $destinationPath = 'images/';
                $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $postImage);
                $article['image'] = "$postImage";
    
            }
    
            $article->save();
    
            return redirect()->back()->with('success', 'Article created successfully.');
        }
        // public function articleComments(){
    
        // }
    
        public function edit(Article $article)
        {
            return view('blog', ['article' => $article]);
        }
    
        public function update(Request $request, Article $article)
        {
            $validatedData = $request->validate([
                'title' => 'required|max:255',
                'description' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
    
            $article->title = $validatedData['title'];
            $article->description = $validatedData['description'];
    
           
            if ($image = $request->file('image')) {
                $destinationPath = 'images/';
                $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $postImage);
                $article['image'] = "$postImage";
            }
            $article->save();
    
            return view('blog')->with('success', 'Article updated successfully.');
        }
    
        public function destroy(Article $article)
        {
            $article->delete();
    
            return redirect()->back()->with('success', 'Article deleted successfully.');
        }
}
