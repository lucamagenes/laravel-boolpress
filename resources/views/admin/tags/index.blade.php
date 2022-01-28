@extends('layouts.admin')


@section('content')

    <div class=" py-4">
        <h1>Tags</h1>
        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('admin.tags.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Tag name here"
                            aria-describedby="nameHelper">
                        <small id="nameHelper" class="text-muted">Type a new tag name here</small>
                    </div>
                    <button type="submit" class="btn btn-dark">Add tag</button>
                </form>
            </div>
            <div class="col-md-6">
                <ul class="list-group">
                    @foreach ($tags as $tag)
                        <li class="list-group-item d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <a class="badge rounded-pill bg-dark text-white text-decoration-none me-2"
                                    href="{{ route('tags.posts', $tag->slug) }}">
                                    {{ $tag->posts()->count() }}
                                </a>
                                <form action="{{ route('admin.tags.update', $tag->slug) }}" method="post">
                                    @csrf
                                    @method('PATCH')

                                    <input class="border-0" type="text" name="name" id="name"
                                        value="{{ $tag->name }}">
                                </form>
                            </div>
                            <div class="actions">
                                <form action="{{ route('admin.tags.destroy', $tag->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fas fa-trash-alt text-white"></i>
                                    </button>
                                </form>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>



@endsection
