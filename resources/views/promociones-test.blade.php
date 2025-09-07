@extends('layouts.app')

@section('title', 'Prueba CRUD - Promociones de Salud')

@section('content')
<div class="container">
    <h1 class="my-4">Prueba del CRUD de Promociones</h1>
    <p class="lead">Esta es una vista temporal para probar el componente Livewire.</p>
    
    <!-- Aquí se renderizará nuestro componente Livewire -->
    @livewire('promocion-salud-index')
</div>
@endsection