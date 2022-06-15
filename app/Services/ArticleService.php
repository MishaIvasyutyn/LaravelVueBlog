<?php
namespace App\Services;
use App\Models\Article;

class ArticleService {
    public  function getArticleByslug($request) {
        $slug = $request->get('slug');
        return Article::with('tags','comments','state')->findBySlug($slug);
    }
}
