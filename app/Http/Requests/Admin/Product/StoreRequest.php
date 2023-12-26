<?php

namespace App\Http\Requests\Admin\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required|string',
            'price'=>'required|integer',
            'category_id'=>'required',
            'content'=>'required|string',
            'image'=>'sometimes|image|mimes:png,jpg',
            'video' => 'sometimes|mimes:mp4,ogx,oga,ogv,ogg,webm',
        ];
    }
}
