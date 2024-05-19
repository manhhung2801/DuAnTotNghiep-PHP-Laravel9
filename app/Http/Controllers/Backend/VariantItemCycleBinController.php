<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VariantItemCycleBin;


class VariantItemCycleBinController extends Controller
{
    //
    // public function index()
    // {
    //     $data = VariantItemCycleBin::get()->toArray();
    // 	dd($data);
    // }

    public function get()
    {
        // lấy tất cả dữ liệu từ bảng
        $data = VariantItemCycleBin::get()->toArray();
        // return $data;
    }

    public function delete()
    {
        // xóa dữ liệu từ bảng
        $data = VariantItemCycleBin::find(1)->delete();
    }

    public function withTrashed()
    {
        // Hàm này sẽ lấy tất cả dữ liệu từ bảng items bao gồm cả những bản ghi đã bị xóa.
        $model = new VariantItemCycleBin();
        $data = $model::withTrashed()->get()->toArray();
    }

    public function onlyTrashed()
    {
        // Hàm này sẽ chỉ lấy các dữ liệu đã bị xóa từ bảng items.
        $model = new VariantItemCycleBin();
        $data = $model::onlyTrashed()->get()->toArray();
        dd($data);
    }
}
