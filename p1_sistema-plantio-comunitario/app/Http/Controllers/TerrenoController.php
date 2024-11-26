<?php

namespace App\Http\Controllers;

use App\Models\Terreno;
use Illuminate\Http\Request;

class TerrenoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $terrenos = Terreno::all();
        return view('terreno.index', compact('terrenos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('terreno.create');
    }

 
 
    public function store(Request $request)
    {
        Terreno::create($request->all());
        return redirect("/terreno");   
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $terrenos = Terreno::findOrFail($id);
        return view('terreno.show', compact('terrenos'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $terrenos = Terreno::firstOrFail($id);
        return view('terreno.edit', compact('terrenos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $terreno = Terreno::findOrFail($id);

    $validatedData = $request->validate([
        'nome'             => ['required', 'unique:terrenos,nome,' . $id],
        'localizacao'      => 'required|max:255',
        'tamanho'          => ['nullable', 'decimal:10.2'],
        'disponibilidade'  => 'required|boolean', // Validação como booleano
    ]);

    // Converte o valor da disponibilidade para booleano
    $disponibilidade = $request->input('disponibilidade') === 'true';

    // Atualiza o terreno com os dados validados e a disponibilidade convertida
    $terreno->update(array_merge($validatedData, ['disponibilidade' => $disponibilidade]));

    return redirect()->route('terreno.index')->with('success', 'Terreno atualizado com sucesso');
}

    
    public function delete($id) {
        $terrenos = Terreno::firstOrFail($id);
        return view('terreno.delete', compact('terrenos'));
    }

    public function destroy(string $id)
    {
        $terrenos = Terreno::findOrFail($id);
        $terrenos->delete();
        
        return redirect()->route('terreno.index')
                         ->with('success', 'Terreno deletado com sucesso.');
        
    }
}
