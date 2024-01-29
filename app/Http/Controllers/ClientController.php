<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clients;

class ClientController extends Controller
{
    public function index()
    {
        $clients= Clients::all();
        return view ('clients.index')->with('clients', $clients);
    }
    public function create()
        {
            return view('clients.create');
        }
    public function store(Request $request)
        {
            $input = $request->all();
            Clients::create($input);
            return redirect('clients')->with('flash_message', 'client Addedd!');  
        }
        
        public function show($id)
        {
            $clients = Clients::find($id);
            return view('clients.show')->with('clients', $clients);
        }
        public function edit($id)
        {
            $clients = Clients::find($id);
            return view('clients.edit')->with('clients', $clients);
        }
      
        public function update(Request $request, $id)
        {
            $client = Clients::find($id);
            $client->update($request->all());
            return redirect('clients')->with('flash_message', 'Client updated!');
        }
        
        public function destroy($id)
        {
            Clients::destroy($id);
            return redirect('clients')->with('flash_message', 'clients deleted!');  
        }
        
}