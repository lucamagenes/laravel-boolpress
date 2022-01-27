@extends('layouts.admin')

@section('content')

    <div class="d-flex justify-content-between py-4">
        <h1>Posts</h1>

        <a name="" id="" class="btn btn-dark" href="{{ route('admin.posts.create') }}" role="button">New
            Post</a>
    </div>


    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cover</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)


                <tr>
                    <td scope="row">{{ $post->id }}</td>
                    <td><img width="100" src="{{ $post->cover }}" alt=""></td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->slug }}</td>
                    <td>
                        <a href="{{ route('posts.show', $post->slug) }}"><i class="fas fa-eye fa-lg fa-fw"></i></a>
                        <i class="fas fa-pencil-alt fa-lg fa-fw"></i>
                        <i class="fas fa-trash-alt fa-lg fa-fw"></i>
                    </td>
                </tr>

            @endforeach
        </tbody>
    </table>

    {{ $posts->links() }}


@endsection
