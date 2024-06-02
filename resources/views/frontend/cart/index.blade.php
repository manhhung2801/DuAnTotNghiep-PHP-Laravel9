@extends('frontend.layouts.master')
@section('title', 'Giỏ hàng')
@section('content')
<div class="container cart-container">
    <h3 class="my-4 fw-normal ">Giỏ hàng của bạn</h3>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Thông tin sản phẩm</th>
                    <th>Đơn giá</th>
                    <th class="ps-5">Số lượng</th>
                    <th>Thành tiền</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr class="cart-item">
                    <td class="d-flex">
                        <img class="img-thumbnail" src="https://cdn2.cellphones.com.vn/insecure/rs:fill:358:358/q:90/plain/https://cellphones.com.vn/media/catalog/product/i/p/iphone-15-pro-max_3.png" alt="iPhone 13 Pro Max">
                        <div class="ml-3">
                            <h6 class="ps-2 fw-normal">iPhone 13 Pro Max 1TB - Chính Hãng VN/A</h6>
                            <p class="ps-2 fw-light">Vàng</p>
                            <span class="btn-delete ps-2 py-3">Xóa</span>
                        </div>
                    </td>
                    <td class="pt-5 text-danger fw-bold">29.990.000₫</td>
                    <td class="text-center">
                        <div class="input-group mb-3" style="width:150px;padding-top:30px">
                            <button class="btn btn-outline-secondary"><i class="fa-solid fa-plus"></i></button>
                            <input type="text" class="form-control text-center" value="1">
                            <button class="btn btn-outline-secondary"><i class="fa-solid fa-minus"></i></button>
                        </div>
                    </td>
                    <td class="pt-5 text-danger fw-bold">59.980.000₫</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-between align-items-end">
        <button class="btn btn-light continue-shopping ">Tiếp tục mua hàng</button>
        <div class="total fs-5">
            <div class="row">
                <span class="fs-5 pe-4 col-5 fw-normal">Tổng tiền: </span>
                <p class="col-5 fs-5 text-danger">59.980.000₫</p>
            </div>
            <div class="text-right col-md-12">
                <button class="btn btn-dark checkout-button " style="width:350px">Thanh toán</button>
            </div>
        </div>
    </div>

</div>
@endsection