<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubController extends Controller
{
    public function deshabilitar(Request $request){

        $validatedData = $request->validate([
            'correo' => 'required',
        ]);

        //colectamos el correo
        $correo = $request->input('correo');
        $borrar = $request->input('borrar');

        $existe = DB::select('select id from correos where correo = ?', [$correo]);

        if (empty($existe)) {
            session()->flash('message', 'No se ha encontrado el correo.');
            return view('unsubscribe');
        } else {

            if ($borrar == 'true') {
                $id = DB::select('select * from correos where correo = ?', [$correo]);
                $deleted = DB::delete('delete from correos where id = ?', [$id[0]->id]);
                if ($deleted == 1) {
                    session()->flash('message', 'Se ha borrado el correo correctamente.');
                    return view('unsubscribe');
                } else {
                    session()->flash('message', 'No se ha encontrado el correo.');
                    return view('unsubscribe');
                }
                
                return view('unsubscribe');
            } else {
                $id = DB::select('select * from correos where correo = ?', [$correo]);
                if ($id[0]->estado == '1') {
                    $affected = DB::update('update correos set estado = 0 where id = ?', [$id[0]->id]);
                    session()->flash('message', 'Se ha anulado la suscripción correctamente.');
                    return view('unsubscribe');
                } else {

                    session()->flash('message', 'El correo ya está deshabilitado.');
                    return view('unsubscribe');

                }
            }
        }
    }
}
