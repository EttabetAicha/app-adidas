@extends('categories.layout')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h2 class="text-center">category Management</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/category/create') }}" class="btn btn-success mb-3" title="Add New category">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead class="table-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($category as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->category_name }}</td>
                                        <td class="d-flex">
                                            <a href="{{ url('/category/' . $item->category_id) }}" title="View category" class="btn btn-info btn-sm me-1"><i class="fa fa-eye" aria-hidden="true"></i> View</a>
                                            <a href="{{ url('/category/' . $item->category_id . '/edit') }}" title="Edit category" class="btn btn-primary btn-sm me-1"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                                            <form method="POST" action="{{ url('/category/' . $item->category_id) }}" accept-charset="UTF-8" style="display:inline">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete category" onclick="return confirm('Confirm delete?')">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
