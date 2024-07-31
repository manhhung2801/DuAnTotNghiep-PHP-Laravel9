@extends('frontend.layouts.master')
@section('title', 'Đơn hàng chi tiết')
@section('styles')
    <style>
        .gradient-custom {
            /* fallback for old browsers */
            background: #FFF6E9;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to top left, rgb(190, 219, 220), rgba(246, 243, 255, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to top left, rgb(190, 219, 220), rgba(246, 243, 255, 1))
        }

        .track-line {
            height: 2px !important;
            background-color: #488978;
            opacity: 1;
        }

        .dot {
            height: 10px;
            width: 10px;
            margin-left: 3px;
            margin-right: 3px;
            margin-top: 0px;
            background-color: #488978;
            border-radius: 50%;
            display: inline-block
        }

        .big-dot {
            height: 25px;
            width: 25px;
            margin-left: 0px;
            margin-right: 0px;
            margin-top: 0px;
            background-color: #488978;
            border-radius: 50%;
            display: inline-block;
        }

        .big-dot i {
            font-size: 12px;
        }

        .card-stepper {
            z-index: 0
        }
    </style>
@endsection
@section('content')
    <section class="h-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-10 col-xl-8">
                    <div class="card" style="border-radius: 10px;">
                        <div class="card-header px-4 py-5 d-flex justify-content-between">
                            <h5 class="text-muted mb-0">Cảm ơn bạn đã đặt hàng, <span
                                    style="color: #1A2130;">{{ \Auth::user()->name }}</span>!
                            </h5>
                            <div>
                                <a href="{{ route('order.index') }}"><i class="fa-solid fa-arrow-left"></i> Trở lại đơn
                                    hàng</a>
                            </div>
                        </div>
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <p class="lead fw-normal mb-0" style="color: #1A2130;">Biên lai</p>
                                <p class="small text-muted mb-0">Phiếu thu : 1KAU9-84UIL</p>
                            </div>
                            @forelse ($getOrderDetail as $order)
                                <div class="card shadow-0 border mb-4">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <img src="{{ asset('uploads/products/' . $order->product->image) }}"
                                                    width="100px" alt="Phone">
                                            </div>
                                            <div class="col-md-4 d-flex align-items-center">
                                                <div>
                                                    <p class="text-muted mb-0"><strong>{{ $order->product_name }}</strong>
                                                    </p>
                                                    @if (isset($order->variants))
                                                        {{-- Chuyển dổi json thành mảng --}}
                                                        @php
                                                            $variants = json_decode($order->variants);
                                                        @endphp

                                                        {{-- Lặp các variant --}}
                                                        @foreach ($variants as $key => $value)
                                                            <p class="text-muted mb-0 small text-capitalize">
                                                                <strong>{{ $key }}:</strong>
                                                                {{ $value }}
                                                            </p>
                                                        @endforeach
                                                    @endif
                                                </div>
                                            </div>
                                            <div
                                                class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                                <p class="text-muted mb-0 small">x{{ $order->qty }}</p>
                                            </div>
                                            <div
                                                class="col-md-4 text-center d-flex justify-content-center align-items-center">
                                                <strong
                                                    class="text-muted mb-0 small">{{ number_format($order->price, 0, '', '.') }}
                                                    VNĐ</strong>
                                            </div>
                                        </div>
                                        <hr class="mb-4" style="background-color: #e0e0e0; opacity: 1;">
                                    </div>
                                </div>
                            @empty
                            @endforelse
                            <div class="row d-flex align-items-center mb-3">
                                <div class="col">
                                        <div class="d-flex flex-row justify-content-between align-items-center align-content-center">
                                            <span class="dot"></span>
                                            <hr class="flex-fill track-line"><span class="dot"></span>
                                            <hr class="flex-fill track-line"><span class="dot"></span>
                                            <hr class="flex-fill track-line"><span class="dot"></span>
                                            <hr class="flex-fill track-line"><span
                                                class="d-flex justify-content-center align-items-center big-dot dot">
                                                <i class="fa fa-check text-white"></i></span>
                                        </div>
                            
                                        <div class="d-flex flex-row justify-content-between align-items-center">
                                            <div class="d-flex flex-column align-items-start"><span>15 tháng 3</span><span>Đã đóng gói</span>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center"><span>15 tháng 3</span>
                                                <span>Đặt hàng thành công</span>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center align-items-center"><span>15 tháng 3
                                                </span><span>Đơn hàng đã được gửi đi</span>
                                            </div>
                                            <div class="d-flex flex-column align-items-center">
                                                <span>15 Mar</span>
                                                <span>Đang giao hàng</span>
                                            </div>
                                            <div class="d-flex flex-column align-items-end"><span>15 tháng 3</span><span>Đã giao hàng</span></div>
                                        </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-4 mt-2">
                                    <div class="pt-2">
                                        <h5>Thông tin người nhận</h6>
                                        <p class="text-muted mb-0 mt-3">Nguyễn Văn B</p>
                                        <p class="text-muted mb-0">0342568696</p>
                                        <p class="text-muted mb-0">chung cư AVENUE đường 11, Phường Tam Bình, TP. Thủ Đức , TP. Hồ Chí minh.</p>

                                    </div>
                                </div>

                                <div class="col-12 col-md-4 mt-2">
                                    <div class="pt-2">
                                        <h5>Phương thức thanh toán:</h6>
                                        <p class="text-muted mb-0 mt-3">Thanh toán khi nhận hàng (COD)</p>
                                        @isset($getCoupon)
                                            <p class="text-muted mb-0"><span class="fw-bold">Giảm giá: </span>
                                                {{ $getCoupon->precent_amount }}
                                                {{ $getCoupon->coupon_type == 'precent' ? '%' : 'VND' }}
                                            </p>
                                        @endisset
                                        <p class="text-muted mb-0"><span class="fw-bold">Tổng cộng: </span>{{ number_format($orderDetail->total, 0, '', '.') }}VNĐ</p>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 mt-2">
                                    <div class="pt-2">
                                        <h5>Thông tin vận chuyển</h6>
                                        <p class="text-muted mb-0 mt-3"><span class="fw-bold">Phí giao hàng: </span>
                                            @isset($orderDetail->ship_money)
                                                {{ number_format($orderDetail->ship_money, 0, ',', '.') }}
                                            @endisset
                                            VNĐ
                                        </p>
                                        <p class="text-muted mb-0 mt-3">
                                            <img src="https://cdn.haitrieu.com/wp-content/uploads/2022/05/Logo-GHTK-H.png" alt="GHTK" class="shipping-logo" style="margin-top: -5px" width="150px" height="35px"> 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer border-0 px-4 py-5"
                            style="background-color: #1A2130; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                            <h5 class="d-flex align-items-center justify-content-end text-white text-uppercase mb-0">TỔNG SỐ
                                CHI TRẢ: <span class="h2 mb-0 ms-2">{{ number_format($orderDetail->total + $orderDetail->ship_money, 0, '', '.') }}
                                    VNĐ</span></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
