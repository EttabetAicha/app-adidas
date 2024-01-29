@extends('clients.layout')
@section('content')
<div class="card">
  <div class="card-header">clients Page</div>
  <div class="card-body">
      
      <form action="{{ url('clients') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>email</label></br>
        <input type="email" name="email" id="email" class="form-control"></br>
        <label>credit card</label></br>
        <input type="text" name="credit card" id="credit_card" class="form-control"></br>
        <label>Adress</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop