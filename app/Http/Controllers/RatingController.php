<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class RatingController extends Controller
{
    public function index()
    {
        $articles = Article::all()->map(function($article){
            return $article;//  if($article->isPublished()) return $article;
        }) 
        ->reject(function($article){
            return empty($article);
        })
        ->sortBy('name');//rating
        return view('rating.index', ['articles' => $articles]);
    }
}
