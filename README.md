# AVISA
AVISA: Asistente Virtual de Salud que brinda información confiable y contextualizada para Nicaragua. Ofrece preclasificación de enfermedades, promoción de hábitos saludables, geolocalización de unidades de salud más cercanas y un calendario de ferias y jornadas.

## Características Principales

- **Preclasificación de enfermedades** basada en síntomas
- **Información contextualizada** para Nicaragua
- **Geolocalización** de unidades de salud más cercanas
- **Calendario** de ferias y jornadas de salud
- **Promoción** de hábitos saludables

## Tecnologías Utilizadas

- Laravel 10.x
- Livewire
- Bootstrap 5
- Alpine.js
- MySQL
- Leaflet/OpenStreetMap (para mapas)

## Requisitos del Sistema

- PHP 8.1 o superior
- Composer
- Node.js 16+ y npm
- MySQL 5.7+ o MariaDB 10.3+

## Instalación Local

1. **Clonar el repositorio**
   ```
   git clone https://github.com/tu-usuario/avisa.git
   cd avisa

2. **Instalar dependencias PHP**
   ```
   composer install

3. **Instalar dependencias JavaScript**
   ```
    npm install
    npm run build

4. **Configurar el entorno**
   ```
    cp .env.example .env
    php artisan key:generate

5. **Configurar la base de datos en .env**
   ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=avisa_db
    DB_USERNAME=root
    DB_PASSWORD=

6. **Ejecutar las migraciones**
   ```
    php artisan migrate

7. **Ejecutar seeders (datos iniciales)**
   ```
    php artisan db:seed

8. **Iniciar el servidor local**
   ```
    php artisan serve

9. **Acceder a la app con Ctrl + Click Izquierdo en la dirección que aparece, por ejemplo:
    ```
    [https://192.0.0.10](http://127.0.0.1:8000/)

## Estructura de la Base de Datos

La aplicación utiliza las siguientes tablas principales:
- enfermedades - Enfermedades prevalentes en Nicaragua
- sintomas - Síntomas para preclasificación
- departamentos - Departamentos de Nicaragua
- municipios - Municipios de Nicaragua
- unidades_salud - Unidades del sistema de salud
- eventos_salud - Ferias y jornadas de salud

## Equipo de Desarrollo
Proyecto desarrollado por **BioBytes** para el Hackathon Nicaragua 2025 "Disruptivo".

## Licencia
Este proyecto está bajo la **Licencia MIT**.
