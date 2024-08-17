<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    // Mostrar una lista de todos los proyectos
    public function index()
    {
        $proyectos = Proyecto::all();
        return view('proyectos.index', compact('proyectos'));
    }

    // Mostrar el formulario para crear un nuevo proyecto
    public function create()
    {
        return view('proyectos.create');
    }

    // Guardar un nuevo proyecto en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'fecha_inicio' => 'required|date',
            'estado' => 'required',
            'responsable' => 'required',
            'monto' => 'required|numeric',
        ]);

        Proyecto::create($request->all());

        return redirect()->route('proyectos.index')
                        ->with('success','Proyecto creado exitosamente.');
    }

    // Mostrar un proyecto específico
    public function show(Proyecto $proyecto)
    {
        return view('proyectos.show', compact('proyecto'));
    }

    // Mostrar el formulario para editar un proyecto existente
    public function edit(Proyecto $proyecto)
    {
        return view('proyectos.edit', compact('proyecto'));
    }

    // Actualizar un proyecto existente en la base de datos
    public function update(Request $request, Proyecto $proyecto)
    {
        $request->validate([
            'nombre' => 'required',
            'fecha_inicio' => 'required|date',
            'estado' => 'required',
            'responsable' => 'required',
            'monto' => 'required|numeric',
        ]);

        $proyecto->update($request->all());

        return redirect()->route('proyectos.index')
                        ->with('success','Proyecto actualizado exitosamente.');
    }

    // Eliminar un proyecto específico de la base de datos
    public function destroy(Proyecto $proyecto)
    {
        $proyecto->delete();

        return redirect()->route('proyectos.index')
                        ->with('success','Proyecto eliminado exitosamente.');
    }
}

