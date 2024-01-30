<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sales;
use App\Models\Products;
use App\Models\Clients;



class SaleController extends Controller
{
    public function index()
    {
        $sales = Sales::all();
        return view('sales.index')->with('sales', $sales);
    }

    public function create()
    {
        $products = Products::all();
        $clients = Clients::all();
        $sales = Sales::all();
        return view('sales.create', compact('products', 'clients'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'client_id' => 'required|exists:clients,id_client',
            'status' => 'required',
        ]);

        Sales::create($request->all());

        return redirect('sales')->with('flash_message', 'Sale added!');
    }

    public function show($id)
    {
        $sale = Sales::find($id);
        return view('sales.show')->with('sale', $sale);
    }

    public function edit($id)
    {
        $sale = Sales::find($id);
        return view('sales.edit')->with('sale', $sale);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'client_id' => 'required|exists:clients,id_client',
            'status' => 'required',
        ]);

        $sale = Sales::find($id);
        $sale->update($request->all());

        return redirect('sales')->with('flash_message', 'Sale updated!');
    }

    public function destroy($id)
    {
        Sales::destroy($id);
        return redirect('sales')->with('flash_message', 'Sale deleted!');
    }
}
