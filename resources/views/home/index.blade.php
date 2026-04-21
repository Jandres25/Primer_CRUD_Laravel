@extends('layout/plantilla')

@section('titulo_pagina', 'Home')
@section('icono_titulo')
    <i class="fa-solid fa-house text-primary"></i>
@endsection

@section('contenido')
    <div class="card shadow-sm mb-4">
        <div class="card-body p-4">
            <h5 class="card-title fw-bold mb-3">Bienvenido</h5>
            <p class="card-text text-muted mb-4">
                Este es el inicio principal de la aplicación.
            </p>
            <a href="{{ route('personas.index') }}" class="btn btn-primary">
                <i class="fa-solid fa-users me-1"></i>Ir al módulo People
            </a>
        </div>
    </div>
@endsection
