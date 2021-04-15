<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        $clients = Client::orderby('id', 'desc')->paginate(10);
        return view('client.view.clients.client-view', ['clients' => $clients]);
    }

    public function viewClient($id)
    {
        $client = Client::find($id);
        return view('client.view.client.client-view', ['client' => $client]);
    }

    public function pageCreateClient(){
        return view('client.new.client.client-new');
    }

    public function createClient(Request $request){
        $client = new Client();
        $client->name = $request->name;
        $client->cpf = $request->cpf;
        $client->age = $request->age;
        $client->email = $request->email;
        $client->save();
        return redirect()->route('clients.get.view');
    }

    public function pageEditClient(Client $client)
    {
        return view('client.edit.client.client-edit', ['client' => $client]);
    }

    public function editClient(Request $request, Client $client){
        $client->name = $request->name;
        $client->cpf = $request->cpf;
        $client->age = $request->age;
        $client->email = $request->email;
        $client->save();
        return redirect()->route('clients.get.view');
    }

    public function deleteClient(Client $client)
    {
        $client->delete();
        return redirect()->route('clients.get.view');
    }

    public function searchClient(Request $request)
    {
        
        $search = $request->name;
        
        $clients = Client::query()
        ->where('name', 'LIKE', "%{$search}%")
        ->orderby('id', 'desc')
        ->paginate();

        return view('client.search.clients.client-search', ['clients' => $clients]);
    }
    
}
