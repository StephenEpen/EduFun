@extends('layouts.main')
@section('title', 'Writers')

@section('container')
    <h2 class="fw-bold mx-5 mt-5 mb-4">Our Writers:</h2>

    <div class="card-group d-flex row justify-content-around p-4 container-fluid mt-5">
        @foreach ($writers as $writer)
            <a href="{{ route('writerArticles', ['writer' => $writer->name]) }}" class="card text-center border border-0 text-decoration-none">
                <img class="card-img-top w-50 rounded-circle rounded mx-auto d-block" src="{{ asset($writer->img) }}" alt="">
                <p class="cart-title fw-bold mt-3">{{ $writer->name }}</p>
                <p class="cart-text">Spesialis {{ $writer->specialize }}</p>
            </a>
        @endforeach
    </div>
@endsection
