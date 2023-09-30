@extends('voyager::master')

@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="voyager-person"></i> {{ $estudiante->full_nme }}
        </h1>
        <a href="{{ route('voyager.estudiantes.index') }}" class="btn btn-warning btn-add-new">
            <i class="voyager-list"></i> <span>Volver a la lista de estudiantes</span>
        </a>
    </div>
@stop

@section('content')
<div class="page-content browse container-fluid">
    @include('voyager::alerts')
    <div class="row">
        <div class="col-md-12">
            <div class="page-content">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="dataTable" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Folio</th>
                                        <th>Mensualidad</th>
                                        <th>Mes Pagado</th>
                                        <th>Creado</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($mensualidades as $mensualidad)
                                        <tr>
                                            <td>{{ $mensualidad->folio }}</td>
                                            <td>{{ number_format($mensualidad->mensualidad,2,'.',',') }}</td>
                                            <td>{{ $mensualidad->mes }}</td>
                                            <td>{{ $mensualidad->created_at }}</td>
                                            <td><a href="{{ route('voyager.print.imprimirPago', ['id' => $mensualidad->id]) }}" class="btn btn-sm btn-info mensualidad" target="_blank">
                                                <i class="glyphicon glyphicon-print"></i> Imprimir
                                            </a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
