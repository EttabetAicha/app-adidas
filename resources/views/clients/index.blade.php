@extends('clients.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class='text-center'>Gestion des clients </h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/clients/create') }}" class="btn btn-success btn-sm" title="Add New clients">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class=" table table-bordered">
                                <thead class='table-dark'>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>email</th>
                                        <th>credit card</th>
                                        <th>address</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($clients as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->client_name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->credit_card }}</td>
                                        <td>{{ $item->address }}</td>
                                            
                                        <td class='mx-5'>
                                            <a href="{{ url('/clients/' . $item->id_client) }}" title="View client"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Afficher</button></a>
                                            <a href="{{ url('/clients/' . $item->id_client . '/edit') }}" title="Edit clinet"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> modifier</button></a>
                                            <form method="POST" action="{{ url('/clients/' . $item->id_client) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Client" onclick="return confirm('Confirm delete?')">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer
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