@extends('layouts.main')
@section('title', 'Home')

@section('container')
    <img class="img-fluid w-100" src="{{ asset('/img/hero-img.jpg') }}" alt="hero-section-image"
        style="height: 500px; object-fit: fill;">

    @foreach ($articles as $article)
        @include('components.card', [
            'img' => $article->img,
            'title' => $article->title,
            'createdAt' => $article->created_at,
            'author' => $article->writer->name,
            'description' => $article->description,
            'category' => $article->category->name,
        ])
    @endforeach
@endsection
