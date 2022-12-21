<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(){
        $items = Produto::all();
        return view('cadastros/produto/view-produto-form', compact('items'));
    }

    public function insert(Request $request){

        Produto::create($request->post());
        return redirect()->route('produto.index');
    }

    public function update(Request $request, Produto $id){
        $request->validate([
            'nome' => 'required',
            'id' => 'required',
            'preco' => 'required',
            'departamento_id'=> 'required'
        ]);
        $id->fill($request->post())->save();
        return redirect()->route('produto.index');
    }

    public function destroy(Produto $id){
        $id->delete();
        return redirect()->route('produto.index');
    }

    public function formUpdate(Produto $id){
        return view('cadastros/produto/update-produto-form', compact('id'));
    }

    public function formCreate(){
        return view('cadastros/produto/create-produto-form');
    }

}
