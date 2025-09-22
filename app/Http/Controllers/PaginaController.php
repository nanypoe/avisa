<?php

namespace App\Http\Controllers;

use App\Models\PromocionSalud;
use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function inicio()
    {
        $promocionesDestacadas = PromocionSalud::where('es_publicado', true)
            ->orderBy('fecha_publicacion', 'desc')
            ->take(3)
            ->get();

        return view('welcome', compact('promocionesDestacadas'));
    }

    public function mapa()
    {
        return view('mapa');
    }

    public function promociones()
    {
        return view('promociones');
    }
}