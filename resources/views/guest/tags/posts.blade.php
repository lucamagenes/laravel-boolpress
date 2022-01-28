@extends('layouts.app')

@section('content')

    <div class="p-5 bg-dark text-white">
        <div class="container">
            <h1 class="display-3">Tag: {{ $tag->name }}</h1>
            <p class="lead">All posts of this tag</p>
        </div>
    </div>

    <div class="container">
        <div class="row gy-3">

            @forelse ($posts as $post)

                <div class="col-md-4">
                    <div class="card h-100">
                        <img class="card-img-top" src="{{ $post->cover }}" alt="">
                        <div class="card-body d-flex align-items-start flex-column">
                            <h4 class="card-title">{{ $post->title }}</h4>
                            <a class="mt-auto" href="{{ route('posts.show', $post->slug) }}">View post</a>
                        </div>
                    </div>
                </div>
            @empty

                <div class="col">
                    <p>Sorry! Nothing to show</p>
                </div>

            @endforelse

        </div>
    </div>



@endsection
