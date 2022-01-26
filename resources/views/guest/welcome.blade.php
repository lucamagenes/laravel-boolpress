@extends('layouts.app')


@section('content')


    <div class="p-5 bg-light">
        <div class="container">
            <h1 class="display-3">Welcome</h1>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis odit neque dolor sed!
                Aliquam odio quidem suscipit culpa deleniti voluptates ab. Maxime sequi ad nemo voluptates nihil temporibus
                autem laudantium.</p>
            <hr class="my-2">
            <p>View my shop</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="{{ route('products.index') }}" role="button">Vai allo shop</a>
            </p>
        </div>
    </div>

@endsection
