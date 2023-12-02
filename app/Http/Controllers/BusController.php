<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use Illuminate\Http\Request;

class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buses = Bus::all();
        return view("admin.buses.index", compact("buses"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.buses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'model' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'insurance' => 'required|string|max:255',
            'capacity' => 'required|integer|min:1',
            // Agrega más reglas de validación según tus necesidades
        ]);

        // Crear un nuevo bus con los datos del formulario
        Bus::create([
            'model' => $request->input('model'),
            'brand' => $request->input('brand'),
            'insurance' => $request->input('insurance'),
            'capacity' => $request->input('capacity'),
            // Agrega más campos según tus necesidades
        ]);

        // Redirigir a la lista de buses después de almacenar el nuevo bus
        return redirect()->route('admin.buses.index')->with('success', 'Bus creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bus $bus)
    {
        return view('admin.buses.show', compact('bus'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bus $bus)
    {
        return view('admin.buses.edit', compact('bus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bus $bus)
    {
        // Validación de los campos del formulario
        $request->validate([
            'model' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'insurance' => 'required|string|max:255',
            'capacity' => 'required|integer|min:1',
            // Agrega más reglas de validación según tus necesidades
        ]);

        // Actualizar los datos del bus con los datos del formulario
        $bus->update([
            'model' => $request->input('model'),
            'brand' => $request->input('brand'),
            'insurance' => $request->input('insurance'),
            'capacity' => $request->input('capacity'),
            // Actualiza con más campos según tus necesidades
        ]);

        // Redireccionar con un mensaje de éxito
        return redirect()->route('admin.buses.index')->with('success', 'Bus updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Bus $bus)
    {
        $bus->delete();

        return redirect()->route('admin.buses.index')->with('success', 'Bus deleted successfully.');
    }

}
