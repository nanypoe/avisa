<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AVISA - Asistente Virtual de Salud para Nicaragua</title>
    
    <!-- Fuente Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Estilos AVISA -->
    <link href="{{ asset('css/avisa.css') }}" rel="stylesheet">
    
    @livewireStyles
</head>
<body class="avisa-body">
    <!-- Navbar -->
    <nav class="avisa-navbar">
        <div class="avisa-container">
            <div class="d-flex justify-content-between align-items-center">
                <a href="/" class="avisa-nav-brand">
                    <strong>AVISA</strong>
                    <small class="text-muted">Asistente Virtual de Salud</small>
                </a>
                
                <ul class="avisa-nav-menu">
                    <li><a href="/" class="avisa-nav-link active">Inicio</a></li>
                    <li><a href="/mapa" class="avisa-nav-link">Mapa</a></li>
                    <li><a href="/promociones" class="avisa-nav-link">Promociones</a></li>
                </ul>
            </div>
        </div>
    </nav>

     <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-light py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>AVISA</h5>
                    <p>Asistente Virtual de Salud para Nicaragua</p>
                    <p class="text-muted">"Tu salud, nuestra prioridad"</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p>Con el apoyo del MINSA</p>
                    <p class="text-muted">© 2024 AVISA - Todos los derechos reservados</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @livewireScripts
</body>
</html>