<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{

    public function mostrarForm(){
        return view('form');
    }
    
    public function receberValor(Request $request){
        $valor = $request->input('valor');
        return "O valor informado é: ".$valor;
    }

}
