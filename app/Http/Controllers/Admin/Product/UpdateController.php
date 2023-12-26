<?php

namespace App\Http\Controllers\Admin\Product;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\UpdateRequest;
use App\Models\Product;
use Illuminate\Http\Request;
class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Product $product)
    {
        $data = $request->validated();
        if($request->hasFile('image')){
            $imageFile = $request->file('image');
            $data['image'] = $imageFile->getClientOriginalName();
            $imageFile->storeAs('product', $data['image'], 'public');
        }
        $product->update($data);
        return redirect()->route('admin.product.index')->with('success', "Обновлено");
    }
}
