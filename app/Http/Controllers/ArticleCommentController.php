<?php

namespace App\Http\Controllers;

use App\Article;
use App\ArticleComment;
use Illuminate\Http\Request;

class ArticleCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function index(Article $article)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function create(Article $article)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Article $article)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @param  \App\ArticleComment  $articleComment
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article, ArticleComment $articleComment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @param  \App\ArticleComment  $articleComment
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article, ArticleComment $comment)
    {
        return view('article_comment.edit', compact('article', 'comment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @param  \App\ArticleComment  $articleComment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article, ArticleComment $articleComment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @param  \App\ArticleComment  $articleComment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article, ArticleComment $articleComment)
    {
        //
    }
}
