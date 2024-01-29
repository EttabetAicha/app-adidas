@extends('clients.layout')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Client Page
            </div>
            <div class="card-body">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Name: {{ $clients->client_name }}</h5>
                        <p class="card-text">Email: {{ $clients->email }}</p>
                        <p class="card-text">Credit Card: {{ $clients->credit_card }}</p>
                        <p class="card-text">Address: {{ $clients->address }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
