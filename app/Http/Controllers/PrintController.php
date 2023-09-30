<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Mensualidade;
use Illuminate\Http\Request;
use Luecano\NumeroALetras\NumeroALetras;

class PrintController extends Controller
{
    public function imprimirPago(Request $request, $id)
    {
        $mensualidad = Mensualidade::find($id);
        $estudiante = Estudiante::find($mensualidad->estudiante_id);

        $formatter = new NumeroALetras();
        $words = $formatter->toMoney($mensualidad->mensualidad, 2, 'PESOS', 'CENTAVOS');

        $data = [
            'mensualidad' => $mensualidad,
            'estudiante' => $estudiante,
            'words' => $words
        ];
        return view('imprimir.pago', $data);
    }
}
