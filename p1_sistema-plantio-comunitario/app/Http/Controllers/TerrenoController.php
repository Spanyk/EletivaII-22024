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
        $terreno = Terreno::findOrFail($id);
        return view('terreno.show', compact('terreno'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $terreno = Terreno::firstOrFail($id);
        return view('terreno.edit', compact('terreno'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $terreno = Terreno::findOrFail($id);
    $terreno->update($request->all());
    return redirect("/terreno");
}

    public function destroy(string $id)
    {
        $terreno = Terreno::findOrFail($id);
        $terreno->delete();
        
        return redirect('/terreno');
    }
}
