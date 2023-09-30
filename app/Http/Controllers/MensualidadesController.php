<?php

namespace App\Http\Controllers;

use App\Models\Folio;
use App\Models\Estudiante;
use App\Models\Mensualidade;
use Illuminate\Http\Request;

class MensualidadesController extends \TCG\Voyager\Http\Controllers\VoyagerBaseController
{
    // Override the store method here
    public function store(Request $request)
    {
        $estudiante_id = $request->input('estudiante_id');
        $mes           = $request->input('mes');
        $estudiante    = Estudiante::findOrFail($estudiante_id);
        $folio         = Folio     ::find(1);

        $mensualidad = new Mensualidade();
        $mensualidad->estudiante_id = $estudiante_id;
        $mensualidad->mes = $mes;
        $mensualidad->mensualidad = $estudiante->mensualidad;
        $mensualidad->folio = $folio->folio;

        $mensualidad->save();

        $folio->folio = $folio->folio + 1;
        $folio->save();

        $estudiante->ultimo_pago = $mensualidad->created_at;
        $estudiante->save();

        $msg = "El pago se ha registrado con éxito";
        $type = "success";

        return redirect()->route('voyager.mensualidades.show', ['id' => $mensualidad->id])->with([
            'message'    => $msg,
            'alert-type' => $type,
        ]);

    }

}
