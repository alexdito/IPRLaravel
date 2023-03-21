<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index(): string
    {
        dd(Product::all());

        return 'index page';
    }

    public function create(): string
    {
        Product::create([
            'title' => 'Second product',
            'description' => 'Second product description',
            'image' => '/test/',
            'price' => 321,
        ]);

        return 'Created product';
    }

    public function update(): string
    {
        $product = Product::find(1);

        $product->update([
            'title' => 'First product',
        ]);

        return 'Product updated';
    }
}
