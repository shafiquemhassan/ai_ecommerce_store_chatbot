<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Mock recommendation: Get random products
        $products = Product::query()->inRandomOrder()->take(8)->get();
        return view('home', compact('products'));
    }
}
