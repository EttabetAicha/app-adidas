@extends('categories.layout')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                category Page
            </div>
            <div class="card-body">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Name: {{ $category->category_name }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
