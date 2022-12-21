<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
        $items = Cliente::all();
        return view('cadastros/cliente/view-cliente-form', compact('items'));
    }

    public function insert(Request $request){

        Cliente::create($request->post());
        return redirect()->route('cliente.index');
    }

    public function update(Request $request, Cliente $id){
        $request->validate([
            'nome' => 'required',
            'id' => 'required',
            'telefone' => 'required',
            'cpf'=> 'required'
        ]);
        $id->fill($request->post())->save();
        return redirect()->route('cliente.index');
    }

    public function destroy(Cliente $id){
        $id->delete();
        return redirect()->route('cliente.index');
    }

    public function formUpdate(Cliente $id){
        return view('cadastros/cliente/update-cliente-form', compact('id'));
    }

    public function formCreate(){
        return view('cadastros/cliente/create-cliente-form');
    }
}
