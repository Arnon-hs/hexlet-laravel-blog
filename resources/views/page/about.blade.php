@extends('layouts.app')

<!-- Секция, содержимое которой обычный текст. -->
@section('title', 'О блоге')
@section('header', 'Текст')

<!-- Секция, содержащая HTML блок. Имеет открывающую и закрывающую часть. -->
@section('content')
    <h1>О блоге</h1>
    <p>Эксперименты с Laravel на Хекслете</p>
    <ul>
        @foreach($tags as $tag)
           <li>{{ $tag }}</li>
        @endforeach
    </ul>
@endsection