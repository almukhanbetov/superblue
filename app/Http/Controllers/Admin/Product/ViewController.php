<?php

namespace App\Http\Controllers\Admin\Product;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function __invoke(Product $product)
    {

        return view("admin.product.view", compact('product'));
    }
}
