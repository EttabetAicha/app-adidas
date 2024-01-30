@extends('sales.layout')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Edit Sale
            </div>
            <div class="card-body">
                <form action="{{ url('sales/' . $sale->id) }}" method="post">
                    @csrf
                    @method("PATCH")

                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="Completed" {{ $sale->status === 'Completed' ? 'selected' : '' }}>Completed</option>
                            <option value="Processing" {{ $sale->status === 'Processing' ? 'selected' : '' }}>Processing</option>
                            <option value="Shipped" {{ $sale->status === 'Shipped' ? 'selected' : '' }}>Shipped</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
