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
            'name' => 'required|max:255|unique:products,name',
            'qty' => 'required|min:0',
            'image' => 'required|image|mimes:jpeg,jpg,png,gif,webp|max:10240',
            'image_gallery' => 'max:10240',
            'price' => 'required|integer',
            'offer_price' => 'integer',
            'sub_category_id' => 'required',
            'child_category_id' => 'required',
            'weight' => 'required',
            'promotion' => 'required',
            'specifications' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name' => [
                'required' => 'Tên sản phẩm là bắt buộc.',
                'max' => 'Tên sản phẩm không được dài quá :max ký tự.',
                'unique' => 'Tên sản phẩm đã tồn tại.',
            ],
            'qty' => [
                'required' => 'Số lượng sản phẩm là bắt buộc.',
                'min' => 'Số lượng sản phẩm phải lớn hơn hoặc bằng :min.',
            ],
            'image' => [
                'required' => 'Hình ảnh sản phẩm là bắt buộc.',
                'image' => 'File phải là một hình ảnh.',
                'mimes' => 'Hình ảnh phải có định dạng: :values.',
                'max' => 'Kích thước hình ảnh không được vượt quá :max kilobytes.',
            ],
            'image_gallery' => [
                'max' => 'Kích thước của thư viện hình ảnh không được vượt quá :max kilobytes.',
            ],
            'price' => [
                'required' => 'Giá sản phẩm là bắt buộc.',
                'integer' => 'Giá sản phẩm phải là một số nguyên.',
            ],
            'offer_price' => [
                'integer' => 'Giá khuyến mãi phải là một số nguyên.',
            ],
            'sub_category_id' => [
                'required' => 'Danh mục phụ là bắt buộc.',
            ],
            'child_category_id' => [
                'required' => 'Danh mục con là bắt buộc.',
            ],
            'weight' => [
                'required' => 'Trọng lượng sản phẩm là bắt buộc.',
            ],
            'promotion' => [
                'required' => 'Nội dung khuyến mãi là bắt buộc.',
            ],
            'specifications' => [
                'required' => 'Thông tin sản phẩm không được để trống.',
            ],
        ];
    }
}
