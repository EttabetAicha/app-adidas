@extends('clients.layout')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Create New Client
            </div>
            <div class="card-body">
                <form action="{{ url('clients') }}" method="post">  
                    @csrf

                    <div class="mb-3">
                        <label for="client_name" class="form-label">Name</label>
                        <input type="text" name="client_name" id="client_name" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="credit_card" class="form-label">Credit Card</label>
                        <input type="text" name="credit_card" id="credit_card" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" name="address" id="address" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-success">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
