@extends('layouts.main')
@section('title', 'Writer Article')

@section('container')
    <section class="container-fluid">
        <div class="d-flex m-4 align-items-center">
            <img src="{{ asset($writer->img) }}" alt="" class="rounded-circle" style="width: 6rem;">
            <div class="text-center m-4">
                <p class="fw-bold">{{ $writer->name }}</p>
                <p class="">Spesialis {{ $writer->specialize }}</p>
            </div>
        </div>
        <div>
            @foreach ($writer->article as $article)
            @include('components.card', [
                'img' => $article->img,
                'title' => $article->title,
                'createdAt' => $article->created_at,
                'author' => $writer->name,
                'description' => $article->description,
                'category' => $writer->category->name
            ])
            @endforeach
        </div>
    </section>

@endsection