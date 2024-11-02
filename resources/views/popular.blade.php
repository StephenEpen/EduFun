@extends('layouts.main')
@section('title', 'Popular')

@section('container')
    <h2 class="fw-bold mx-5 mt-5 mb-4">Popular</h2>

    <div class="my-5 mx-5">
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
    </div>

    <div class="d-flex justify-content-center mt-5">
        {{ $articles->links() }}
    </div>
@endsection
