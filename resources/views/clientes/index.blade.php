@extends('layout.template')

@section('title', 'Cliente | Empresa')


@section('contenido')

<main>
    <div class="container py-4">
        <h1>Listado de clientes</h1>
        <a href="{{ Route('clientes.create') }}" class="btn btn-primary btn-sm">Nuevo cliente</a>

    </div>
</main>


