<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::OrderBy('id', 'DESC')->paginate(10);

        return view('products.index', [
            'products' => $products
        ]);
    }

    public function show(Product $product)
    {
        return view('products.show', [
            'product' => $product
        ]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        Product::create($request->all());

        return redirect()->route('products.index');
    }
    
}
