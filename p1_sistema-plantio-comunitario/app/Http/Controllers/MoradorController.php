<?php

namespace App\Http\Controllers;

use App\Models\Morador;
use Illuminate\Http\Request;

class MoradorController extends Controller
{
    // Exibir todos os moradores
    public function index()
    {
        $moradores = Morador::all();
        return view('moradores.index', compact('moradores'));
    }

    // Exibir o formulário para adicionar um novo morador
    public function create()
    {
        return view('moradores.create');
    }

    // Armazenar um novo morador no banco de dados
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:moradores',
            'telefone' => 'nullable|string|max:15',
            'endereco' => 'nullable|string',
            'data_entrada' => 'required|date',
            'status' => 'required|string|max:50',
        ]);

        Morador::create($request->all());
        return redirect()->route('moradores.index');
    }

    // Exibir os detalhes de um morador
    public function show($id)
    {
        $morador = Morador::findOrFail($id);
        return view('moradores.show', compact('morador'));
    }

    // Exibir o formulário para editar um morador
    public function edit($id)
    {
        $morador = Morador::findOrFail($id);
        return view('moradores.edit', compact('morador'));
    }

    // Atualizar um morador no banco de dados
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:moradores,email,' . $id,
            'telefone' => 'nullable|string|max:15',
            'endereco' => 'nullable|string',
            'data_entrada' => 'required|date',
            'status' => 'required|string|max:50',
        ]);

        $morador = Morador::findOrFail($id);
        $morador->update($request->all());

        return redirect()->route('moradores.index');
    }

    // Excluir um morador
    public function destroy($id)
    {
        Morador::destroy($id);
        return redirect()->route('moradores.index');
    }
}
