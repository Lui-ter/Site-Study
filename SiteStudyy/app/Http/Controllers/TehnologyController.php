<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TehnologyController extends Controller
{
    public function indexForm(){
        return view('Technology.formulario_tecnologia');
    }

    public function AddTehnology(Request $request){
        $userTecnology = [
            'namewebsite' => $request->input('namewebsite'),
            'descriptionweb' => $request->input('descriptionweb'),
            'titleone' => $request->input('titleone'),
            'img_one' => $request->file('img_one')->store('images','public'),
            'desc_img_one' => $request->input('desc_img_one'),
            'titletwo' => $request->input('titletwo'),
            'img_two' => $request->file('img_two')->store('images','public'),
            'desc_img_two' => $request->input('desc_img_two'),
            'titlethree' => $request->input('titlethree'),
            'img_three' => $request->file('img_three')->store('images','public'),
            'desc_img_three' => $request->input('desc_img_three'),
            'titlefour' => $request->input('titlefour'),
            'img_four' => $request->file('img_four')->store('images','public'),
            'desc_img_four' => $request->input('desc_img_four'),
            'email' => $request->input('email'),
            'boss' => $request->input('boss'),
            'logo' => $request->file('logo')->store('images','public'),
        ];

        return view('Technology.tecnologia', compact('userTecnology'));
    }
}
