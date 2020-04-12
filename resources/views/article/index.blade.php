@extends('layouts.app')

@section('content')
    <h1>Список статей</h1>
    @foreach ($articles as $article)
        <h2>{{$article->name}}</h2>
        <a href="{{route('articles.edit', $article->id)}}"><small>edit</small></a>
        <a href="{{route('articles.destroy', $article->id)}}" data-confirm="Вы уверены?" data-method="delete" rel="nofollow"><small>delete</small></a>
        <div>{{Str::limit($article->body, 200)}}</div>
    @endforeach
@endsection