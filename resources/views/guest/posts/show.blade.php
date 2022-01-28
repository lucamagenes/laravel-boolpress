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

                        @if ($post->category)
                            Category: <a
                                href="{{ route('categories.posts', $post->category->slug) }}">{{ $post->category->name }}</a>
                        @else
                            <span>'Uncategorized'</span>
                        @endif

                    </div>
                    <div class="category">
                        Tags:
                        @forelse ($post->tags as $tag)
                            <a href="{{ route('tags.posts', $tag->slug) }}">{{ $tag->name }}</a>
                        @empty
                            <span>Untagged</span>
                        @endforelse
                    </div>
                </div>
                <p class="card-text">{{ $post->body }}</p>
            </div>
        </div>


    </div>


@endsection
