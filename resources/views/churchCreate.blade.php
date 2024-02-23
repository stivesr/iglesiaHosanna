@extends('layouts.churchCRUD')

@section('title', 'Create')

@section('content')

    <h1 class="text-3xl font-bold text-center">Crear iglesia</h1>

    <form action="{{ route('church.create') }}" method="post" class="max-w-md mx-auto p-4 bg-white shadow-md rounded-md mt-8 mb-8">

        @csrf
    
        <div class="mb-4">
            <label for="Identification" class="block text-sm font-semibold text-gray-600">Cedula juridica:</label>
            <input type="text" id="Identification" name="Identification" class="w-full mt-1 p-2 border rounded-md focus:outline-none focus:border-blue-500" required>
        </div>
    
        <div class="mb-4">
            <label for="name" class="block text-sm font-semibold text-gray-600">Nombre de la iglesia:</label>
            <input type="text" id="name" name="name" class="w-full mt-1 p-2 border rounded-md focus:outline-none focus:border-blue-500" required>
        </div>
    
        <div class="mb-4">
            <label for="location" class="block text-sm font-semibold text-gray-600">Dirección:</label>
            <input type="text" id="location" name="location" class="w-full mt-1 p-2 border rounded-md focus:outline-none focus:border-blue-500" required>
        </div>
    
        <div class="mb-4">
            <label for="phone" class="block text-sm font-semibold text-gray-600">Teléfono:</label>
            <input type="tel" id="phone" name="phone" class="w-full mt-1 p-2 border rounded-md focus:outline-none focus:border-blue-500">
        </div>
    
        <div class="mb-4">
            <label for="email" class="block text-sm font-semibold text-gray-600">Correo Electrónico:</label>
            <input type="email" id="email" name="email" class="w-full mt-1 p-2 border rounded-md focus:outline-none focus:border-blue-500" required>
        </div>
    
        <button type="submit" class="w-full bg-blue-900 text-white p-2 rounded-md hover:bg-blue-700 focus:outline-none focus:bg-blue-700">Enviar</button>
    
    </form>
    

@endsection
