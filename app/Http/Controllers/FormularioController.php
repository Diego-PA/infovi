<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Correo;
use App\Respuesta;

class FormularioController extends Controller{

    public function guardar(Request $request){
/*
        $validacion = $request->validate([
            'genero' => 'present',
            'fiebre' => 'present',
            'tos' => 'present',
            'respirar' => 'present',
            'pecho' => 'present',
            'cabeza' => 'present',
            'escurrimiento' => 'present',
            'musculos' => 'present',
            'diarrea' => 'present',
        ]);*/

        echo "valida";

        //si el correo llega
        if ($request->input('correo') != null) {
    
            $id_correo = DB::table('correos')->insertGetId([
                'correo' => $request->input('correo'),
            ]);

        } else {

            $id_correo = null;

        }

        //asignaciones
        $genero = $request->input('genero');
        $contacto = $request->input('contacto');
        $fiebre = $request->input('fiebre');
        $tos = $request->input('tos');
        $dificultad_respiratoria = $request->input('respirar');
        $dolor_pecho = $request->input('pecho');
        $dolor_cabeza = $request->input('cabeza');
        $escurrimiento = $request->input('escurrimiento');
        $dolor_muscular = $request->input('musculos');
        $diarrea = $request->input('diarrea');

        switch ($contacto) {
            case '1':
                $contacto_fin = true;
                break;
            
            default:
                $contacto_fin = false;
                break;
        }

        //luego generar el diagnostico
        $respuestas = array($contacto_fin, $fiebre, $tos, $dificultad_respiratoria, $dolor_pecho, $dolor_cabeza, $escurrimiento, $dolor_muscular, $diarrea);
        $booleanos = array(false,false,false,false,false,false,false,false,false);

        for ($i=0; $i <= 8; $i++) { 
            if ($respuestas[$i] == "true") {
                $booleanos[$i] = true;
            }
        }

        $verdaderas = 0;

        foreach ($respuestas as $value) {
            if ($value == "true") {
                $verdaderas = $verdaderas + 1;

            }
        }

        switch ($verdaderas) {
            case ($verdaderas >= 6):
                $id_diagnostico = 1; //alta probabilidad de estar contagiado
                break;

            case ($verdaderas <= 2):
                $id_diagnostico = 3; //baja probabilidad de estar contagiado
                break;

            default:
                $id_diagnostico = 2; //media probabilidad de estar contagiado
                break;
        }

        DB::table('respuestas')->insert([
            'genero' => $genero,
            'contacto' => $booleanos[0],
            'fiebre' => $booleanos[1],
            'tos' => $booleanos[2],
            'dificultad_respiratoria' => $booleanos[3],
            'dolor_pecho' => $booleanos[4],
            'dolor_cabeza' => $booleanos[5],
            'escurrimiento' => $booleanos[6],
            'dolor_muscular' => $booleanos[7],
            'diarrea' => $booleanos[8],
            'id_diagnostico' => $id_diagnostico,
            'id_correo' => $id_correo,
        ]);

    }

}
