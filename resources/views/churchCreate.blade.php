@extends('layouts.CRUD')

@section('title', 'Create')

@section('content')

    <h1>Crear iglesia</h1>

    <form action="/churchCreate" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
    
        <br>
    
        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required>
    
        <br>
    
        <input type="submit" value="Enviar">
    </form>

@endsection
