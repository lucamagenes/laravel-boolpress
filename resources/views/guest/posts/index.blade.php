@extends('layouts.app')


@section('content')

    <div class="container">
        <div class="row gy-3">

            @foreach ($posts as $post)

                <div class="col-md-4">
                    <div class="card h-100">
                        <img class="card-img-top" src="{{ $post->cover }}" alt="">
                        <div class="card-body d-flex align-items-start flex-column">
                            <h4 class="card-title">{{ $post->title }}</h4>
                            <a class="mt-auto" href="{{ route('posts.show', $post->slug) }}">View post</a>
                        </div>
                    </div>
                </div>


            @endforeach

        </div>
    </div>


@endsection
