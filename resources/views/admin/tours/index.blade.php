@extends('layouts.app')
@section('titulo', 'Lista de Tours en inglés')
@section('contenido')
    <div class="row">
        <div class="col-12 mt-2">
            <div class="row">
                <div class="col-6 float-left">
                    <h2 class="text-primary">Lista de tours en inglés: <small style="font-size: 18px">{{ $tours->count() }} registros</small></h2>
                </div>
                <div class="col-6">
                    <a href="{{ route('tours.create') }}" class="btn btn-primary btn-sm float-right mr-2">Nuevo Tour</a>
                </div>
                <div class="col-lg-12">
                    @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                            {{ session('status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                </div>
            </div>
            <!-- Buscador en tiempo real -->
            <div class="mb-1 mt-3">
                <input type="text" id="buscador" class="form-control form-control-sm" placeholder="Buscar tours por nombre, recorrido o slug">
            </div>
            <div class="table-responsive">
                <table id="tabladatos" class="table mt-4 table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Imagen Thumb</th>
                            <th scope="col">Categorias</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Keywords</th>
                            <th scope="col" class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tours as $tour)
                            <tr>
                                <td class="nombre">
                                    <strong>{{ $tour->nombre }}</strong><br>
                                    <span class="recorrido">Días: {{ $tour->dias }} - Recorrido: {{ $tour->recorrido }}</span>
                                </td>
                                <td><img src="{{ asset($tour->imgThumb) }}" width="90px"></td>
                                <td>
                                    @foreach ($tour->categorias as $categoria)
                                        <span>· {{ $categoria->nombre }}</span> <br>
                                    @endforeach
                                </td>
                                <td class="slug">{{ $tour->slug }}</td>
                                <td>{{ $tour->keywords }}</td>
                                <td style="width: 140px">
                                    <form action="{{ route('tours.destroy', $tour->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('tours.edit', $tour->id) }}" class="btn btn-info btn-sm" title="Editar">
                                            <i class="fa fa-edit"></i> 
                                        </a>
                                        <a href="{{ route('tour.show', $tour->slug) }}" class="btn btn-success btn-sm" title="Ver tour" target="_blank">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <button type="submit" class="btn btn-danger btn-sm" title="Eliminar" onclick="alerta();">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <script>
            function alerta() {
                alert('¿Desea eliminar?');
            }

            // Buscador en tiempo real
            document.getElementById('buscador').addEventListener('keyup', function() {
                const searchText = this.value.toLowerCase();
                const rows = document.querySelectorAll('#tabladatos tbody tr');

                rows.forEach(row => {
                    const nombre = row.querySelector('.nombre').textContent.toLowerCase();
                    const recorrido = row.querySelector('.recorrido').textContent.toLowerCase();
                    const slug = row.querySelector('.slug').textContent.toLowerCase();

                    // Muestra la fila si coincide con el texto de búsqueda
                    if (nombre.includes(searchText) || recorrido.includes(searchText) || slug.includes(searchText)) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                });
            });
        </script>
    </div>
@endsection
