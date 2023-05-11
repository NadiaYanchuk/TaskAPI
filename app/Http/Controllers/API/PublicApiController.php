<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class PublicApiController extends Controller
{
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
            ->header('Content-Type', 'application/json');
    }
}