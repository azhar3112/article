<?php

namespace App\Http\Controllers\User;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();

        return view('articles.index', compact('articles'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        //method 1
        //$article = new Article();
        //$article->title = $request->title;
        //$article->body = $request->body;

        //$article->save();

        //method 2 
        Article::create($request->only('title', 'body'));

        return redirect()->route('articles.index');

    }

    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

        public function update(Request $request, Article $article)
        {
            $article->update($request->only('title', 'body'));

            return redirect()->route('articles.index');
            
        
        }

public function destroy(Article $article)
        {
            $article->delete();

            return redirect()->route('articles.index');
        }

        

    
}
