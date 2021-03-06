@extends('layouts.admin')

@section('content')

    <div class="py-4">
        <form action="{{ route('admin.posts.update', $post->slug) }}" method="post" enctype="multipart/form-data">
            <div class="d-flex justify-content-between">
                <div class="col-6">
                    <h1>Update {{ $post->title }}</h1>
                </div>
                <div class="col-6 text-end">
                    <button type="submit" class="btn btn-dark">Save</button>
                </div>
            </div>
            @include('partials.errors')
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" id="title" class="form-control @error('title') is_invalid @enderror"
                            placeholder="title" aria-describedby="titleHelperq" value="{{ $post->title }}">
                        <small id="titleHelperq" class="text-muted">Inserisci il titlo</small>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="sub_title" class="form-label">Sub Title</label>
                        <input type="text" name="sub_title" id="sub_title"
                            class="form-control @error('sub_title') is_invalid @enderror" placeholder="sub title"
                            aria-describedby="sub_titleHelperq" value="{{ $post->sub_title }}">
                        <small id="sub_titleHelperq" class="text-muted">Inserisci il sottotitolo</small>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <div class="row align-items-center">
                    <div class="col-6">
                        <label for="cover" class="form-label">Cambia la Cover</label>
                        <input type="file" name="cover" id="cover" class="form-control @error('cover') is_invalid @enderror"
                            placeholder="https://" aria-describedby="coverHelperq" accept="images/*">
                        <small id="coverHelperq" class="text-muted">Cambia la cover del post</small>
                    </div>
                    <div class="col-6">
                        <img height="100" src="{{ asset('storage/' . $post->cover) }}" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="category_id" class="form-label">Categories</label>
                        <select class="form-control @error('category_id') is_invalid @enderror" name="category_id"
                            id="category_id">
                            <option value="">Uncategorized</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ $category->id === $post->category_id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="tags" class="form-label">Tags</label>
                        <select multiple class="form-select" name="tags[]" id="tags">
                            <option disabled>Select all tags</option>
                            @foreach ($tags as $tag)
                                <option value="{{ $tag->id }}"
                                    {{ $post->tags->contains($tag->id) ? 'selected' : '' }}>{{ $tag->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="body" class="form-label @error('body') is_invalid @enderror">Body</label>
                <textarea class="form-control" name="body" id="body" rows="5">{{ $post->body }}</textarea>
            </div>

        </form>
    </div>


@endsection
