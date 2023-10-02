<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class FormatosController extends Controller
{
    public function recdocs($id)
    {
        $estudiante = Estudiante::findOrFail($id);

        $data = [
            'estudiante' => $estudiante
        ];

        return view('imprimir.recibo_doctos', $data);
    }
}
