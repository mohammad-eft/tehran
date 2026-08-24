<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Modles\Article;
use Illuminate\Support\Facades\Auth;   

class ArticleController extends Controller
{
    public function create(){
        return view('article.create');
    }

    public function store(Request $request){
        $user = Auth::user()->name.' '.Auth::user()->family;
        Article::create([
            'title'=>isset($request->title) ? $request->title : null,
            'text'=>isset($request->text) ? $request->text : null,
            'creator'=>$user
        ]);
    }

    public function edit(Article $article){
        return view('article.edit', ['article'=>$article]);
    }

    public function update(Request $request, Article $article){
        $user = Auth::user()->name.' '.Auth::user()->family;
        $article->title = $request->title;
        $article->text = $request->text;
        $article->creator = $user;
        $article->save();
        return to_route('article.single', $article);
    }

    public function delete(Article $article){
        $article->delete();
        return to_route('article.list');
    }

    public function single(Article $article){
        return view('article.single', ['article'=>$article]);
    }

    public function list(){
        $articles = Article::all();
        return view('article.list', ['articles'=>$articles]);
    }
}
