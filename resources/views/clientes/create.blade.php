@extends('layout.template')

@section('title', 'Registrar cliente | Empresa')


@section('contenido')
<main>
    <div class="container py-4">
        <h1>Registrar Cliente</h1>

        <form action="{{ Route('clientes') }}">
            @csrf
            @method('post')
        </form>
    </div>
</main>
