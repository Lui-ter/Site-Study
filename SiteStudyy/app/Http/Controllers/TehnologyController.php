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
            'namewebsite' => $_POST['namewebsite'],
            'descriptionweb' => $_POST['descriptionweb'],
            'img_one' => $request->file('img_one')->store('images','public'),
            'desc_img_one' => $_POST['desc_img_one'],
            'img_two' => $request->file('img_two')->store('images','public'),
            'desc_img_two' => $_POST['desc_img_two'],
            'img_three' => $request->file('img_three')->store('images','public'),
            'desc_img_three' => $_POST['desc_img_three'],
            'img_four' => $request->file('img_four')->store('images','public'),
            'desc_img_four' => $_POST['desc_img_four'],
            'desc_imgs' => $_POST['desc_imgs'],
            'email' => $_POST['email'],
            'boss' => $_POST['boss'],
            'logo' => $request->file('logo')->store('images','public'),
        ];

        return view('Technology.tecnologia', compact('userTecnology'));
    }
}
