<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{

    public function index(){
        $deptartmentos = Departamento::all();
        return view('cadastros/departamento/create', ['departamentos' => $deptartmentos]);
    }

    public function insert(Request $request){
         $item =  Departamento::create(
             ['nome' => $request->string('nome')]
         );
         return $item;
    }



}
