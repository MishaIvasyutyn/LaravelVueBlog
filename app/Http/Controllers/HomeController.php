<?php

namespace App\Http\Controllers;

use App\Models\Article;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Article::with(['state','tags'])->lastLimit(6);
        return view('app.home', compact('articles'));
    }
}
