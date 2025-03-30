<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SportsController extends Controller
{
    public function index_Form(){
        return view('Sport.formulario_deportes');
    }
}
