<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();

        return view('/admin/subject/create', compact('categories'));
    }
}
