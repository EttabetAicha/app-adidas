@extends('products.layout')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Edit Product
            </div>
            <div class="card-body">
                <form action="{{ url('products/' . $product->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method("PATCH")

                    <div class="mb-3">
                        <label for="product_name" class="form-label">Name</label>
                        <input type="text" name="product_name" id="product_name" value="{{ $product->product_name }}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="description" class="form-control">{{ $product->description }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" name="price" id="price" value="{{ $product->price }}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="category_id" class="form-label">Category</label>
                        <select name="category_id" id="category_id" class="form-control">
                            @foreach($categories as $category)
                                <option value="{{ $category->category_id }}" {{ $product->category->category_id == $category->category_id ? 'selected' : '' }}>
                                    {{ $category->category_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="images" class="form-label">Product Image</label>
                        <input type="file" name="images" id="images" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-success">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
