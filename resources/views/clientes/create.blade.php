@extends('layout.template')

@section('title', 'Registrar cliente | Empresa')


@section('contenido')
<main>
    <div class="container py-4">
        <h1>Registrar Cliente</h1>

        <form action="{{ url('clientes') }}">
            @csrf
            @method('post')

            <div class="mb-3 row">
                <label for="matricula" class="col-sm-2 col-form-label">Matricula</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="matricula" id="matricula" value="{{ old('matricula') }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre completo</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="nombre" id="nombre" value="{{ old('nombre') }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="fecha" class="col-sm-2 col-form-label">Fecha de nacimiento</label>
                <div class="col-sm-5">
                    <input type="date" class="form-control" name="fecha" id="fecha" value="{{ old('fecha') }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="telefono" class="col-sm-2 col-form-label">Telefono</label>
                <div class="col-sm-5">
                    <input type="number" class="form-control" name="telefono" id="telefono" value="{{ old('telefono') }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-5">
                    <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="productos" class="col-sm-2 col-form-label">Lista de productos</label>
                <div class="col-sm-5">
                    <textarea type="email" class="form-control" name="email" id="email" cols="30" rows="10">{{ old('productos') }}</textarea>

                </div>
            </div>

            <a href="{{ url('clientes') }}" class="btn btn-secondary">Regresar</a>

            <button type="submit" class="btn btn-success">Guardar</button>

        </form>
    </div>
</main>
