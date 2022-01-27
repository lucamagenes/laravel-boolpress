@extends('layouts.admin')

@section('content')


    <div class="py-4">
        <form action="{{ route('admin.products.store') }}" method="post">

            <div class="d-flex justify-content-between">
                <div class="col-6">
                    <h1 class="">Create a new product</h1>
                </div>
                <div class="col-6 text-end">
                    <button type="submit" class="btn btn-dark">Save</button>
                </div>
            </div>
            @include('partials.errors')

            @csrf

            <div class="row">


                <div class="mb-3 col-6">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                        placeholder="Macbook pro" aria-describedby="nameHelper" value="{{ old('name') }}">
                    <small id="nameHelper" class="text-muted">Type a name for your product</small>
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-6">
                    <label for="image" class="form-label">Image</label>
                    <input type="text" name="image" id="image" class="form-control @error('image') is-invalid @enderror"
                        placeholder="hhtps://" aria-describedby="imageHelper" value="{{ old('image') }}">
                    <small id="imageHelper" class="text-muted">Type a image for your product</small>
                    @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-6">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" step="0.01" name="price" id="price"
                        class="form-control @error('price') is-invalid @enderror" placeholder="2.50"
                        aria-describedby="priceHelper" value="{{ old('price') }}">
                    <small id="priceHelper" class="text-muted">Type a price for your product</small>
                    @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-6">
                    <label for="qty" class="form-label">Qty</label>
                    <input type="number" name="qty" id="qty" class="form-control @error('qty') is-invalid @enderror"
                        placeholder="50" aria-describedby="qtyHelper" value="{{ old('qty') }}">
                    <small id="qtyHelper" class="text-muted">Type a qty for your product</small>
                    @error('qty')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" name="description"
                        id="description" rows="5">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

            </div>


        </form>
    </div>



@endsection
