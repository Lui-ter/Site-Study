<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TehnologyController extends Controller
{
    public function index_Form(){
        return view('Technology.formulario_tecnologia');
    }
}
