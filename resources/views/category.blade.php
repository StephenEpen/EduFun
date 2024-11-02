@extends('layouts.main')
@section('title', 'Category')

@section('container')

    <h2 class="fw-bold mx-5 mt-5 mb-4">{{ $categoryName }}</h2>

    <div class="mt-5">
        @foreach ($articles as $article)
            @include('components.card', [
                'img' => $article->img,
                'title' => $article->title,
                'createdAt' => $article->created_at,
                'author' => $article->writer->name,
                'description' => $article->description,
                'category' => $article->category->name
            ])
        @endforeach
    </div>

@endsection
