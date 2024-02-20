@extends('layouts.churchCRUD')

@section('title', 'Create')

@section('content')

    <h1>Crear iglesia</h1>

        <form action="{{ route('church.create') }}" method="post">
        @csrf
        
        <label for="Identification">Cedula juridica:</label>
        <input type="integer" id="Identification" name="Identification">
    
            <br>
        <label for="name">Nombre de la iglesia:</label>
        <input type="text" id="name" name="name" required>
            <br>
        <laber for="location">Dirección:</label>
        <input type="text" id="location" name="location" required>
            <br>
        <label for="phone">Teléfono:</label>
        <input type="integer" id="phone" name="phone">
            <br>
        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required>
            <br>
    
        <input type="submit" value="Enviar">
    </form>

@endsection
