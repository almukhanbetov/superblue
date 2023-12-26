<?php

namespace App\Http\Controllers\Admin\Product;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\StoreRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {

        $data = $request->validated();
        if($request->hasFile('image')){
            $imageFile = $request->file('image');
            $data['image'] = $imageFile->getClientOriginalName();
            $imageFile->storeAs('product', $data['image'], 'public');
        }
        if($request->hasFile('video')){
            $videoFile = $request->file('video');
            $data['video'] = $videoFile->getClientOriginalName();
            $videoFile->storeAs('product', $data['video'], 'public');
        }

        Product::firstOrCreate($data);

        return redirect()->route('admin.product.index')->with('success', "Сохранено");
    }
}
