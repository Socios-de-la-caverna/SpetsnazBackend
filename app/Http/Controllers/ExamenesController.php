<?php

namespace App\Http\Controllers;

use App\Models\Examenes;
use Illuminate\Http\Request;

class ExamenesController extends Controller
{
    public function listar()
    {
        $examenes = Examenes::all();

        return $examenes;
    }

    public function obtener(string $discord_id)
    {
        $examen = Examenes::where('discord_id', $discord_id)->first();

        if (! $examen) {
            return response()->json([
                'error' => 'No se ha encontrado el examen.',
            ], 404);
        }

        return $examen;
    }

    public function crear(Request $request)
    {
        if (! $request->has(['discord_id', 'nombre', 'datos', 'primera_pregunta', 'segunda_pregunta', 'tercera_pregunta', 'cuarta_pregunta', 'fecha'])) {
            return response()->json([
                'error' => 'No se han especificado todos los campos.',
            ], 400);
        }

        $examen = Examenes::create([
            'discord_id' => $request->discord_id,
            'nombre' => $request->nombre,
            'datos' => $request->datos,
            'primera_pregunta' => $request->primera_pregunta,
            'segunda_pregunta' => $request->segunda_pregunta,
            'tercera_pregunta' => $request->tercera_pregunta,
            'cuarta_pregunta' => $request->cuarta_pregunta,
            'fecha' => $request->fecha,
        ]);

        return $examen;
    }

    public function eliminar(String $discord_id)
    {
        $examen = Examenes::where('discord_id', $discord_id)->first();

        if (! $examen) {
            return response()->json([
                'error' => 'No se ha encontrado el examen.',
            ], 404);
        }

        $examen->delete();

        return response()->json([
            'message' => 'Examen eliminado correctamente.',
        ]);
    }
}
