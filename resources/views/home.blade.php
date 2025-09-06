@extends('layouts.app')

@section('title', 'Inicio - AVISA')

@section('content')
<div class="row align-items-center">
    <div class="col-md-6">
        <h1 class="display-4 fw-bold text-primary">AVISA</h1>
        <p class="lead">Tu Asistente Virtual de Salud de Nicaragua. Encuentra información confiable, unidades de salud cercanas y recomendaciones para tu bienestar.</p>
        <a href="#" class="btn btn-primary btn-lg mt-3">Comenzar con el Chatbot</a>
    </div>
    <div class="col-md-6 text-center">
        <img src="https://via.placeholder.com/400x300?text=Imagen+AVISA" alt="Imagen representativa de AVISA" class="img-fluid rounded">
    </div>
</div>

<div class="row mt-5">
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body text-center">
                <h5 class="card-title">📋 Preclasificación</h5>
                <p class="card-text">Obtén información inicial sobre posibles enfermedades basada en tus síntomas.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body text-center">
                <h5 class="card-title">🗺️ Mapa de Salud</h5>
                <p class="card-text">Encuentra la unidad de salud más cercana a tu ubicación en Nicaragua.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body text-center">
                <h5 class="card-title">📚 Promoción de Salud</h5>
                <p class="card-text">Accede a artículos y consejos para mantener hábitos de vida saludables.</p>
            </div>
        </div>
    </div>
</div>
@endsection