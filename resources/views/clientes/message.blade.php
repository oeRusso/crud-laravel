@extends('layout.template')

@section('title', 'Registrar cliente | Empresa')


@section('contenido')
<main>
    <div class="container py-4">
        <h2>{{ $msg }}</h2>
        <a href="{{ url('alumnos') }}">Regresar</a>
    </div>
</main>
