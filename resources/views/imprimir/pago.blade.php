<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>

<div class="container-fluid">
    <div id="ui-view" data-select2-id="ui-view">
        <div>
            <div class="card">
                <div class="card-header">FOLIO:
                    <strong>#{{ $mensualidad->folio }}</strong>
                    <a class="btn btn-sm btn-secondary float-right mr-1 d-print-none" href="#"
                        onclick="javascript:window.print();" data-abc="true">
                        <i class="fa fa-print"></i> Imprimir</a>
                </div>
                <div class="card-header text-center">
                    <strong class="justify-content-center">CENTRO DE CAPACITACION TECNICA EN PROTESIS DENTAL</strong>
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-sm-3">
                            <div>JOEL GORDILLO PINTO</div>
                            <div>REGIMEN DE INCORPORACION FISCAL</div>
                            <div>RFC: GOPJ-670924-FW2 </div>
                            <div>CLAVE : 07PBT01961 ACUERDO No. PCA-01/96 	</div>
                        </div>
                        <div class="col-sm-4">
                            <div class="text-center"><img src="{{ asset('images/cecate.png') }}" alt="" width="150px"></div>
                        </div>
                        <div class="col-sm-5">
                            <div>SISTEMA EDUCATIVO  ESTATAL</div>
                            <div>ESTUDIOS CON RECONOCIMIENTO DE VALIDEZ OFICIAL</div>
                            <div>6a ORIENTE NORTE # 277 TEL.961 61 121 80  CEL.  961 60 350 85 TUXTLA GUTIERREZ , CHIAPAS</div>
                            <div>ESTA NOTA NO SERA ACUMULADA  A LA FACTURA GLOBAL</div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-3">
                            <div><strong>RECIBIMOS DE:</strong></div>
                        </div>
                        <div class="col-sm-4">
                            <div><strong>Fecha de Pago: {{ $mensualidad->created_at }}</strong></div>
                        </div>
                        <div class="col-sm-5">
                            <?php
                                setlocale(LC_TIME, 'es_MX.UTF-8');
                                $fecha = strftime('%A, %d de %B de %Y');
                            ?>
                            <div><strong>Fecha de Impresión: {{ $fecha }}</strong></div>
                        </div>
                    </div>
                    <div class="table-responsive-sm">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="center">ID</th>
                                    <th>NOMBRE</th>
                                    <th>APELLIDO PATERNO</th>
                                    <th>APELLIDO MATERNO</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="center">{{ $estudiante->id }}</td>
                                    <td class="left">{{ $estudiante->nombre }}</td>
                                    <td class="left">{{ $estudiante->ap_paterno }}</td>
                                    <td class="left">{{ $estudiante->ap_materno }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-sm-5">
                            <strong>POR CONCEPTO DE COLEGIATURA</strong>
                            <br>
                            <br>
                            <br>
                            <strong>IMPORTE CON LETRA: {{ $words }}</strong>
                        </div>
                        <div class="col-lg-4 col-sm-5 ml-auto">
                            <table class="table table-clear">
                                <tbody>
                                    <tr>
                                        <td class="left">
                                            <strong>MONTO</strong>
                                        </td>
                                        <td class="right">${{ number_format($mensualidad->mensualidad,2,'.',',') }}</td>
                                    </tr>
                                    <tr>
                                        <td class="left">
                                            <strong>MES A PAGAR</strong>
                                        </td>
                                        <td class="right">{{ $mensualidad->mes }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4 text-center">
                            <br><br><hr><br>
                            <strong>DIRECTOR DE LA ESCUELA</strong> <br>
                            <strong>TPD JOEL GORDILLO PINTO</strong>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
