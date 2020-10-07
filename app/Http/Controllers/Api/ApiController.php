<?php

namespace App\Http\Controllers\Api;

use App\Eleccion;
use App\Resultado;
use App\Mesa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function getEleccionesActivas()
    {
        $elecciones = Eleccion::
        where('estado', '!=', 'En espera')
            ->select('id', 'nombre')
            ->get();

        foreach ($elecciones as $eleccion){
            $eleccion->participantes = DB::table('participante')
                ->join('participante_eleccion', 'participante.id', '=', 'participante_eleccion.participante_id')
                ->where('participante_eleccion.eleccion_id', '=', $eleccion->id)
                ->select('participante_eleccion.id', 'sigla')
                ->get();
        }

        return $elecciones;
    }

    public function guardarResultados(Request $request)
    {
            $mesa = Mesa::where('codigo_mesa' , '=', $request['mesaId'])->first();
            $mesa_id = $mesa->id;
            $resultados = $request['resultados'];
            foreach ($resultados as $resultado) {
                try{
                    $resultado2 = new Resultado();
                    $resultado2->mesa_id = $mesa_id;
                    $resultado2->participante_eleccion_id = $resultado['id'];
                    $resultado2->total = $resultado['total'];
                    $resultado2->total_diputados = $resultado['total_diputados'];
                    $resultado2->save();
                } catch (\Exception $e){
                    // algo :v
                }
            }

            return response()->json(null,200);

    }
}
