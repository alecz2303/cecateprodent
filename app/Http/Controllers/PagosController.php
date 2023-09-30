<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Mensualidade;
use Illuminate\Http\Request;
use Barryvdh\Debugbar\Facade as Debugbar;

class PagosController extends Controller
{
    public function Pagos($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        $mensualidades = Mensualidade::where('estudiante_id',$id)->orderBy('created_at','desc')->get();
        $data = [
            'id' => $id,
            'estudiante' => $estudiante,
            'mensualidades' => $mensualidades
        ];

        Debugbar::info($mensualidades);
        Debugbar::info('hola');

        return view('pagos.pago', $data);
    }
}
