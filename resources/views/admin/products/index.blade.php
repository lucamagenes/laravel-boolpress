@extends('layouts.admin')

@section('content')


    <div class="d-flex justify-content-between pt-4">
        <div class="col-6">
            <h1>Products</h1>
        </div>
        <div class="col-6 text-end">
            <a name="" id="" class="btn btn-dark" href="{{ route('admin.products.create') }}" role="button">New
                Product</a>
        </div>
    </div>


    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)


                <tr>
                    <td scope="row">{{ $product->id }}</td>
                    <td><img width="90" src="{{ $product->image }}" alt=""></td>
                    <td>{{ $product->name }}</td>
                    <td>&euro;{{ $product->price }}</td>
                    <td>
                        <a class="btn btn-primary text-white" href="{{ route('products.show', $product->id) }}"><i
                                class="fas fa-eye fa-lg fa-fw"></i></a>
                        <a class="btn btn-secondary text-white" href=""><i class="fas fa-pencil-alt fa-lg fa-fw"></i></a>
                        <a class="btn btn-danger text-white" href=""><i class="fas fa-trash-alt fa-lg fa-fw"></i></a>


                    </td>
                </tr>

            @endforeach
        </tbody>
    </table>

    {{ $products->links() }}


@endsection
