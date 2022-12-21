<?php

namespace App\Http\Controllers;

use App\Models\TipoAnimal;
use Illuminate\Http\Request;

class TipoAnimalController extends Controller
{
    public function index(){
        $items = TipoAnimal::all();
        return view('cadastros\tipo-animal\view-tipo-animal-form', compact('items'));
    }

    public function insert(Request $request){
        $request->validate([
            'nome' => 'required'
        ]);

        TipoAnimal::create($request->post());
        return redirect()->route('tipo-animal.index')->with('Sucess', 'Depataramento foi criado com sucesso');
    }

    public function update(Request $request, TipoAnimal $id){
        $request->validate([
            'nome' => 'required',
            'id' => 'required'
        ]);
        $id->fill($request->post())->save();
        return redirect()->route('tipo-animal.index')->with('Sucess', 'Depataramento foi editado com sucesso');
    }

    public function destroy(TipoAnimal $id){
        $id->delete();
        return redirect()->route('tipo-animal.index')->with('Sucess', 'Tipo Animal foi deletado com sucesso');
    }

    public function formUpdate(TipoAnimal $id){
        return view('cadastros/tipo-animal/update-tipo-animal-form', compact('id'));
    }

    public function formCreate(){
        return view('cadastros/tipo-animal/create-tipo-animal-form');
    }

}
