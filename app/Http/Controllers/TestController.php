<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /** @var string Table name */
    protected string $table = 'posts';

    public function index(): string
    {
        $product = Product::find(1);
        dd($product);
        return 'index page';
    }
}
