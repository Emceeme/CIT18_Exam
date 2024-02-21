<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['name' => 'Huawei', 'price' => 10],
            ['name' => 'Iphone', 'price' => 20],
            ['name' => 'Samsung', 'price' => 30],
        ];

        return view('products.index', compact('products'));
    }
}