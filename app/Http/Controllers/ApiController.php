<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    // Создание API
    public function index(Request $request)
    {
        $products = Product::all();
        $categories = Category::all();

        $data = [];

        foreach ($products as $product) {
            $category = $categories->where('id', $product->category_id)->first();

            $data[] = [
                'name' => $product->name,
                'category' => $category->name,
                'description' => $product->description,
                'price' => $product->price,
                'model' => $product->model,
                'color' => $product->color,
            ];
        }

        return response(json_encode($data, JSON_UNESCAPED_UNICODE))
           ->header('Content-Type', 'application/json'); //отображение текста на русском, настройка кодировки
    }
}
