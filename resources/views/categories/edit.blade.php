@extends('categories.layout')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Edit category
            </div>
            <div class="card-body">
                <form action="{{ url('category/' . $category->category_id) }}" method="post">
                    @csrf
                    @method("PATCH")

                    <div class="mb-3">
                        <label for="category_name" class="form-label">Name category</label>
                        <input type="text" name="category_name" id="category_name" value="{{ $category->category_name }}" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-success">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
