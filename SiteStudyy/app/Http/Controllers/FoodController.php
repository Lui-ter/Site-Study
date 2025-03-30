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
        $validacion = Validator::make($request->all(), [
        'website_name'=>'required|string|max:255',
        'Description'=>'required|string',
        'slogan'=>'required|string|max:255',
        'imagen'=>'required|image|mimes:jpg,png,jpeg|max:2048',
        'product_description'=>'required|string',
        'imagen_1'=>'required|image|mimes:jpg,png,jpeg|max:2048',
        'product_description_1'=>'required|string',
        'imagen_2'=>'required|image|mimes:jpg,png,jpeg|max:2048',
        'product_description_2'=>'required|string',
        //prodcut food
        'food_name'=>'required|string',
        'food'=>'required|string',
        'food_price'=>'required|string',
        'imagen_3'=>'required|image|mimes:jpg,png,jpeg|max:2048',
        'food_description'=>'required|string',
        'imagen_4'=>'required|image|mimes:jpg,png,jpeg|max:2048',
        'food_description_2'=>'required|string',
        'imagen_5'=>'required|image|mimes:jpg,png,jpeg|max:2048',
        'food_description_3'=>'required|string',
    ],[
        'website_name.required'=>'Please writes the website name',
        'Description.required'=>'Please writes the website description',
        'slogan.required'=>'Please writes the website slogan',
        'imagen.required'=>'Please choose a for website image',
        'product_description.required'=>'Please writes a for tha image website description',
        'imagen_1.required'=>'Please choose a for website image',
        'product_description_1.required'=>'Please writes a for tha image website description',
        'imagen_2.required'=>'Please choose a for website image',
        'product_description_2.required'=>'Please writes a for the image website description',
        //messaje product food
        'food_name.required'=>'Please writes the food name',
        'food.required'=>'Please writes the food description',
        'food_price.required'=>'Please writes the food price',
        'imagen_3.required'=>'Please choose a for the image website food',
        'food_description.required'=>'Please choose a for the image website food',
        'imagen_4.required'=>'Please writes a for the description website food',
        'food_description_2.required'=>'Please writes a for the description website food',
        'imagen_5.required'=>'Please choose a for the image website food',
        'food_description_3.required'=>'Please writes a for the description website food',
    ]);

    if ($validacion -> fails()) {
        // dd($validacion->errors());
        return back()
        ->withErrors($validacion)
        ->withInput();
    }

    $imagenes = [];
    foreach (['imagen', 'imagen_1', 'imagen_2', 'imagen_3', 'imagen_4', 'imagen_5'] as $key) {
        $imagenes[$key] = $request->file($key)->store('img', 'public');
    }
    //<img src="https://via.placeholder.com/100x50" alt="" class="logo">
    return view('Food.comida',[
        'website_name' => $request->input('website_name'),
        'Description' => $request->input('Description'),
        'slogan' => $request->input('slogan'),
        'imagen' => asset('storage/' . $imagenes['imagen']),
        'product_description' => $request->input('product_description'),
        'imagen_1' => asset('storage/' . $imagenes['imagen_1']),
        'product_description_1' => $request->input('product_description_1'),
        'imagen_2' => asset('storage/' . $imagenes['imagen_2']),
        'product_description_2' => $request->input('product_description_2'),
        'food_name' => $request->input('food_name'),
        'food' => $request->input('food'),
        'food_price' => $request->input('food_price'),
        'imagen_3' => asset('storage/' . $imagenes['imagen_3']),
        'food_description' => $request->input('food_description'),
        'imagen_4' => asset('storage/' . $imagenes['imagen_4']),
        'food_description_2' => $request->input('food_description_2'),
        'imagen_5' => asset('storage/' . $imagenes['imagen_5']),
        'food_description_3' => $request->input('food_description_3'),
    ]);
    }
}
