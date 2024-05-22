@extends('layout/plantilla')

@section('tituloPagina', 'Actualizar Persona')

@section('contenido')
    <div class="card">
        <h3 class="card-header">Editar Registro</h3>
        <div class="card-body">
            <p class="card-text">
            <form action="{{ route('personas.update', $persona->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="paterno" class="form-label">Apellido Paterno:</label>
                    <input type="text" class="form-control" name="paterno" id="paterno" aria-describedby="helpId"
                        required value="{{ $persona->paterno }}">
                </div>
                <div class="mb-3">
                    <label for="materno" class="form-label">Apellido Materno:</label>
                    <input type="text" class="form-control" name="materno" id="materno" aria-describedby="helpId"
                        required value="{{ $persona->materno }}">
                </div>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId"
                        required value="{{ $persona->nombre }}">
                </div>
                <div class="mb-3">
                    <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento:</label>
                    <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento"
                        aria-describedby="helpId" required value="{{ $persona->fecha_nacimiento }}">
                </div>
                <button type="submit" class="btn btn-outline-success">
                    <span class="fa-solid fa-user-pen"></span> Actualizar
                </button>
                <a href="{{ route('personas.index') }}" class="btn btn-outline-primary">
                    <span class="fa-solid fa-rotate-left fa-fw"></span> Cancelar
                </a>
            </form>
            </p>
        </div>
    </div>
@endsection
