<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::with('tags','state')->allPaginate(10);
        return view('app.article.index', compact('articles'));
    }

    public function show($slug){
        $article = Article::with('comments','state','tags')->findBySlug($slug);
        return view('app.article.show', compact('article'));
    }
    public function allByTag(Tag $tag)
    {
        $articles = $tag->articles()->with('tags','state')->allPaginate(10);
        return view('app.article.byTag', compact('articles'));

    }
}
