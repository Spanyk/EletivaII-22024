<?php

namespace App\Http\Controllers;

use App\Models\Plantio;
use App\Models\Morador;
use App\Models\Planta;
use App\Models\Terreno;
use Illuminate\Http\Request;

class PlantioController extends Controller
{
    // Exibir todos os plantios
    public function index()
    {
        $plantios = Plantio::with(['morador', 'planta', 'terreno'])->get();
        return view('plantios.index', compact('plantios'));
    }

    // Exibir o formulário para adicionar um novo plantio
    public function create()
    {
        $moradores = Morador::all();
        $plantas = Planta::all();
        $terrenos = Terreno::all();
        return view('plantios.create', compact('moradores', 'plantas', 'terrenos'));
    }

    // Armazenar um novo plantio no banco de dados
    public function store(Request $request)
    {
        $request->validate([
            'morador_id' => 'required|exists:moradores,id',
            'planta_id' => 'required|exists:plantas,id',
            'terreno_id' => 'required|exists:terrenos,id',
            'data_plantio' => 'required|date',
            'data_colheita' => 'nullable|date',
        ]);

        Plantio::create($request->all());
        return redirect()->route('plantios.index');
    }

    // Exibir os detalhes de um plantio
    public function show($id)
    {
        $plantio = Plantio::with(['morador', 'planta', 'terreno'])->findOrFail($id);
        return view('plantios.show', compact('plantio'));
    }

    // Exibir o formulário para editar um plantio
    public function edit($id)
    {
        $plantio = Plantio::findOrFail($id);
        $moradores = Morador::all();
        $plantas = Planta::all();
        $terrenos = Terreno::all();
        return view('plantios.edit', compact('plantio', 'moradores', 'plantas', 'terrenos'));
    }

    // Atualizar um plantio
    public function update(Request $request, $id)
    {
        $request->validate([
            'morador_id' => 'required|exists:moradores,id',
            'planta_id' => 'required|exists:plantas,id',
            'terreno_id' => 'required|exists:terrenos,id',
            'data_plantio' => 'required|date',
            'data_colheita' => 'nullable|date',
        ]);

        $plantio = Plantio::findOrFail($id);
        $plantio->update($request->all());

        return redirect()->route('plantios.index');
    }

    // Excluir um plantio
    public function destroy($id)
    {
        Plantio::destroy($id);
        return redirect()->route('plantios.index');
    }
}
