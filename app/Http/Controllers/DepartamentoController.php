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
         $item =  Departamento::create(
             ['nome' => $request->input('nome')]
         );

         return dd($item);
    }

    public function formUpdate(Request $request){
        $item = Departamento::query()->where('id', '==' , $request->string('id'));

        return view('cadastros/departamento/update-departamento-form',['editItem' =>$item]);
    }


    public function formCreate(){
        return view('cadastros/departamento/create-departamento-form');
    }

}
