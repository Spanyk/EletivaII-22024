<?php 


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListaExercicioController extends Controller 
{
    protected $views = [
        'exercicio2' => 'exercicio2',
        'exercicio3' => 'exercicio3',
        'exercicio4' => 'exercicio4',
    ];

    // public function mostrarExercicio2() {
    //     return view('exercicio2');
    // }

    public function mostrarExercicio($viewKey) {
        if (array_key_exists($viewKey, $this->views)) {
            return view($this->views[$viewKey]);
        } else {
            abort(404, 'View não encontrada');
        }
    }


    public function subtrair(Request $request) {
        $valor1 = $request->input('valor1');
        $valor2 = $request->input('valor2');
        $resultado = $valor2 - $valor1;
        return 'Resultado da subtração: '. $resultado;
    }

    public function multiplicar(Request $request) {
        $valor1 = $request->input('valor1');
        $valor2 = $request->input('valor2');
        $resultado = $valor1 * $valor2;
        return 'Resultado da multiplicação: '. $resultado;
    }

    public function divisao(Request $request) {
        $valor1 = $request->input('valor1');
        $valor2 = $request->input('valor2');

        if ($valor1 != 0 and $valor2 != 0) {
            $resultado = $valor1 / $valor2;
            return 'Resultado da divisão: '. $resultado;
        } else {
            return 'Não é possível realizar uma divisão por zero';
        }
    }
}