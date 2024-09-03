<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListaExer extends Controller {

  public function mostrarExer1() {
    return view('exer1');
  }
 

  public function getValor(Request $request) {
    $valor1 = $request->input('valor');
    $valor1 = $request->input('valor');

    $resultado = sum($valor1,valor2);
    return "O valor informado é: ".$resultado;
  }


}

