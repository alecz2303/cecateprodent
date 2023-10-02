@extends('voyager::master')

@section('page_header')
    <div class="container-fluid d-print-none">
        <h1 class="page-title">
            <i class="voyager-person"></i> {{ $estudiante->full_nme }}
        </h1>
        <a href="{{ route('voyager.estudiantes.index') }}" class="btn btn-warning btn-add-new d-print-none">
            <i class="voyager-list"></i> <span>Volver a la lista de estudiantes</span>
        </a>
        <a class="btn btn-info d-print-none" href="#"
            onclick="javascript:window.print();" data-abc="true">
            <i class="voyager-archive"></i> Imprimir
        </a>
    </div>
@stop

@section('content')
<div class="page-content browse container-fluid">
    @include('voyager::alerts')
    <div class="rowº">
        <div class="col-md-6 ol-md-offset-3">
            <div class="page-content">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="dataTable" class="table table-borderless fuente_peq">
                                <tbody>
                                    <tr>
                                        <td colspan="4" class="text-center"><img src="{{ asset('images/cecate.png') }}" width="150px"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="text-center">
                                            CENTRO DE CAPACITACION TECNICA EN PROTESIS DENTAL <br>
                                            JOEL GORDILLO PINTO <br>
                                            REGIMEN DE INCORPORACION FISCAL <br>
                                            RFC: GOPJ-670924-FW2  <br>
                                            CLAVE : 07PBT01961 ACUERDO No. PCA-01/96 <br>
                                            SISTEMA EDUCATIVO  ESTATAL <br>
                                            ESTUDIOS CON RECONOCIMIENTO DE VALIDEZ OFICIAL <br>
                                            6a ORTIENTE NORTE # 277 TEL. 61 121 80  CEL. 044 961 60 35 0 85 TUXTLA GUTIERREZ , CHIAPAS

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nombre del Alumno:</td>
                                        <td colspan="3">{{ $estudiante->full_nme }}</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">
                                            (
                                            @if($estudiante->acta === '1')
                                                <i class="voyager-check"></i>
                                            @else
                                                <i class="voyager-x"></i>
                                            @endif
                                            )
                                        </td>
                                        <td>ORIGINAL ACTA DE NACIMIENTO</td>
                                        <td>Y ( {{ $estudiante->acta_copia }} ) COPIAS</td>
                                        <td>FECHA DE ENTREGA: {{ $estudiante->acta_fecha }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">
                                            (
                                            @if($estudiante->sec === '1')
                                                <i class="voyager-check"></i>
                                            @else
                                                <i class="voyager-x"></i>
                                            @endif
                                            )
                                        </td>
                                        <td>ORIGINAL CERTIFICADO DE SECUNDARIA</td>
                                        <td>Y ( {{ $estudiante->sec_copia }} ) COPIAS</td>
                                        <td>FECHA DE ENTREGA: {{ $estudiante->sec_fecha }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">
                                            (
                                            @if($estudiante->prepa === '1')
                                                <i class="voyager-check"></i>
                                            @else
                                                <i class="voyager-x"></i>
                                            @endif
                                            )
                                        </td>
                                        <td>ORIGINAL CERTIFICADO DE PREPARATORIA O BACHILLERATO </td>
                                        <td>Y ( {{ $estudiante->prepa_copia }} ) COPIAS</td>
                                        <td>FECHA DE ENTREGA: {{ $estudiante->prepa_fecha }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">
                                            (
                                            @if($estudiante->foto === '1')
                                                <i class="voyager-check"></i>
                                            @else
                                                <i class="voyager-x"></i>
                                            @endif
                                            )
                                        </td>
                                        <td>4 FOTOGRAFIAS TAMAÑO INFANTIL </td>
                                        <td></td>
                                        <td>FECHA DE ENTREGA: {{ $estudiante->foto_fecha }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">
                                            (
                                            @if($estudiante->curp === '1')
                                                <i class="voyager-check"></i>
                                            @else
                                                <i class="voyager-x"></i>
                                            @endif
                                            )
                                        </td>
                                        <td>CURP </td>
                                        <td></td>
                                        <td>FECHA DE ENTREGA: {{ $estudiante->curp_fecha }}</td>
                                    </tr>
                                    <tr>
                                        <td>NOMBRE DEL PADRE O TUTOR:</td>
                                        <td colspan="3">{{ $estudiante->padre }}</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>NUMERO DE TELEFONO:</td>
                                        <td colspan="3">{{ $estudiante->telefono }}</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <br><br><br>
                                    <tr class="espacio">
                                        <td class="text-center" colspan="2">
                                            <br><br><br><br>
                                            ------------------------------------------------- <br>
                                            FIRMA DEL ALUMNO</td>
                                        <td class="text-center" colspan="2">
                                            <br><br><br><br>
                                            ------------------------------------------------- <br>
                                            DIRECCION DE CECATEPRODENT</td>
                                    </tr>
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
