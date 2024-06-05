@extends('layouts.app')

@section('content')
    <div class="container">
            <h1 class="my-5 fw-bold display-4">Edit Product</h1>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <form method="POST" action="{{ route('products.update', $product->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">
                    </div>

                    <div class="form-group my-2">
                        <label for="price">Price:</label>
                        <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}">
                    </div>

                    <div class="form-group">
                        <label for="category">Category:</label>
                        <input type="text" class="form-control" id="category" name="category" value="{{ $product->category }}">
                    </div>

                    <button type="submit" class="btn btn-primary mt-2">Update Product</button>
                </form>
            </div>
        </div>
    </div>
@endsection