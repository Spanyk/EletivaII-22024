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
        Planta::create($request->all());
        return redirect('/planta');
    }

    public function show($id)
    {
        $planta = Planta::findOrFail($id);
        return view('plantas.show', compact('planta'));
    }

    public function edit($id)
    {
        $planta = Planta::findOrFail($id);
        return view('plantas.edit', compact('planta'));
    }


    public function update(Request $request, $id)
    {

        $planta = Planta::findOrFail($id);
        $planta->update($request->all());

        return redirect('/planta');
    }

    // Excluir uma planta
    public function destroy($id)
    {
        $planta = Planta::findOrFail($id);
        $planta->delete();
        return redirect('/planta');
    }
}
