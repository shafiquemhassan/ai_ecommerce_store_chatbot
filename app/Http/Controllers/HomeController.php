<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Get 16 products per page (4 rows of 4 items)
        $products = Product::query()->paginate(16);
        return view('home', compact('products'));
    }
}
