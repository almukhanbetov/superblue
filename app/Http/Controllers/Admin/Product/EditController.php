<?php

namespace App\Http\Controllers\Admin\Product;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Group;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Product $product)
    {
        $groups = Group::all();
        return view("admin.product.edit", compact('product', 'groups'));
    }
}
