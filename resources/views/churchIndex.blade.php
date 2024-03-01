@extends('layouts.churchMenu')

@section('title', 'Inicio')

@section('content')

    <div class="flex justify-center items-center h-screen">
        <div class="bg-white p-6 rounded-md shadow-md max-w-md">
            <h1 class="text-3xl font-bold mb-4">
                {{ $church->name }}
            </h1>
            
            <p class="mb-2">
                Identificación: {{ $church->identification }}
            </p>
            
            <p class="mb-4">
                Ubicación: {{ $church->location }}
            </p>

            @if ($church->image)
                <img class="w-full h-[300px] object-cover object-center mb-4" src="{{ asset($church->image) }}" alt="Imagen de la iglesia">
            @else
                <p>No hay imagen disponible</p>
            @endif

            <div class="flex justify-center mt-4">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Acceder
                </button>
            </div>
        </div>
    </div>

@endsection
