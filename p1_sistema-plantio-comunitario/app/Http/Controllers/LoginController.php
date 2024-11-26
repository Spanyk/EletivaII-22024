<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function auth(Request $req) {

        $credenciais = $req->validate([
            'email' => ['required','email'],
            'password' => ['required']
        ], [
            'email.required' => 'O campo email é obrigatório!',
            'email.emaail'=> 'O email não é valido',
            'password.required'=>'O campo senha é obrigatorio!', 
        ]);

        if (Auth::attempt($credenciais)){
            $req->session()->regenerate();
            return redirect()->intended('home');
        } else {
            return redirect()->back()-with('erro'. 'Usuario ou senha Inválido');
        }

    }
}
