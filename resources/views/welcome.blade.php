@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="avisa-hero">
        <div class="avisa-container">
            <h1 class="avisa-hero-title">Tu salud es primero</h1>
            <p class="avisa-hero-subtitle">Asistente virtual de salud para todos los nicaragüenses</p>
            <a href="#chatbot" class="avisa-btn avisa-btn-accent avisa-btn-lg">
                💬 Comenzar con el Chatbot
            </a>
        </div>
    </section>

    <!-- Introducción -->
    <section class="avisa-container avisa-p-8">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="avisa-heading-2">Bienvenido a AVISA</h2>
                <p class="avisa-text-lead">
                    Conectamos a la población nicaragüense con el sistema público de salud, 
                    proporcionando herramientas digitales para el cuidado de tu bienestar.
                </p>
            </div>
        </div>
    </section>

    <!-- Accesos Rápidos -->
    <section class="avisa-container avisa-p-8 bg-light">
        <h2 class="avisa-heading-2 text-center avisa-mb-8">¿Qué necesitas hoy?</h2>
        
        <div class="row">
            <!-- Chatbot Card -->
            <div class="col-md-4 mb-4">
                <div class="avisa-card h-100 text-center">
                    <div class="avisa-card-header">
                        <span style="font-size: 3rem;">💬</span>
                    </div>
                    <div class="avisa-card-body">
                        <h3 class="avisa-heading-3">Chatbot de Salud</h3>
                        <p class="avisa-text">
                            Realiza una preclasificación de síntomas y recibe recomendaciones personalizadas
                        </p>
                    </div>
                    <div class="avisa-card-footer">
                        <a href="#chatbot" class="avisa-btn avisa-btn-primary w-100">
                            Usar Chatbot
                        </a>
                    </div>
                </div>
            </div>

            <!-- Mapa Card -->
            <div class="col-md-4 mb-4">
                <div class="avisa-card h-100 text-center">
                    <div class="avisa-card-header">
                        <span style="font-size: 3rem;">📍</span>
                    </div>
                    <div class="avisa-card-body">
                        <h3 class="avisa-heading-3">Mapa de Unidades</h3>
                        <p class="avisa-text">
                            Encuentra la unidad de salud más cercana a tu ubicación
                        </p>
                    </div>
                    <div class="avisa-card-footer">
                        <a href="/mapa" class="avisa-btn avisa-btn-secondary w-100">
                            Ver Mapa
                        </a>
                    </div>
                </div>
            </div>

            <!-- Promociones Card -->
            <div class="col-md-4 mb-4">
                <div class="avisa-card h-100 text-center">
                    <div class="avisa-card-header">
                        <span style="font-size: 3rem;">📚</span>
                    </div>
                    <div class="avisa-card-body">
                        <h3 class="avisa-heading-3">Promociones de Salud</h3>
                        <p class="avisa-text">
                            Información oficial sobre prevención y cuidados de salud
                        </p>
                    </div>
                    <div class="avisa-card-footer">
                        <a href="/promociones" class="avisa-btn avisa-btn-accent w-100">
                            Ver Promociones
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Promociones Destacadas -->
    <section class="avisa-container avisa-p-8">
        <h2 class="avisa-heading-2 text-center avisa-mb-8">Promociones de Salud Destacadas</h2>
        
        <div class="row">
            @foreach($promocionesDestacadas as $promocion)
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="avisa-card h-100">
                    <div class="avisa-card-body">
                        <h3 class="avisa-heading-3">{{ $promocion->titulo }}</h3>
                        <p class="avisa-text">
                            {{ \Illuminate\Support\Str::limit($promocion->contenido, 120) }}
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="badge bg-primary">{{ $promocion->categoria }}</span>
                            <small class="text-muted">{{ $promocion->fecha_publicacion->format('d/m/Y') }}</small>
                        </div>
                    </div>
                    <div class="avisa-card-footer">
                        <a href="/promociones/{{ $promocion->id }}" class="avisa-btn avisa-btn-outline-primary w-100">
                            Leer más
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center avisa-mt-8">
            <a href="/promociones" class="avisa-btn avisa-btn-secondary">
                Ver todas las promociones
            </a>
        </div>
    </section>

    <!-- Sección Chatbot (Placeholder) -->
    <section id="chatbot" class="avisa-container avisa-p-8 bg-light">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="avisa-heading-2">Chatbot de Preclasificación</h2>
                <p class="avisa-text-lead avisa-mb-4">
                    Nuestro asistente virtual te ayudará a identificar posibles enfermedades basado en tus síntomas
                </p>
                
                <div class="avisa-card">
                    <div class="avisa-card-body">
                        <p class="avisa-text">
                            ⚡ <strong>Próximamente:</strong> Estamos desarrollando nuestro chatbot inteligente
                            para preclasificación de enfermedades prevalentes en Nicaragua.
                        </p>
                        <p class="avisa-text">
                            Mientras tanto, puedes explorar nuestras otras secciones.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection