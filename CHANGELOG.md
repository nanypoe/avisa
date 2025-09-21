# Changelog

Todos los cambios notables en este proyecto serán documentados en este archivo.

El formato está basado en [Keep a Changelog](https://keepachangelog.com/es/1.0.0/),
y este proyecto adhiere a [Versionado Semántico](https://semver.org/spec/v2.0.0.html).

## [v0.3.0] - 2025-09-21

### Added
- **Estructura completa de base de datos**
  - Migraciones para todas las tablas: `departamentos`, `municipios`, `enfermedades`, `sintomas`, `enfermedad_sintoma`, `tipo_unidad_salud`, `unidades_salud`, `eventos_salud`, `promociones_salud`, `consultas_chatbot`
  - Relaciones y constraints de foreign keys implementadas

- **Modelos Eloquent completos**
  - `Departamento.php` con relación hasMany a Municipios
  - `Municipio.php` con relaciones belongsTo Departamento y hasMany a UnidadesSalud/EventosSalud
  - `Enfermedad.php` con relación belongsToMany a Síntomas
  - `Sintoma.php` con relación belongsToMany a Enfermedades y scopes para signos de alarma
  - `TipoUnidadSalud.php` con relación hasMany a UnidadesSalud
  - `UnidadSalud.php` con relaciones belongsTo a Municipio y TipoUnidadSalud
  - `EventoSalud.php` con relación belongsTo a Municipio
  - `PromocionSalud.php` con scopes para promociones activas
  - `ConsultaChatbot.php` con relaciones y castings para JSON data

- **Sistema de Seeders**
  - `TipoUnidadSaludSeeder`: Tipos de unidades de salud (Hospital, Centro de Salud, Puesto de Salud, etc.)
  - `DepartamentoMunicipioSeeder`: Todos los departamentos y municipios de Nicaragua
  - `EnfermedadSeeder`: Enfermedades prevalentes (Dengue, Malaria, IRAs, Hipertensión, Diabetes, etc.)
  - `SintomaSeeder`: Síntomas médicos con categorías y prioridades
  - `EnfermedadSintomaSeeder`: Relaciones pivote con relevancias entre enfermedades y síntomas
  - `UnidadSaludSeeder`: Unidades de salud reales de Nicaragua con coordenadas geográficas

- **Estructura básica de la aplicación**
  - Layout principal (`resources/views/layouts/app.blade.php`)
  - Vista de inicio (`resources/views/welcome.blade.php`)
  - Sistema de rutas básico (`routes/web.php`)
  - Controlador de páginas (`app/Http/Controllers/PaginaController.php`)

### Technical
- Configuración inicial de Livewire y Alpine.js
- Configuración de Bootstrap 5
- Estructura de versionado semántico implementada
- Sistema de changelog establecido

## [v0.2.0] - 2025-09-20

### Added
- Configuración inicial del proyecto Laravel
- Estructura de migraciones definida
- Configuración inicial de Git y GitHub
- Archivo README.md con documentación básica

## [v0.1.0] - 2025-09-19

### Added
- Idea del proyecto AVISA conceptualizada
- Estructura inicial del repositorio
- Planificación de features en Trello

## [Próximas Versiones]

### [v0.4.0] - Planeado
- **Seeders restantes**
  - `PromocionSaludSeeder`: Contenido de blog/promociones de salud
  - `EventoSaludSeeder`: Ferias y eventos de salud
  - `ConsultaChatbotSeeder`: Datos de prueba para historial de consultas

- **Vistas básicas**
  - Página de mapa de unidades de salud
  - Página de promociones/blog de salud
  - Sistema de navegación entre páginas

### [v0.5.0] - Planeado
- **Componente Livewire del Chatbot**
  - Flujo de preguntas basado en síntomas
  - Algoritmo de preclasificación de enfermedades
  - Guardado de consultas en base de datos
  - Interfaz de usuario del chatbot

### [v0.6.0] - Planeado
- **Sistema de Mapa**
  - Integración con Leaflet.js
  - Marcadores de unidades de salud
  - Geolocalización para unidad más cercana
  - Filtros por municipio/departamento

### [v0.7.0] - Planeado
- **Sistema de Promociones/Blog**
  - CRUD para administradores
  - Vista pública de promociones
  - Búsqueda en tiempo real
  - Categorización de contenido

### [v0.8.0] - Planeado
- **Sistema de Eventos**
  - Calendario de ferias de salud
  - Vista de mapa para eventos
  - Filtros por tipo de evento y ubicación

### [v1.0.0] - Planeado (MVP)
- **Versión Estable Inicial**
  - Todas las funcionalidades core implementadas
  - Testing básico completado
  - Documentación de usuario
  - Primer deployment de prueba

## [Format]
- `Added` para nuevas funcionalidades
- `Changed` para cambios en funcionalidades existentes
- `Deprecated` para funcionalidades obsoletas
- `Removed` para funcionalidades eliminadas
- `Fixed` para corrección de bugs
- `Security` para vulnerabilidades corregidas