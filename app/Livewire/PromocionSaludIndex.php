<?php

namespace App\Livewire;

use App\Models\PromocionSalud;
use Livewire\Component;
use Livewire\WithPagination;

class PromocionSaludIndex extends Component
{
    use WithPagination;

    // Propiedades públicas para bindear con el formulario
    public $titulo;
    public $contenido;
    public $imagen_url;
    public $categoria;
    public $categorias = ['Nutrición', 'Ejercicio', 'Salud Mental', 'Prevención de Enfermedades', 'vacunacion', 'Higiene', 'Salud Sexual', 'VPCD', 'Control prenatal', 'Otros']; //Opciones para el select de categorías

    public $promocionSeleccionadaId = null; // Para editar o crear
    public $isOpen = false; // Si el modal está abierto

    // Reglas de validación
    protected $rules = [
        'titulo' => 'required|string|min:5|max:255',
        'contenido' => 'required|string|min:10',
        'imagen_url' => 'nullable|url',
        'categoria' => 'required|in:Nutrición,Ejercicio,Salud Mental,Prevención de Enfermedades,vacunacion,Higiene,Salud Sexual,VPCD,Control prenatal,Otros',
    ];

    //Función para abrir el modal
    public function abrirModal()
    {
        $this->isOpen = true;
        $this->resetErrorBag(); // Limpiar errores de validación previos
    }

    //Función para cerrar el modal y resetear las variables
    public function cerrarModal()
    {
        $this->isOpen = false;
        $this->promocionSeleccionadaId = null;
        $this->reset(['titulo', 'contenido', 'imagen_url', 'categoria']);
    }

    //Funcion para guardar (crear o actualizar)
    public function guardar()
    {
        // Valida los datos del formulario usando reglas definidas
        $this->validate();
        PromocionSalud::updateOrCreate(
            ['id' => $this->promocionSeleccionadaId],
            [
                'titulo' => $this->titulo,
                'contenido' => $this->contenido,
                'imagen_url' => $this->imagen_url,
                'categoria' => $this->categoria,
            ]
        );

        // Mensaje de éxito (Livewire con Toastr o similar)
        session()->flash(
            'message',
            $this->promocionSeleccionadaId ? '¡Promoción de Salud actualizada exitosamente!' : '¡Promoción de Salud creada exitosamente!'
        );

        $this->cerrarModal(); // Cierra el modal y resetea variables
    }

    //Función para editar una promoción de salud
    public function editar($id)
    {
        $promocion = PromocionSalud::findOrFail($id);
        $this->promocionSeleccionadaId = $id;
        $this->titulo = $promocion->titulo;
        $this->contenido = $promocion->contenido;
        $this->imagen_url = $promocion->imagen_url;
        $this->categoria = $promocion->categoria;

        $this->abrirModal(); // Abre el modal con los datos cargados
    }

    //Función para eliminar una promoción de salud
    public function eliminar($id)
    {
        PromocionSalud::find($id)->delete();
        session()->flash('message', '¡Promoción de Salud eliminada exitosamente!');
    }

    // Renderiza la vista con las promociones de salud paginadas
    public function render()
    {
        // Obtener promociones de salud paginadas (5 por página)
        $promociones = PromocionSalud::lastest()->paginate(5);
        return view('livewire.promocion-salud-index', ['promociones' => $promociones]);
    }
}