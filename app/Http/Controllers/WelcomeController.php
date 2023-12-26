<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Product;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome(){
         return view('index');
    }
    public function about(){

        return view('about');
    }
    public function contact(){

        return view('contact');
    }
    public function service(){
        $groups = Group::all();

        return view('service', compact('groups'));
    }
    public function shop(){
        $products = Product::all();
        return view('shop', compact('products'));
    }
}
