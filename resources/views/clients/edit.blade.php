@extends('clients.layout')
@section('content')
<div class="card">
  <div class="card-header">Page</div>
  <div class="card-body">
      
      <form action="{{ url('clients/' .$clients->id_client) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id_client" id="id_client" value="{{$clients->id_client}}" id="id_client" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$clients->client_name}}" class="form-control"></br>
        <label>email</label></br>
        <input type="text" name="email" id="email" value="{{$clients->email}}" class="form-control"></br>
        <label>credit card</label></br>
        <input type="text" name="credit card" id="credit card" value="{{$clients->credit_card}}" class="form-control"></br>
        <label>Adress</label></br>
        <input type="text" name="address" id="address" value="{{$clients->address}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop