@extends('layouts.admin')

@section('content')

    <div class="container py-4">
        <h1>
            {{ $contact->name }}
        </h1>
        <div class="metadata">
            <span>
                From: {{ $contact->email }} |
            </span>
            <span>
                Date: {{ $contact->created_at }}
            </span>
            <p>
                {{ $contact->message }}
            </p>
        </div>

        <hr>

        <h2>
            Reply
        </h2>

        <form action="" method="post">
            @csrf
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" name="message" id="message" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-dark">Send</button>
        </form>

    </div>


@endsection
