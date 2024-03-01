<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Church;

class ChurchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $church = Church::first();

         return view('churchIndex', compact('church'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Validación de los campos del formulario
        $validatedData = $request->validate([
            'identification' => 'required|unique:churches',
            'name' => 'required',
            'location' => 'required',
            'phone' => 'nullable',
            'email' => 'nullable|email',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Ajusta las extensiones y el tamaño según tus necesidades
        ]);

        // Manejar la subida de la imagen
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $validatedData['image'] = $imagePath;
        }

        // Crear una nueva instancia del modelo Church con los datos validados
        Church::create($validatedData);

        // Redirigir a la vista o ruta deseada después de almacenar
        return redirect()->route('nombre_de_la_ruta');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
