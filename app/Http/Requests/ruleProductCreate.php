<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ruleProductCreate extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'name' => 'required|max:255|unique:products,name',
            'qty' => 'required|min:0',
            'image' => 'required|image|mimes:jpeg,jpg,png,gif,webp|max:10240',
            'image_gallery' => 'max:10240',
            'price' => 'required|integer',
            'offer_price' => 'integer',
            'sub_category_id' => 'required',
            'child_category_id' => 'required',
            'weight' => 'required'
        ];
    }
}
