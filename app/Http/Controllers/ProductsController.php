<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Products;

class ProductsController extends Controller
{
    //Test the API
    public function index()
    {
        $products = Products::all();
        return response()->json($products);
    }

        public function show($id)
    {
        $product = Products::find($id);
        if ($product) {
            return response()->json($product);
        } else {
            return response()->json(['error' => 'Product not found'], 404);
        }
    }
}
