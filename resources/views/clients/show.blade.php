@extends('clients.layout')
@section('content')
<div class="card">
  <div class="card-header">clients Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Name : {{ $clients->client_name }}</h5>
        <p class="card-text">email : {{ $clients->email }}</p>
        <p class="card-text">credit card : {{ $clients->credit_card }}</p>
        <p class="card-text">adress : {{ $clients->address }}</p>

  </div>
      
    </hr>
  
  </div>
</div>