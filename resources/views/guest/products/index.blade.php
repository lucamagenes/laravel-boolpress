@extends('layouts.app')


@section('content')

    <div class="p-5 bg-dark text-white">
        <div class="container">
            <h1 class="display-3">Shop</h1>
            <p class="lead">See all products</p>
        </div>
    </div>

    <div class="container py-4">
        <div class="row gy-3">

            @foreach ($products as $product)

                <div class="col-md-4">
                    <div class="card h-100">
                        <img class="card-img-top" src="{{ $product->image }}" alt="">
                        <div class="card-body d-flex align-items-start flex-column">
                            <h4 class="card-title">{{ $product->name }}</h4>
                            <p class="card-text">&euro;{{ $product->price }}</p>
                            <a class="mt-auto" href="{{ route('products.show', $product->id) }}">View product</a>
                        </div>
                    </div>
                </div>


            @endforeach

        </div>
    </div>


@endsection
