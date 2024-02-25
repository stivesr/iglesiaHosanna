@extends('layouts.churchCRUD')

@section('title', 'Read')

@section('content')

    <h1 class="text-3xl font-bold">Visualizar iglesias</h1>

    <table cellpadding="10">
        <thead>
            <tr>
                <th>Identificación</th>
                <th>Nombre</th>
                <th>Ubicación</th>
                <th>Teléfono</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($churches as $church)
            <tr>
                <td>{{ $church->identification }}</td>
                <td>{{ $church->name }}</td>
                <td>{{ $church->location }}</td>
                <td>{{ $church->phone }}</td>
                <td>{{ $church->email }}</td>
                <td><a href="{{ route('church.updateView', $church->idChurch) }}">Actualizar</a></td>
                <td><a href="{{ route('church.eliminate', $church->idChurch) }}">Eliminar</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>


@endsection
