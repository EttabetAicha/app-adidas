@extends('categories.layout')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Create New category
            </div>
            <div class="card-body">
                <form action="{{ url('category') }}" method="post">  
                    @csrf
                    <div class="mb-3">
                        <label for="category_name" class="form-label">Name</label>
                        <input type="text" name="category_name" id="category_name" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-success">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
