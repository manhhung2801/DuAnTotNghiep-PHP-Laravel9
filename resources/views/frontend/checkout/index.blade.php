@extends('frontend.layouts.master')
@section('title', 'Check out')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <h4>Thông tin nhận hàng</h4>
            <form>
                <div class="form-group my-3">
                    <input type="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group my-3">
                    <input type="text" class="form-control" placeholder="Họ và tên">
                </div>
                <div class="input-group my-3">
                    <input type="text" class="form-control" placeholder="Số điện thoại (tùy chọn)">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="images/thums/viet-nam.png" alt="" style="width:30px"></button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">Zambia (+260)</a></li>
                        <li><a class="dropdown-item" href="#">Yemen (+967)</a></li>
                        <li><a class="dropdown-item" href="#">Taiwan (+886)</a></li>
                    </ul>
                </div>
                <div class="form-group my-3">
                    <input type="text" class="form-control" placeholder="Địa chỉ (tùy chọn)">
                </div>
                <div class="form-group my-3">
                    <select class="form-control">
                        <option>Tỉnh thành</option>
                    </select>
                </div>
                <div class="form-group my-3">
                    <select class="form-control">
                        <option>Quận huyện (tùy chọn)</option>
                    </select>
                </div>
                <div class="form-group my-3">
                    <select class="form-control">
                        <option>Phường xã (tùy chọn)</option>
                    </select>
                </div>
                <div class="form-group">
                    <textarea class="form-control" rows="3" placeholder="Ghi chú (tùy chọn)"></textarea>
                </div>
            </form>
        </div>
        <div class="col-md-4">
            <h4>Vận chuyển</h4>
            <div class="alert alert-info">
                Vui lòng nhập thông tin giao hàng
            </div>
            <h4>Thanh toán</h4>
            <div class="form-group" style="border: 2px solid blue ; border-radius: 4px; height:50px">
                <div class="custom-control custom-radio mt-2 ms-2">
                    <input type="radio" id="cod" name="paymentMethod" class="custom-control-input" checked>
                    <label class="custom-control-label" for="cod">Thanh toán khi giao hàng (COD)</label>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <h4>Đơn hàng (3 sản phẩm)</h4>
            <div class="order-summary mb-3">
                <div class="d-flex">
                    <img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:358:358/q:90/plain/https://cellphones.com.vn/media/catalog/product/i/p/iphone-15-pro-max_3.png" alt="Product Image" style="height:55px">
                    <div class="ml-3">
                        <div class="product-name">iPhone 13 Pro Max 1TB - Chính Hãng VN/A</div>
                        <div class="row">
                            <div class="col-8 text-light-emphasis">Vàng</div>
                            <div class="text-right col-3 text-light-emphasis">89.970.000đ</div>
                        </div>

                    </div>
                </div>
            </div>
            <hr>
            <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Nhập mã giảm giá" style="height:50px; width:300px">
                <button class="btn btn-primary btn-apply" style="height:50px">Áp dụng</button>
            </div>
            <hr>
            <div class="d-flex justify-content-between">
                <div>Tạm tính</div>
                <div class="text-secondary">89.970.000đ</div>
            </div>
            <div class="d-flex justify-content-between">
                <div>Phí vận chuyển</div>
                <div>-</div>
            </div>
            <hr>
            <div class="d-flex justify-content-between font-weight-bold">
                <div>Tổng cộng</div>
                <div class="fs-4 text-primary">89.970.000đ</div>
            </div>
            <div class="row">
                <div class="text-center mt-3 col-7 pt-2">
                    <a href="#" class="text-decoration-none pe-5"><i class="fa-solid fa-chevron-left pt-2 me-2"></i> Quay về giỏ hàng</a>
                </div>
                <button class="btn btn-primary col-3 mt-3 ms-5">ĐẶT HÀNG</button>

            </div>

        </div>
    </div>
</div>
@endsection