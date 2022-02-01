@extends('layouts.app')


@section('content')
    <div class="p-5 bg-light">
        <div class="container">
            <h1 class="display-3">Contact us</h1>
            <p class="lead">We help you if you need</p>

        </div>
    </div>
    <div class="container">
        @include('partials.errors')
        @if (session('message'))
            <div class="alert alert-success" role="alert">
                <strong>{{ session('message') }}</strong>
            </div>
        @endif
    </div>

    <div class="container">
        <form action="{{ route('contacts.send') }}" method="post">
            @csrf

            <div class="mb-3">
                <div class="row">
                    <div class="col">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Your name"
                            aria-describedby="nameHelper" value="{{ old('name') }}" required>
                        <small id="nameHelper" class="text-muted">Type yput name here</small>
                    </div>
                    <div class="col">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="Your email"
                            aria-describedby="emailHelper" value="{{ old('email') }}" required>
                        <small id="emailHelper" class="text-muted">Type yput name here</small>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" name="message" id="message" rows="5">{{ old('message') }}</textarea>
            </div>
            <button type="submit" class="btn btn-dark">Send</button>
        </form>
    </div>
@endsection
