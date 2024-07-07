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
    </style>
@endsection
@section('content')
    <section class="h-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-10 col-xl-8">
                    <div class="card" style="border-radius: 10px;">
                        <div class="card-header px-4 py-5">
                            <h5 class="text-muted mb-0">Cảm ơn bạn đã đặt hàng, <span style="color: #1A2130;">{{ \Auth::user()->name }}</span>!
                            </h5>
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
                                                    class="img-fluid" alt="Phone">
                                            </div>
                                            <div
                                                class="col-md-3 text-center d-flex justify-content-center align-items-center">
                                                <p class="text-muted mb-0"><strong>{{ $order->product_name }}</strong></p>
                                            </div>
                                            <div
                                                class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                                <p class="text-muted mb-0 small">Màu sắc: {{ $order->variants }}</p>
                                            </div>
                                            <div
                                                class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                                <p class="text-muted mb-0 small">SL: {{ $order->qty }}</p>
                                            </div>
                                            <div
                                                class="col-md-3 text-center d-flex justify-content-center align-items-center">
                                                <strong
                                                    class="text-muted mb-0 small">{{ number_format($order->price, 0, '', '.') }}
                                                    VNĐ</strong>
                                            </div>
                                        </div>
                                        <hr class="mb-4" style="background-color: #e0e0e0; opacity: 1;">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-md-2">
                                                <p class="text-muted mb-0 small">Theo dõi thứ tự</p>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="progress" style="height: 6px; border-radius: 16px;">
                                                    <div class="progress-bar" role="progressbar"
                                                        style="width: 65%; border-radius: 16px; background-color: #1A2130;"
                                                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="d-flex justify-content-around mb-1">
                                                    <p class="text-muted mt-1 mb-0 small ms-xl-5">Ra ngoài để giao hàng</p>
                                                    <p class="text-muted mt-1 mb-0 small ms-xl-5">Đã giao hàng</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                            @endforelse
                            <div class="d-flex justify-content-between pt-2">
                                <p class="fw-bold mb-0">Chi tiết đơn hàng</p>
                                <p class="text-muted mb-0"><span class="fw-bold me-4">Tổng cộng</span> {{ number_format($orderDetail->total, 0, '', '.') }}
                                    VNĐ</p>
                            </div>

                            <div class="d-flex justify-content-between pt-2">
                                <p class="text-muted mb-0">Số hóa đơn: 788152</p>
                                <p class="text-muted mb-0"><span class="fw-bold me-4">Giảm giá</span> {{$orderDetail->coupon != null? number_format($orderDetail->coupon, 0, '', '.'):0}} VNĐ</p>
                            </div>

                            <div class="d-flex justify-content-between">
                                <p class="text-muted mb-0">Ngày xuất hóa đơn: {{ $orderDetail->created_at }}</p>
                                <p class="text-muted mb-0"><span class="fw-bold me-4">Thuế hàng hóa và dịch vụ 18%</span>
                                    123</p>
                            </div>

                            <div class="d-flex justify-content-between mb-5">
                                <p class="text-muted mb-0">Phiếu thu tiền : 18KU-62IIK</p>
                                <p class="text-muted mb-0"><span class="fw-bold me-4">Phí giao hàng</span> miễn phí</p>
                            </div>
                        </div>
                        <div class="card-footer border-0 px-4 py-5"
                            style="background-color: #1A2130; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                            <h5 class="d-flex align-items-center justify-content-end text-white text-uppercase mb-0">TỔNG SỐ
                                CHI TRẢ: <span class="h2 mb-0 ms-2">{{ number_format($orderDetail->total, 0, '', '.') }} VNĐ</span></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
