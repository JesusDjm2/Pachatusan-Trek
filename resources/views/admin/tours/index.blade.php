@extends('layouts.app')
@section('titulo', 'Lista de Tours en inglés')
@section('contenido')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">

    <div class="row">
        <div class="col-12 mt-2">
            <div class="row">
                <div class="col-6 float-left">
                    <h2 class="text-primary">Lista de tours en inglés:</h2>
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
                                <td>
                                    <strong>{{ $tour->nombre }}</strong><br>
                                    <li>Días: {{ $tour->dias }}</li>
                                    <li>Recorrido: {{ $tour->recorrido }}</li>
                                </td>

                                <td><img src="{{ asset($tour->imgThumb) }}" width="90px"></td>
                                <td>
                                    @foreach ($tour->categorias as $categoria)
                                        <span>· {{ $categoria->nombre }}</span> <br>
                                    @endforeach
                                </td>
                                <td>{{ $tour->slug }}</td>
                                <td>{{ $tour->keywords }}</td>
                                <td style="width: 140px">
                                    <form action="{{ route('tours.destroy', $tour->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('tours.edit', $tour->id) }}" class="btn btn-info btn-sm"
                                            title="Editar">
                                            <i class="fa fa-edit"></i> </a>
                                        <a href="{{ route('tour.show', $tour->slug) }}" class="btn btn-success btn-sm"
                                            title="Ver tour" target="_blank"><i class="fa fa-eye"></i></a>
                                        <button type="submit" class="btn btn-danger btn-sm" title="Eliminar"
                                            onclick="alerta();"><i class="fa fa-trash"></i></button>
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
                alert('Desea aliminar?');
            }
        </script>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>


@endsection
