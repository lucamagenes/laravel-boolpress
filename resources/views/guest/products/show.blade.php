@extends('layouts.app')

@section('content')


    <div class="container p-4">
        <div class="content d-flex">
            <img class="card-img-top" src="{{ $product->image }}" alt="{{ $product->name }}">
            <div class="details p-4">
                <h1 class="card-title">{{ $product->name }}</h1>
                <p class="card-text">&euro; {{ $product->price }}</p>
            </div>
        </div>

        @auth
            <div class="actions">
                <a href="{{ route('admin.products.index') }}">Back to products</a>
            </div>

        @endauth

        <div class="desc p-4">
            <p>
                {{ $product->description }}
            </p>
        </div>
    </div>


@endsection
