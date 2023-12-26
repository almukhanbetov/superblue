<?php

namespace App\Http\Controllers\Image;

use App\Http\Controllers\Controller;
use App\Http\Requests\Image\StoreRequest;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        if($request->hasFile('image')){
            $image = $request->file("image");
            $path = $image->store("image", 'public');
            dd($path);
        }

//        return view("image.store");
        return redirect()->route('image.index')->with('success', "Image добавлен");
    }
}
