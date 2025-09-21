@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row py-5">
        <div class="col-md-8 mx-auto text-center">
            <h1 class="display-4">Bienvenido a AVISA</h1>
            <p class="lead">Tu asistente virtual de salud para Nicaragua</p>
            <a href="#" class="btn btn-primary btn-lg mt-3">Comenzar con el Chatbot</a>
        </div>
    </div>
    
    <div class="row mt-5">
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">Chatbot de Salud</h5>
                    <p class="card-text">Realiza una preclasificación de síntomas y recibe recomendaciones</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">Mapa de Unidades</h5>
                    <p class="card-text">Encuentra la unidad de salud más cercana a tu ubicación</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">Promociones de Salud</h5>
                    <p class="card-text">Información oficial sobre prevención y cuidados de salud</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection