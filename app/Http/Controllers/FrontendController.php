<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class FrontendController extends Controller
{
    public function products()
    {
        $products = Product::all();
        
        return view('range', compact('products'));
    }

    public function categories()
    {
        $categories = Category::all();
        
        return view('categories', compact('categories'));
    }
}