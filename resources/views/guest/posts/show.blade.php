@extends('layouts.app')

@section('content')


    <div class="container py-4">
        <div class="content">
            <img height="480" class="card-img-top" src="{{ $post->cover }}" alt="{{ $post->title }}">

            @auth
                <div class="actions">
                    <a href="{{ route('admin.posts.index') }}">Back to posts</a>
                </div>

            @endauth

            <div class="details p-4">
                <h1 class="card-title">{{ $post->title }}</h1>
                <h4 class="card-title">{{ $post->sub_title }}</h4>
                <div class="metadata">
                    <div class="category">
                        Category: {{ $post->category != null ? $post->category->name : 'Uncategorized' }}
                    </div>
                </div>
                <p class="card-text">{{ $post->body }}</p>
            </div>
        </div>


    </div>


@endsection
