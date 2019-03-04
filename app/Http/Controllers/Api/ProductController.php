<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
class ProductController extends Controller
{
    public function index(){

      $products = Product::all();

      return response()->json($products);


    }

    public function create(Request $request){
      $data = $request->all();

      $validatedData = $request->validate([
        'name' => 'required',
        'serial_number' => 'required',
        'description' => 'required'
      ]);

      $newProduct = new Product;
      $newProduct->fill($validatedData);
      $newProduct->save();

      return response()->json($newProduct);
    }
}
