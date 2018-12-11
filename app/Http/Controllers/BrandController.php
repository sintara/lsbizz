<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::filter($request)->get();

        return view('front.brands', compact('products'));
    }
}

