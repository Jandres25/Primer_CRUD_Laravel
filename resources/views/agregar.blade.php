@extends('layout/plantilla')

@section('tituloPagina', 'Agregar Persona')

@section('contenido')
    <div class="card">
        <h3 class="card-header">Agregar Nuevo</h3>
        <div class="card-body">
            <p class="card-text">
            <form action="{{ route('personas.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="paterno" class="form-label">Apellido Paterno:</label>
                    <input type="text" class="form-control" name="paterno" id="paterno" aria-describedby="helpId"
                        required>
                    <small id="helpId" class="form-text text-muted">Escrbe tu apellido paterno</small>
                </div>
                <div class="mb-3">
                    <label for="materno" class="form-label">Apellido Materno:</label>
                    <input type="text" class="form-control" name="materno" id="materno" aria-describedby="helpId"
                        required>
                    <small id="helpId" class="form-text text-muted">Escribe tu apellido materno</small>
                </div>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId"
                        required>
                    <small id="helpId" class="form-text text-muted">Escribe tu nombre</small>
                </div>
                <div class="mb-3">
                    <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento:</label>
                    <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento"
                        aria-describedby="helpId" required>
                    <small id="helpId" class="form-text text-muted">Ingresa tu fecha de nacimiento</small>
                </div>
                <hr>
                <button type="submit" class="btn btn-outline-success">
                    <span class="fa-solid fa-user-plus"></span> Agregar
                </button>
                <a href="{{ route('personas.index') }}" class="btn btn-outline-primary">
                    <span class="fa-solid fa-rotate-left fa-fw"></span> Cancelar
                </a>
            </form>
            </p>
        </div>
    </div>
@endsection
