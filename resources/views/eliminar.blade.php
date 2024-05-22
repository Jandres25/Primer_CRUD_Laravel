@extends('layout/plantilla')

@section('tituloPagina', 'Eliminar Persona')

@section('contenido')
    <div class="d-flex justify-content-center align-items-center" style="height: 80vh">
        <div class="alert alert-danger" role="alert">
            <h5>¿Está seguro que desea eliminar el registro?</h5>

            <ul class="list-group list-group-flush mt-3">
                <li class="list-group-item list-group-item-danger">
                    <b>Nombre:</b> {{ $persona->nombre }}
                </li>
                <li class="list-group-item list-group-item-danger">
                    <b>Apellido Paterno:</b> {{ $persona->paterno }}
                </li>
                <li class="list-group-item list-group-item-danger">
                    <b>Apellido Materno:</b> {{ $persona->materno }}
                </li>
                <li class="list-group-item list-group-item-danger">
                    <b>Fecha de nacimiento:</b> {{ $persona->fecha_nacimiento }}
                </li>
            </ul>

            <form class="d-flex justify-content-around mt-4" action="{{ route('personas.destroy', $persona->id) }}"
                method="GET">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">
                    <span class="fa-solid fa-user-xmark fa-fw"></span> Eliminar
                </button>
                <a href="{{ route('personas.index') }}" class="btn btn-secondary">
                    <span class="fa-solid fa-rotate-left fa-fw"></span> Cancelar
                </a>
            </form>
        </div>
    </div>

    {{-- <h4 class="card-header">Confirmar eliminación</h4>
    <div class="card-body">
        <p>¿Estás seguro de que deseas eliminar a {{ $persona->nombre }} {{ $persona->paterno }} {{ $persona->materno }}?</p>
        <form action="{{ route('personas.destroy', $persona->id) }}" method="GET">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
            <a href="{{ route('personas.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>   --}}

@endsection
