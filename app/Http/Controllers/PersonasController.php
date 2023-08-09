<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos = Personas::all();
        return view('inicio', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('agregar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $personas = new Personas();
        $personas->paterno = $request->post('paterno');
        $personas->materno = $request->post('materno');
        $personas->nombre = $request->post('nombre');
        $personas->fecha_nacimiento = $request->post('fecha_nacimiento');

        $personas->save();

        return redirect()->route('personas.index')->with('success', '¡Agregado Exitosamente!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Personas $personas)
    {
        //
        return view('eliminar');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $persona = Personas::find($id);
        return view('actualizar', compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $personas = Personas::find($id);
        $personas->paterno = $request->post('paterno');
        $personas->materno = $request->post('materno');
        $personas->nombre = $request->post('nombre');
        $personas->fecha_nacimiento = $request->post('fecha_nacimiento');

        $personas->save();

        return redirect()->route('personas.index')->with('success', '¡Registro Actualizado Exitosamente!');
    }

    public function confirmarEliminacion($id)
    {
        $persona = Personas::find($id);
        return view('eliminar', compact('persona'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $personas = Personas::find($id);
        $personas->delete();
        return redirect()->route('personas.index')->with('success', '¡Registro Eliminado Exitosamente!');
    }
}
