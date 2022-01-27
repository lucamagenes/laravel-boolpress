@extends('layouts.admin')

@section('content')

    <div class="card my-2">
        <div class="card-header">{{ __('Dashboard') }}</div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            {{ __('You are logged in!') }}
        </div>
    </div>

    <div class="py-4">

        <div class="row g-4">
            <div class="col-6">
                <div class="card">
                    <div class="card-body text-center py-4">
                        <h2 class="card-title">Product</h2>
                        <p class="card-text lead">Create a new product</p>
                    </div>
                    <a name="" id="" class="btn btn-dark" href="{{ route('admin.products.create') }}" role="button">
                        New Product

                    </a>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body text-center py-4">
                        <h2 class="card-title">Post</h2>
                        <p class="card-text lead">Create a new post</p>
                    </div>
                    <a name="" id="" class="btn btn-dark" href="{{ route('admin.posts.create') }}" role="button">
                        New Post

                    </a>
                </div>
            </div>


        </div>

    </div>

@endsection
