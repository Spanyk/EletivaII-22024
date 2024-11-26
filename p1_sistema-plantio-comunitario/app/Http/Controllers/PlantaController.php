<?php

namespace App\Http\Controllers;

use App\Models\Planta;
use Illuminate\Http\Request;

class PlantaController extends Controller
{
    // Exibir todas as plantas
    public function index()
    {
        $plantas = Planta::all();
        return view('plantas.index', compact('plantas'));
    }

    // Exibir o formulário para adicionar uma nova planta
    public function create()
    {
        return view('plantas.create');
    }

    // Armazenar uma nova planta no banco de dados
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'tipo' => 'required|string|max:255',
            'necessidades' => 'nullable|string',
            'data_plantio' => 'required|date',
            'data_colheita' => 'nullable|date',
            'status' => 'required|string|max:50',
        ]);

        Planta::create($request->all());
        return redirect()->route('plantas.index');
    }

    // Exibir os detalhes de uma planta
    public function show($id)
    {
        $planta = Planta::findOrFail($id);
        return view('plantas.show', compact('planta'));
    }

    // Exibir o formulário para editar uma planta
    public function edit($id)
    {
        $planta = Planta::findOrFail($id);
        return view('plantas.edit', compact('planta'));
    }

    // Atualizar uma planta no banco de dados
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'tipo' => 'required|string|max:255',
            'necessidades' => 'nullable|string',
            'data_plantio' => 'required|date',
            'data_colheita' => 'nullable|date',
            'status' => 'required|string|max:50',
        ]);

        $planta = Planta::findOrFail($id);
        $planta->update($request->all());

        return redirect()->route('plantas.index');
    }

    // Excluir uma planta
    public function destroy($id)
    {
        Planta::destroy($id);
        return redirect()->route('plantas.index');
    }
}
