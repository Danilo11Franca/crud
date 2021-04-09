<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index(){
        $clientes = cliente::orderby("id", "desc")->paginate(10);
        return view("clientes.index", ["clientes" => $clientes]);
    }

    public function create(){
        return view("clientes.create");
    }

    public function insert(Request $request){
        $cliente = new cliente();
        $cliente->nome = $request->nome;
        $cliente->cpf = $request->cpf;
        $cliente->idade = $request->idade;
        $cliente->email = $request->email;
        $cliente->save();
        return redirect()->route('clientes');
    }

    public function editar(Request $request, cliente $cliente){
        $cliente->nome = $request->nome;
        $cliente->cpf = $request->cpf;
        $cliente->idade = $request->idade;
        $cliente->email = $request->email;
        $cliente->save();
        return redirect()->route('clientes');
    }

    public function show($id)
    {
        $cliente = cliente::find($id);
        return view("clientes.show", ["cliente" => $cliente]);
    }
    
    public function edit(cliente $cliente)
    {
        return view("clientes.edit", ["cliente" => $cliente]);
    }

    public function delete(cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route("clientes");
    }

    public function search(Request $request)
    {
        
        $search = $request->nome;
        
        $clientes = cliente::query()
        ->where('nome', 'LIKE', "%{$search}%")
        ->orderby("id", "desc")
        ->paginate();

        return view("clientes.search", ["clientes" => $clientes]);
    }
    
}
