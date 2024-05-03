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
        ];
    }
    public function messages()
    {
        return [
            'name.required' => "Product name cannot be empty!",
            'name.max' => "Product name cannot be more than 255 characters!",
            'name.unique' => "Product name Exists!",
            'qty.required' => "Product quantity cannot be empty!",
            'qty.min' => "Product quantity cannot be less than zero!",
            'image.required' => "Image cannot be empty!",
            'image.image' => "Image must be a file!",
            'image.mimes' => "Image format must be jpeg, jpg, png, gif, or webp!",
            'image.max' => "Image size must not exceed 5MB!",
            'image_gallery.max' => "Thumbnail image size must not exceed 5MB!",
            'price.required' => "Price cannot be empty!",
            'price.integer' => "Price must be a number!",
            'offer_price.integer' => "Offer Price must be a number!",
            'sub_category_id' => 'sub_category_id cannot be empty!',
            'child_category_id' => 'child_category_id cannot be empty!',
        ];
    }
}
