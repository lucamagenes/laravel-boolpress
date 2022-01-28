@extends('layouts.app')


@section('content')

    <div class="p-5 bg-dark text-white">
        <div class="container">
            <h1 class="display-3">Blog</h1>
            <p class="lead">See all Posts</p>
        </div>
    </div>

    <div class="container py-4">
        <div class="row">
            <div class="col-md-9">
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
            <aside class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h3>
                            Categories
                        </h3>
                        <ul>
                            @foreach ($categories as $category)
                                <li>
                                    <a href="{{ route('categories.posts', $category->slug) }}">{{ $category->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h3>
                            Tags
                        </h3>
                        <ul>
                            @foreach ($tags as $tag)
                                <li>
                                    <a href="{{ route('tags.posts', $tag->slug) }}">{{ $tag->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </aside>

        </div>
    </div>



@endsection
