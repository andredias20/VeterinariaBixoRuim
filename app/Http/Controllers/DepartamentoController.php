<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{

    public function index(){
        $deptartmentos = Departamento::all();
        return view('cadastros/departamento/view-departamento-form', ['departamentos' => $deptartmentos]);
    }

    public function insert(Request $request){
        $request->validate([
           'nome' => 'required'
        ]);

        Departamento::create($request->post());
        return redirect()->route('departamento.index')->with('Sucess', 'Depataramento foi criado com sucesso');
    }

    public function update(Request $request, Departamento $id){
        $request->validate([
            'nome' => 'required',
            'id' => 'required'
        ]);
        $id->fill($request->post())->save();
        return redirect()->route('departamento.index')->with('Sucess', 'Depataramento foi editado com sucesso');
    }

    public function destroy(Departamento $id){
        $id->delete();
        return redirect()->route('departamento.index')->with('Sucess', 'Depataramento foi deletado com sucesso');
    }

    public function formUpdate(Departamento $id){
        return view('cadastros/departamento/update-departamento-form', compact('id'));
    }

    public function formCreate(){
        return view('cadastros/departamento/create-departamento-form');
    }

}
