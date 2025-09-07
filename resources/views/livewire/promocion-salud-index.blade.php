<div>
    <!-- Botón para abrir el modal de crear -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Gestionar Promociones de Salud</h2>
        <button class="btn btn-primary" wire:click="abrirModal()">
            <i class="fas fa-plus"></i> Nueva Promoción
        </button>
    </div>

    <!-- Mensajes de éxito -->
    @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <!-- Modal de formulario (Crear/Editar) -->
    @if ($isOpen)
        <div class="modal d-block" tabindex="-1" style="background-color: rgba(0,0,0,0.5)">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            {{ $promocionSeleccionadaId ? 'Editar' : 'Crear' }} Promoción
                        </h5>
                        <button type="button" class="btn-close" wire:click="cerrarModal()"></button>
                    </div>
                    <div class="modal-body">
                        <form wire:submit.prevent="guardar">
                            <div class="mb-3">
                                <label class="form-label">Título</label>
                                <input type="text" class="form-control @error('titulo') is-invalid @enderror"
                                    wire:model="titulo">
                                @error('titulo') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Contenido</label>
                                <textarea class="form-control @error('contenido') is-invalid @enderror" rows="4"
                                    wire:model="contenido"></textarea>
                                @error('contenido') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">URL de la Imagen (Opcional)</label>
                                <input type="url" class="form-control @error('imagen_url') is-invalid @enderror"
                                    wire:model="imagen_url" placeholder="https://ejemplo.com/imagen.jpg">
                                @error('imagen_url') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Categoría</label>
                                <select class="form-select @error('categoria') is-invalid @enderror" wire:model="categoria">
                                    <option value="">Seleccione una categoría...</option>
                                    @foreach ($categorias as $categoriaOption)
                                        <option value="{{ $categoriaOption }}">{{ ucfirst($categoriaOption) }}</option>
                                    @endforeach
                                </select>
                                @error('categoria') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">
                                    {{ $promocionSeleccionadaId ? 'Actualizar' : 'Crear' }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <!-- Tabla de promociones -->
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Categoría</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($promociones as $promocion)
                    <tr>
                        <td>{{ $promocion->titulo }}</td>
                        <td><span class="badge bg-secondary">{{ ucfirst($promocion->categoria) }}</span></td>
                        <td>
                            <button class="btn btn-sm btn-warning" wire:click="editar({{ $promocion->id }})">
                                <i class="fas fa-edit"></i> Editar
                            </button>
                            <button class="btn btn-sm btn-danger" wire:click="eliminar({{ $promocion->id }})"
                                onclick="return confirm('¿Estás seguro de eliminar esta promoción?')">
                                <i class="fas fa-trash"></i> Eliminar
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">No hay promociones de salud registradas.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Paginación -->
    <div class="d-flex justify-content-center">
        {{ $promociones->links() }}
    </div>
</div>