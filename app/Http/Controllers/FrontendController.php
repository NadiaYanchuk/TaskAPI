<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Http\Response;
use GuzzleHttp\Client;

class FrontendController extends Controller
{
    // Данные из таблицы products
    public function products()
    {
        $products = Product::all();
        
        return view('range', compact('products'));
    }

    // Данные из таблицы categories
    public function categories()
    {
        $categories = Category::all();
        
        return view('categories', compact('categories'));
    }
}