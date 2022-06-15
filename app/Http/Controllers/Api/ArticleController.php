<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleResource;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Services\ArticleService;

class ArticleController extends Controller
{
    /**
     * @var ArticleService
     */
    protected $service;
    public function __construct(ArticleService $service)
    {
        $this->service = $service;
    }

    public function show(Request $request)
    {
        $article=$this->service->getArticleBySlug($request);
        return new ArticleResource($article);
    }
    public  function viewsIncrement(Request $request)
    {
        $article=$this->service->getArticleBySlug($request);
        $article->state->increment('views');
        return new ArticleResource($article);

    }
    public function likesIncrement(Request $request)
    {
        $article=$this->service->getArticleBySlug($request);
        $increment=$request->get('increment');
        $increment ? $article->state->increment('likes') : $article->state->decrement('likes');
        return new ArticleResource($article);

    }
}
