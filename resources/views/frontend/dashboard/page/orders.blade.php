@extends('frontend.layouts.master')
@section('title', 'Đơn hàng của bạn')
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

        .order-list {
            display: flex;
            flex-direction: column;
        }

        .order-item {
            display: flex;
            flex-direction: column;
            padding: 1rem;
            margin-bottom: 1rem;
        }

        .order-header {
            border-bottom: 1px solid #ddd;
            padding-bottom: 0.5rem;
        }

        .order-body {
            padding-top: 1rem;
        }

        .payment-logo,
        .shipping-logo {
            width: 80px;
            height: auto;
        }

        .badge {
            display: inline-block;
            padding: .4em .6em;
            font-size: 80%;
            font-weight: 600;
            line-height: 1.1;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: .375rem;
        }

        .text-bg-warning {
            color: #856404;
            background-color: #fff3cd;
        }

        .text-bg-success {
            color: #155724;
            background-color: #d4edda;
        }

        .text-bg-danger {
            color: #721c24;
            background-color: #f8d7da;
        }

        .text-bg-secondary {
            color: #383d41;
            background-color: #e2e3e5;
        }

        .btn-rounded {
            border-radius: 50px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-outline-danger {
            border-color: #dc3545;
            color: #dc3545;
        }
    </style>
@endsection

@section('content')
    <section class="h-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12">
                    <div class="card bg-body-tertiary shadow rounded-0 border border-0">
                        <div class="card-body p-4">
                            <h3 class="card-title fw-bold mb-4">#Đơn hàng của <b
                                    class="text-primary">{{ \Auth::user()->name }}</b></h3>
                            <div class="page account-page customer-info-page">
                                @forelse ($getOrders as $order)
                                    <div class="order-item bg-white mb-3 p-3 rounded-0 shadow-sm border border-1">

                                        {{-- Mã đơn hàng + Giá tiền --}}
                                        <div class="order-header d-flex justify-content-between align-items-center">
                                            <div class="order-code">
                                                <h5 class="fw-bold text-dark">#
                                                    {{ $order->order_code }}
                                                </h5>
                                            </div>
                                            <div class="order-total">
                                                <h5 class="fw-bold text-dark">
                                                    {{ number_format($order->total + $order->ship_money, 0, '', '.') }} VNĐ
                                                </h5>

                                            </div>
                                        </div>

                                        <div class="order-body">
                                            <div class="row">

                                                {{-- Phương thức thanh toán --}}
                                                <div class="col-12 col-lg-4 mb-2">
                                                    <p class="mb-1 text-muted"><strong class="text-dark">Phương thức thanh
                                                            toán:</strong>
                                                        @if ($order->payment_method == 0)
                                                            <strong class="small">Thanh toán khi nhận hàng</strong>
                                                        @elseif ($order->payment_method == 1)
                                                            <span class="small"><img src="{{ asset('uploads/vnpay.png') }}"
                                                                    alt="VNPAY" class="payment-logo"
                                                                    style="margin-top: -5px;"></span>
                                                        @endif
                                                    </p>
                                                    @if ($order->payment_status == 0)
                                                        <p class="badge text-bg-warning mt-1"><em>Chưa thanh toán</em></p>
                                                    @elseif($order->payment_status == 1)
                                                        <p class="badge text-bg-success mt-1"><em>Đã thanh toán</em></p>
                                                    @elseif($order->payment_status == 2)
                                                        <p class="badge text-bg-danger mt-1"><em>Thanh toán thất bại</em>
                                                        </p>
                                                    @endif
                                                    @if ($order->payment_method == 1 && $order->payment_status == 0)
                                                        <form action="{{ route('retry-payment') }}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="order_id"
                                                                value="{{ $order->id }}">
                                                            <button
                                                                class="text-white btn btn-dark btn-sm shadow-lg fw-bold rounded-3"
                                                                style="margin-top: -5px;">Thanh toán</button>
                                                        </form>
                                                    @elseif($order->payment_method == 1 && $order->payment_status == 2)
                                                        <form action="{{ route('retry-payment') }}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="order_id"
                                                                value="{{ $order->id }}">
                                                            <button
                                                                class="text-white btn btn-dark btn-sm shadow-lg fw-bold rounded-3"
                                                                style="margin-top: -5px;">Thanh toán</button>
                                                        </form>
                                                    @endif
                                                    @if (
                                                        $order->order_status == -1 &&
                                                            $order->payment_method == 1 &&
                                                            $order->payment_status == 1 &&
                                                            $order->vnp_transaction_id !== null)
                                                        @if ($order->vnp_refund_status == 'Pending')
                                                            <p class="badge text-bg-secondary"><em>Chờ phê duyệt hoàn
                                                                    tiền</em></p>
                                                        @elseif($order->vnp_refund_status == 'Processing')
                                                            <p class="badge text-bg-secondary"><em>Đang xử lý hoàn tiền</em>
                                                            </p>
                                                        @elseif($order->vnp_refund_status == 'Refunded')
                                                            <p class="badge text-bg-secondary"><em>Đã hoàn tiền</em></p>
                                                        @elseif($order->vnp_refund_status == 'Refund_Failed')
                                                            <p class="badge text-bg-secondary"><em>Hoàn tiền không thành
                                                                    công</em></p>
                                                        @endif
                                                    @endif
                                                </div>

                                                {{-- Phương thức vận chuyển --}}
                                                <div class="col-12 col-lg-3 mb-2">
                                                    <p class="mb-1 text-dark"><strong>Vận chuyển:</strong>
                                                        @if ($order->shipping_method == 0)
                                                            <span class="small">Nhận tại cửa hàng</span>
                                                        @elseif($order->shipping_method == 1)
                                                            <span class="small"><img
                                                                    src="https://cdn.haitrieu.com/wp-content/uploads/2022/05/Logo-GHTK-H.png"
                                                                    alt="GHTK" class="shipping-logo"
                                                                    style="margin-top: -5px"></span>
                                                            <p>{{ $order->tracking_id ? 'Mã Vận đơn: ' . $order->tracking_id : '' }}
                                                            </p>
                                                        @endif
                                                    </p>
                                                </div>

                                                {{-- Trạng thái đơn hàng --}}
                                                <div class="col-12 col-lg-3 mb-2 box_status">
                                                    <p class="mb-1 text-dark"><strong>Trạng thái:</strong>
                                                        @if ($order->order_status == -1)
                                                            <strong class="text-danger small">Đã hủy</strong>
                                                        @elseif(in_array($order->order_status, [92, 5, 6, 45]))
                                                            <strong class="text-success small">Đã giao thành công</strong>
                                                        @elseif ($order->shipping_method == 0)
                                                            @if ($order->order_status == 0)
                                                                <strong class="small">Đang xử lý</strong>
                                                            @elseif ($order->order_status == 91)
                                                                <strong class="small">Đã tiếp nhận</strong>
                                                            @elseif ($order->order_status == 92)
                                                                <strong class="text-success small">Đã hoàn thành</strong>
                                                            @endif
                                                        @elseif($order->shipping_method == 1)
                                                            @if ($order->order_status == 0)
                                                                <strong class="small text-warning">Chờ xác nhận</strong>
                                                            @elseif($order->order_status > 0)
                                                                <strong class="small">Đang vận chuyển</strong>
                                                            @endif
                                                        @endif
                                                        @if ($order->payment_method == 1 && $order->vnp_transaction_id == null)
                                                        <div>
                                                            <strong class="text-danger">Vui lòng thanh toán</strong>
                                                        </div>
                                                        @endif
                                                    </p>
                                                </div>

                                                {{-- Detail --}}
                                                <div class="col-12 col-lg-2 d-flex flex-column align-items-start">
                                                    <a href="{{ route('order.show', $order->id) }}"
                                                        class="btn btn-primary btn-sm w-100">Xem chi tiết</a>
                                                    @if ($order->order_status == 0)
                                                        <button id="btn-cancel-order" type="button"
                                                            data-url="{{ route('order.update', $order->id) }}"
                                                            class="btn btn-outline-danger btn-sm mt-2">Hủy đơn hàng</button>
                                                    @elseif ($order->order_status == 1 || $order->order_status == 2)
                                                        <button id="cancel_ghtk" type="button"
                                                            data-url="{{ route('ghtk.cancel-order', $order->tracking_id) }}"
                                                            class="btn btn-outline-danger btn-sm mt-2">Hủy đơn hàng</button>
                                                    @endif
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                @empty
                                    {{-- Đơn hàng rỗng --}}
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="alert alert-info" role="alert">
                                                Không có đơn hàng nào.
                                            </div>
                                        </div>
                                    </div>
                                @endforelse
                                {{-- Phân trang --}}
                                <div class="row mt-4">
                                    <div class="col-12">
                                        {{ $getOrders->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('ajax')
    <script>
        $(document).ready(() => {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('body').on('click', '#btn-cancel-order', function(e) {
                e.preventDefault();
                url = $(this).attr('data-url');
                Swal.fire({
                    title: "Bạn có chắc hủy đơn hàng!",
                    text: "Bạn sẽ không thể thay đổi nữa sau đó!",
                    icon: "warning",
                    showCancelButton: true,
                    cancelButtonText: "Hủy",
                    confirmButtonText: "Tôi đồng ý hủy!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            title: 'Vui lòng chờ...',
                            html: 'Đang xử lý...',
                            allowOutsideClick: false,
                            allowEscapeKey: false,
                            didOpen: () => {
                                Swal.showLoading()
                            }
                        });
                        $.ajax({
                            type: 'PATCH',
                            url: url,
                            success: function(data) {
                                if (data.status == true) {
                                    window.location.reload();
                                    Swal.fire({
                                        title: "Đã hủy đơn hàng",
                                        text: data.message,
                                        icon: "success"
                                    });
                                } else {
                                    Swal.fire({
                                        title: "Hủy đơn hàng thất bại",
                                        text: data.message,
                                        icon: "error"
                                    });
                                }
                            },
                            error: function(error) {
                                alert('Có lỗi xảy ra!');
                            }
                        })
                    }
                });
            })
            $('body').off('click', '#cancel_ghtk').on('click', '#cancel_ghtk', function() {
                Swal.fire({
                    title: "Bạn có chắc chắn hủy?",
                    text: "Thực hiện lệnh hủy đơn hàng đến ĐVVC!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Đồng ý",
                    cancelButtonText: "Hủy",
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            title: 'Vui lòng chờ...',
                            html: 'Đang xử lý...',
                            allowOutsideClick: false,
                            allowEscapeKey: false,
                            didOpen: () => {
                                Swal.showLoading()
                            }
                        });
                        $.ajax({
                            type: 'post',
                            url: $(this).attr('data-url'),
                            success: function(res) {
                                if (res.success == true) {
                                    Swal.fire({
                                        title: "Yêu cầu thành công!",
                                        text: res.message,
                                        icon: "success"
                                    });
                                    window.location.reload()
                                }
                                //Hủy thất bại
                                if (res.success == false) {
                                    Swal.fire({
                                        title: "Yêu cầu thất bại!",
                                        text: res.message + '. Mã lỗi: ' + res
                                            .error_code + '. Log: ' + res
                                            .log_id,
                                        icon: "error"
                                    });
                                }
                            },
                            error: function(xhr, status, error) {
                                Swal.close()
                                const response = JSON.parse(xhr.responseText);
                                alert("Lỗi: " + response.message);
                            }
                        })
                    }
                });
            })
        })
    </script>
@endpush
