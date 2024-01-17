<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Correo;

class CorreoController extends Controller
{
    public function store(Request $request){
        $usuario = new Correo();
        $usuario->id=$request->input('id');
        $usuario->nombre=$request->input('nombre');
        $usuario->email=$request->input('email');
        $usuario->mensaje=$request->input('mensaje');
        $usuario->save();
        Alert::success('Éxito', 'Registro guardado correctamente.');
        return view('inicio');
    }

    public function lista(){
        $datos = Correo::all();
        return view('home')->with(['datos' => $datos]);
    }    

    public function borrar(Correo $id){
        $id->delete();
        Alert::success('Éxito', 'Registro eliminado correctamente.');
        $datos = Correo::all(); 
        return view('home', ['datos' => $datos]);
    }
    

    public function editar(Correo $id){
        $correo = Correo::all();
        return view('editar')
        ->with(['usuario' => $id]);
    }

    public function salvar (Correo $id, Request $request){
        $query = Correo::find($id->id);
        $query->nombre = $request->nombre;
        $query->email = $request->email;
        $query->mensaje = $request->mensaje;
        $query -> save();
        Alert::success('Éxito', 'Se actulizo correctamente.');
        $datos = Correo::all(); 
        return view('home', ['datos' => $datos]);
    }

}
