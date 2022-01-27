@extends('layouts.admin')

@section('content')

    <div class="d-flex justify-content-between pt-4">
        <div class="col-6">
            <h1>Posts</h1>
        </div>
        <div class="col-6 text-end">
            <a name="" id="" class="btn btn-dark" href="{{ route('admin.posts.create') }}" role="button">
                New Post
            </a>
        </div>
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
                        <a class="btn btn-primary text-white" href="{{ route('posts.show', $post->slug) }}"><i
                                class="fas fa-eye fa-lg fa-fw"></i></a>
                        <a class="btn btn-secondary text-white" href="{{ route('admin.posts.edit', $post->slug) }}"><i
                                class="fas fa-pencil-alt fa-lg fa-fw"></i></a>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger text-white" data-bs-toggle="modal"
                            data-bs-target="#delete_post-{{ $post->slug }}">
                            <i class="fas fa-trash-alt fa-lg fa-fw"></i>
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="delete_post-{{ $post->slug }}" tabindex="-1" role="dialog"
                            aria-labelledby="delete_post_{{ $post->title }}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Delete post: {{ $post->title }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Sei sicuro di voler cancellare il post?
                                        <br>
                                        Una volta cancellato non potrà più essere recuperato.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <form action="{{ route('admin.posts.destroy', $post->slug) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </td>
                </tr>

            @endforeach
        </tbody>
    </table>

    {{ $posts->links() }}


@endsection
