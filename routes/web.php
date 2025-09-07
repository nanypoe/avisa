<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Livewire\PromocionSaludIndex;

Route::get('/', function () {
    return view('home');
});


//Ruta temporal para probar CRUD de Promociones
//Se moverá a su respectivo controlador luego
Route::get('/promociones-test', function () {
return view('promociones-test');
});