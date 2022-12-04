<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{

    public function index(){
        return Departamento::all();
    }

    public function insert(Request $request){
         $item =  Departamento::create(
             ['nome' => $request->string('nome')]
         );
         return $item;
    }



}
