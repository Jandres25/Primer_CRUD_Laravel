@extends('layout/plantilla')

@section('tituloPagina', 'Lista de personas')

@section('contenido')
    <div class="card mt-5">
        <h2 class="card-header">Lista de personas del sistema</h2>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    @if ($mensaje = Session::get('success'))
                        <div class="text-center alert alert-success alert-dismissible fade show" role="alert">
                            <i class="fa-solid fa-square-check"></i> {{ $mensaje }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                </div>
            </div>

            <h4 class="card-title text-center">CRUD con laravel 10</h4>
            <a href="{{ route('personas.create') }}" class="btn btn-outline-primary">
                <span class="fa-solid fa-user-plus"></span> Crear persona
            </a>
            <hr>
            <p class="card-text">
            <div class="table table-responsive">
                <table class="table table-hover table-bordered">
                    <thead class="table-dark text-center">
                        <th>Apellido paterno</th>
                        <th>Apellido materno</th>
                        <th>Nombre</th>
                        <th>Fecha de nacimiento</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($datos as $item)
                            <tr>
                                <td>{{ $item->paterno }}</td>
                                <td>{{ $item->materno }}</td>
                                <td>{{ $item->nombre }}</td>
                                <td>{{ $item->fecha_nacimiento }}</td>
                                <td>
                                    <form action="{{ route('personas.edit', $item->id) }}" method="GET">
                                        @csrf
                                        <button type="submit" class="btn btn-outline-dark">
                                            <span class="fa-solid fa-user-pen"></span>
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ route('personas.confirmar_eliminacion', $item->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-outline-danger">
                                            <span class="fa-solid fa-user-xmark fa-fw"></span>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </p>
        </div>
    </div>
@endsection
