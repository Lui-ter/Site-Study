<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SportsController extends Controller
{
    public function indexForm(){
        return view('Sport.formulario_deportes');
    }

    public function AddDeporte(Request $request){
        $usuarioDeporte = [
            'nombreweb' => $request->input('webnombre'),
            'descripcionweb' => $request->input('wedescripcion'),  
            'tituloImagen1' => $request->input('tituloImagen1'),
            'imagen1' => $request->file('imagen1')->store('imagenes', 'public'),
            'desImagen1' => $request->input('desImagen1'),
            'tituloImagen2' => $request->input('tituloImagen2'),
            'imagen2' => $request->file('imagen2')->store('imagenes', 'public'),
            'desImagen2' => $request->input('desImagen2'),
            'tituloImagen3' => $request->input('tituloImagen3'),
            'imagen3' => $request->file('imagen3')->store('imagenes', 'public'),
            'desImagen3' => $request->input('desImagen3'),
            'tituloImagen4' => $request->input('tituloImagen4'),
            'imagen4' => $request->file('imagen4')->store('imagenes', 'public'),
            'desImagen4' => $request->input('desImagen4'),
            'descripcionImg' => $request->input('descripcionImg'),
            'email' => $request->input('email'),
            'coach' => $request->input('coach'),
            'logo' => $request->file('logo')->store('imagenes', 'public'),
        ];
        return view('Sport.deportes',compact('usuarioDeporte'));

    }
    public function resultadoSport(){
        return view('Sport.deportes');
    }


}
