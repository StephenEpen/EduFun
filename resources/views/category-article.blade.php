@extends('layouts.main')
@section('title', 'Article')

@section('container')
    <h2 class="fw-bold mx-5 mt-5 mb-4">{{ $category }}</h2>

    <div class="mx-5">
        <img class="w-100" src="{{ asset($article->img) }}" alt=""  style="height: 500px; object-fit: fill;border-radius: 40px">
        <div style="margin-left: 20px; margin-right: 20px">
            <p class="card-text fs-6 mt-2 mb-3">{{ \Carbon\Carbon::parse($article->createdAt)->format('d M Y') }}| by:
                {{ $article->writer->name }}</p>
            <p>{!! nl2br(e($article->description)) !!}</p>
        </div>
    </div>
@endsection
