@extends('layouts.app')
@section('content')
    <h1>{{$article->name}}</h1>
    <div>{{$article->body}}</div>
@endsection




<ol>
	@foreach($article as $article)
		<li>
			<a href="{{ route('article_categories.show' )}}">
				{{$article->name}}
			</a>
			<p>
				{{$article->body}}
			</p>
		</li>
	@endforeach
</ol>



