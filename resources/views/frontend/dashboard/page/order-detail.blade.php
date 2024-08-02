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
                                <p class="small text-muted mb-0">Mã đơn hàng: {{ $getOrder->order_code }}</p>
                                @if($getOrder->shipping_method == 1)
                                    <p class="text-muted mb-0"><span class="fw-bold">Mã vận đơn: </span>
                                        {{ $getOrder->tracking_id ?? 'Đang cập nhập' }}
                                    </p>
                                @endif
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
                            <div class="row d-flex align-items-center mb-2">
                                <div class="col">
                                    {{-- Trạng thái đơn hàng Nhận tại cữa h --}}
                                    @if ($getOrder->shipping_method == 0)
                                        <div
                                            class="d-flex flex-row justify-content-between align-items-center align-content-center">
                                            @if ($getOrder->order_status == -1)
                                                <span
                                                    class="d-flex justify-content-center align-items-center big-dot dot bg-danger"><i
                                                        class="fa fa-check text-white"></i></span>
                                                <hr class="flex-fill">

                                                <span class="dot bg-secondary"></span>
                                                <hr class="flex-fill">

                                                <span class="dot bg-secondary"></span>
                                            @else
                                                <span
                                                    class="d-flex justify-content-center align-items-center big-dot dot"></span>
                                                @if ($getOrder->order_status == 91 || $getOrder->order_status == 92)
                                                    <hr class="flex-fill border border-success border-3 opacity-75">
                                                    <span
                                                        class="d-flex justify-content-center align-items-center big-dot dot"></span>
                                                @else
                                                    <hr class="flex-fill">
                                                    <span class="dot"></span>
                                                @endif
                                                @if ($getOrder->order_status == 92)
                                                    <hr class="flex-fill border border-success border-3 opacity-75">
                                                    <span
                                                        class="d-flex justify-content-center align-items-center big-dot dot">
                                                        <i class="fa fa-check text-white"></i></span>
                                                @else
                                                    <hr class="flex-fill">
                                                    <span class="dot"></span>
                                                @endif
                                            @endif
                                        </div>
                                        <div class="d-flex flex-row justify-content-between align-items-center">
                                            @if ($getOrder->order_status == -1)
                                                <div class="d-flex flex-column align-items-start"><span>Đã hủy</span>
                                                </div>
                                            @else
                                                <div class="d-flex flex-column align-items-start"><span>Chờ xác
                                                        nhận</span>
                                                </div>
                                            @endif
                                            <div class="d-flex flex-column justify-content-center">
                                                <span>Đã tiếp nhận</span>
                                            </div>
                                            <div class="d-flex flex-column align-items-end"><span>Hoàn thành</span>
                                            </div>
                                        </div>
                                    @elseif($getOrder->shipping_method == 1)
                                        @if($getOrder->order_status == 0)
                                            <p class="text-muted mb-0"><span class="fw-bold">Trạng thái đơn hàng: </span>Chờ xác nhận</p>
                                        @else
                                            <div class="row">
                                                <div class="col-12 col-lg-5">
                                                    <button id="checkStatusOrder" data-url="{{ route('statusOrder', $getOrder->tracking_id) }}" type="button" class="btn btn-primary">Kiểm tra trạng thái đơn hàng</button>
                                                </div>
                                                <div class="col-12 col-lg-7" id="orderStatusMessage">
                                                    <i id="loader_status_order" class="fa-duotone fa-solid fa-loader fa-spin-pulse d-none"></i>
                                                </div>
                                            </div>
                                        @endif
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                @php
                                    $address = json_decode($getOrder->order_address);
                                @endphp
                                <div class="col-12 col-md-8 mt-2">
                                    <div class="pt-2">
                                        <h5>Thông tin người nhận</h5>
                                        <p class="text-muted mb-0 mt-3"><span class="fw-bold">Khách hàng: </span>
                                            {{ $getOrder->order_name }}</p>
                                        <p class="text-muted mb-0"><span class="fw-bold">Số điện thoại: </span>
                                            {{ $getOrder->order_phone }}</p>
                                        <p class="text-muted mb-0"><span class="fw-bold">Địa chỉ: </span>
                                            {{ ($address->address . ', ' ?? '') . $address->ward . ', ' . $address->district . ', ' . $address->province }}
                                        </p>
                                        @if ($getOrder->payment_method == 0)
                                            <p class="text-muted mb-0">Thanh toán khi nhận hàng (COD)</p>
                                        @elseif($getOrder->payment_method == 1)
                                            <p class="text-muted mb-0">Thanh toán qua VNPAY</p>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 mt-2">
                                    <div class="pt-2">
                                        <h5>Thông tin đơn hàng</h5>
                                        <p class="text-muted mb-0  mt-3"><span class="fw-bold">Tổng cộng:
                                            </span>{{ number_format($getOrder->total, 0, '', '.') }}VNĐ</p>
                                        @isset($getCoupon)
                                            <p class="text-muted mb-0"><span class="fw-bold">Giảm giá: </span>
                                                {{ $getCoupon->precent_amount }}
                                                {{ $getCoupon->coupon_type == 'precent' ? '%' : 'VND' }}
                                            </p>
                                        @endisset
                                        <p class="text-muted mb-0"><span class="fw-bold">Phí giao hàng: </span>
                                            @isset($getOrder->ship_money)
                                                +{{ number_format($getOrder->ship_money, 0, ',', '.') }}
                                            @endisset
                                            VNĐ
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer border-0 px-4 py-5"
                        style="background-color: #1A2130; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                        <h5 class="d-flex align-items-center justify-content-end text-white text-uppercase mb-0">TỔNG
                            SỐ
                            CHI TRẢ: <span
                                class="h2 mb-0 ms-2">{{ number_format($getOrder->total + $getOrder->ship_money, 0, '', '.') }}
                                VNĐ</span></h5>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
@push('ajax')
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script> --}}
    <script>
        $(document).ready( function () {
            $('body').off('click', '#checkStatusOrder').one('click', '#checkStatusOrder', function () {
                $('#loader_status_order').removeClass('d-none')
                var url = $(this).attr('data-url')
                var formattedDate = new Date("yourUnformattedOriginalDate");
               $.get(url)
                .done(function(data) {
                    var boxStatus = $('#orderStatusMessage').empty();
                    if(data.status == true) {
                        // var formattedTime = moment(data.modified, "YYYY-MM-DD HH:mm:ss").format('DD-MM-YYY');
                        boxStatus.append(`
                            <p class="text-muted mb-0"><span class="fw-bold">Trạng thái đơn hàng: </span>${data.status_text} - ${data.modified}</p>
                            <p class="text-muted mb-0"><span class="fw-bold">Thời gian giao hàng dự kiến: </span>${ data.deliver_date }</p>
                            `)
                    }else {
                        console.error('Đã có lỗi xảy ra vui lòng thử lại sau');
                    }
                })
                .fail(function(xhr, error) {
                    console.error(xhr);
                })
            })
        })
    </script>
@endpush
