<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(StoreProductRequest $request)
    {
        $product = Product::create(
            $request->validated()
        );

        return response()->json(
            $product,
            201
        );
    }

    public function index()
    {
        $products = Product::all();

        return response()->json(
            $products,
            200
        );
    }
}
