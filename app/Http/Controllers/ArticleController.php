<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

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
        $article = Article::create($request->all());
        return redirect()->route('articles.index');
    }

    public function edit($id)
    {
        $article = Article::find($id);
        return view('articles.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        Article::update($id, $request->all());
        return redirect()->route('articles.index');
    }

    public function destroy($id)
    {
        Article::delete($id);
        return redirect()->route('articles.index');
    }
}