<?php 


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListaExercicioController extends Controller 
{
    protected $views = [
"",     'exercicio1' => 'exercicio1',
        'exercicio2' => 'exercicio2',
        'exercicio3' => 'exercicio3',
        'exercicio4' => 'exercicio4',
        'exercicio5' => 'exercicio5',
        'exercicio6' => 'exercicio6',
        'exercicio7' => 'exercicio7',
        'exercicio8' => 'exercicio8',
        'exercicio9' => 'exercicio9',
        'exercicio10' => 'exercicio10',
        'exercicio11' => 'exercicio11',
        'exercicio12' => 'exercicio12',
        'exercicio13' => 'exercicio13',
        'exercicio14' => 'exercicio14',
        'exercicio15' => 'exercicio15',
        'exercicio16' => 'exercicio16',
        'exercicio17' => 'exercicio17',
        'exercicio18' => 'exercicio18',
        'exercicio19' => 'exercicio19',
        'exercicio20' => 'exercicio20',
    ];

    public function mostrarExercicio($viewKey) {
        if (array_key_exists($viewKey, $this->views)) {
            return view($this->views[$viewKey]);
        } else {
            abort(404, 'View não encontrada');
        }
    }
    
    public function calcularMedia(Request $request) {
     
        $nota1 = $request->input('nota1');
        $nota2 = $request->input('nota2');
        $nota3 = $request->input('nota3');

        $media = ($nota1 + $nota2 + $nota3) / 3;

        return 'Resultado da média do Aluno é: '. $media;

    }

    public function somar(Request $request) {
        $valor1 = $request->input('valor1');
        $valor2 = $request->input('valor2');
        $resultado = $valor2 + $valor1;
        return 'Resultado da soma: '. $resultado;
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
// Exercicio 6
    public function conversorTemperaturaParaFahrenheit(Request $request) {
        $celsius = $request->input('celsius');

        $convertido = ($celsius * 1.8) + 32; 

        return 'Temperatu Convertida para Fahrenheit -> '. $convertido;
    }
// Exercicio 7 
    public function conversorTemperaturaParaCelcius(Request $request) {
        $fahrenheit = $request->input('Fahrenheit');

        $convertido = ($fahrenheit - 32) / 1.8; 

        return 'Temperatura Convertida para Celcius -> '. $convertido;
    }
}