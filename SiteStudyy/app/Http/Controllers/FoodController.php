<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FoodController extends Controller
{
    public function index_Form(){
        return view('Food.form-food');
    }

    public function Upload(Request $request){
        $usuarioFood = [
            'website_name' => $request->input('website_name'),
            'Description' => $request->input('Description'),
            'slogan' => $request->input('slogan'),
            'imagen' => $request->file('imagen')->store('img', 'public'),
            'product_description' => $request->input('product_description'),
            'imagen_1' => $request->file('imagen_1')->store('img', 'public'),
            'product_description_1' => $request->input('product_description_1'),
            'imagen_2' => $request->file('imagen_2')->store('img', 'public'),
            'product_description_2' => $request->input('product_description_2'),
            'food_name' => $request->input('food_name'),
            'food' => $request->input('food'),
            'food_price' => $request->input('food_price'),
            'imagen_3' => $request->file('imagen_3')->store('img', 'public'),
            'food_description' => $request->input('food_description'),
            'imagen_4' => $request->file('imagen_4')->store('img', 'public'),
            'food_description_2' => $request->input('food_description_2'),
            'imagen_5' => $request->file('imagen_5')->store('img', 'public'),
            'food_description_3' => $request->input('food_description_3'),
        ];
        return view('Food.comida', compact('usuarioFood'));
    }

}
