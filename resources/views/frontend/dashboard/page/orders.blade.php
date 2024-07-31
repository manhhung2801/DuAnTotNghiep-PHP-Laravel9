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

    .payment-logo, .shipping-logo {
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
                        <h3 class="card-title fw-bold mb-4">#Đơn hàng của <b class="text-primary">{{ \Auth::user()->name }}</b></h3>
                        <div class="page account-page customer-info-page">
                            @forelse ($getOrders as $order)
                                <div class="order-item bg-white mb-3 p-3 rounded-0 shadow-sm border border-1">
                                    <div class="order-header d-flex justify-content-between align-items-center">
                                        <div class="order-code">
                                            <h5 class="fw-bold text-dark">Mã ĐH:
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
                                            <div class="col-12 col-lg-4 mb-2">
                                                <p class="mb-1 text-muted"><strong class="text-dark">Phương thức thanh toán:</strong>
                                                    @if ($order->payment_method == 0)
                                                        <strong class="small">Thanh toán khi nhận hàng</strong>
                                                    @elseif ($order->payment_method == 1)
                                                    <span class="small"><img src="{{ asset('uploads/vnpay.png') }}" alt="VNPAY" class="payment-logo" style="margin-top: -5px;"></span>
                                                    @endif
                                                </p>
                                                @if ($order->payment_status == 0)
                                                <p class="badge text-bg-warning mt-1"><em>Chưa thanh toán</em></p>
                                                @elseif($order->payment_status == 1)
                                                <p class="badge text-bg-success mt-1"><em>Đã thanh toán</em></p>
                                                @elseif($order->payment_status == 2)
                                                <p class="badge text-bg-danger mt-1"><em>Thanh toán thất bại</em></p>
                                                @endif
                                                @if ($order->payment_method == 1 && $order->payment_status == 0)
                                                <form action="{{ route('retry-payment') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="order_id" value="{{ $order->id }}">
                                                    <button class="text-white btn btn-dark btn-sm shadow-lg fw-bold rounded-3" style="margin-top: -5px;">Thanh toán</button>
                                                </form>
                                                @elseif($order->payment_method == 1 && $order->payment_status == 2)
                                                <form action="{{ route('retry-payment') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="order_id" value="{{ $order->id }}">
                                                    <button class="text-white btn btn-dark btn-sm shadow-lg fw-bold rounded-3" style="margin-top: -5px;">Thanh toán</button>
                                                </form>
                                                @endif
                                                @if ($order->order_status == -1 && $order->payment_method == 1 && $order->payment_status == 1 && $order->vnp_transaction_id !== null)
                                                @if ($order->vnp_refund_status == 'Pending')
                                                <p class="badge text-bg-secondary"><em>Chờ phê duyệt hoàn tiền</em></p>
                                                @elseif($order->vnp_refund_status == 'Processing')
                                                <p class="badge text-bg-secondary"><em>Đang xử lý hoàn tiền</em></p>
                                                @elseif($order->vnp_refund_status == 'Refunded')
                                                <p class="badge text-bg-secondary"><em>Đã hoàn tiền</em></p>
                                                @elseif($order->vnp_refund_status == 'Refund_Failed')
                                                <p class="badge text-bg-secondary"><em>Hoàn tiền không thành công</em></p>
                                                @endif
                                                @endif
                                            </div>
                                            <div class="col-12 col-lg-3 mb-2">
                                                <p class="mb-1 text-dark"><strong>Vận chuyển:</strong>
                                                    @if ($order->shipping_method == 0)
                                                    <span class="small">Nhận tại cửa hàng</span>
                                                    @elseif($order->shipping_method == 1)
                                                    <span class="small"><img src="https://cdn.haitrieu.com/wp-content/uploads/2022/05/Logo-GHTK-H.png" alt="GHTK" class="shipping-logo" style="margin-top: -5px"> <span>{{$order->tracking_id ? "-". $order->tracking_id:''}}</span></span>
                                                    @endif
                                                </p>
                                            </div>
                                            <div class="col-12 col-lg-3 mb-2">
                                                <p class="mb-1 text-dark"><strong>Trạng thái:</strong>
                                                @if ($order->order_status == -1)
                                                <strong class="text-danger small">Đã hủy</strong>
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
                                                <strong class="small">Đã tiếp nhận</strong>
                                                @endif
                                                @endif
                                                </p>
                                            </div>
                                            <div class="col-12 col-lg-2 d-flex flex-column align-items-start">
                                                <a href="{{ route('order.show', $order->id) }}" class="btn btn-primary btn-sm w-100">Xem chi tiết</a>
                                                @if ($order->order_status == 0 || $order->order_status == 1 || $order->order_status == 2)
                                                <button id="btn-cancel-order" type="button" data-url="{{ route('order.update', $order->id) }}" class="btn btn-outline-danger btn-sm mt-2">Hủy đơn hàng</button>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-info" role="alert">
                                        Không có đơn hàng nào.
                                    </div>
                                </div>
                            </div>
                            @endforelse

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
{{--    <section class="h-100 gradient-custom">--}}
{{--        <div class="container py-5 h-100">--}}
{{--            <div class="row d-flex justify-content-center align-items-center h-100">--}}
{{--                <h1 class="fs-4">#Đơn hàng của <em>{{ \Auth::user()->name }}</em></h1>--}}
{{--                <div class="page account-page customer-info-page mt-3">--}}
{{--                    <table class="table align-middle mb-0 bg-white table-striped justify-content-center">--}}
{{--                        <thead class="bg-light">--}}
{{--                            <tr class="table-dark">--}}
{{--                                <th>Mã ĐH</th>--}}
{{--                                 <th>Thông tin người nhận</th>--}}
{{--                                <th class="d-none d-lg-block">Phương thức thanh toán</th>--}}
{{--                                <th >Vận chuyển</th>--}}
{{--                                <th>Trạng thái</th>--}}
{{--                                <th>Tổng tiền</th>--}}
{{--                                <th>Chi tiết</th>--}}
{{--                            </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}
{{--                            @forelse ($getOrders as $order)--}}
{{--                                <tr>--}}
{{--                                    <td>--}}
{{--                                        @if ($order->payment_method == 0)--}}
{{--                                            <p class="fw-bold mb1">{{ $order->order_code }}</p>--}}
{{--                                        @elseif($order->payment_method == 1)--}}
{{--                                            <p class="fw-bold mb1">{{ $order->vnp_order_code }}</p>--}}
{{--                                        @endif--}}
{{--                                    </td>--}}
{{--                                     <td>--}}
{{--                                        <div class="d-flex align-items-center">--}}
{{--                                            <div class="ms-3">--}}
{{--                                                <p class="fw-bold mb-1">Tên: {{ $order->order_name }}</p>--}}
{{--                                                <p style="font-size: 12px" class="text-muted mb-0 order_info">SĐT:--}}
{{--                                                    {{ $order->order_phone }} - Email: {{ $order->order_email }}</p>--}}
{{--                                                <p style="font-size: 12px" class="text-muted mb-0 order_info">Địa chỉ:--}}
{{--                                                    {{ $order->order_address }}--}}
{{--                                                    {{ $order->order_ward }}, {{ $order->order_district }},--}}
{{--                                                    {{ $order->order_province }}</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td class="d-none d-lg-block">--}}
{{--                                        @if ($order->payment_method == 0)--}}
{{--                                            <p class="fw-normal">Thanh toán khi nhận hàng</p>--}}
{{--                                        @elseif ($order->payment_method == 1)--}}
{{--                                             <p class="fw-normal mb-1">Thanh toán qua ngân hàng</p>--}}
{{--                                            <p class="fw-normal">--}}
{{--                                                <img src="{{ asset('uploads/vnpay.png') }}" alt="" width="60px"--}}
{{--                                                    height="13px">--}}
{{--                                            </p>--}}
{{--                                        @endif--}}
{{--                                        @if ($order->payment_method == 0 && $order->payment_status == 0)--}}
{{--                                            <p class="m-0 badge text-bg-warning"><em>Chưa thanh toán</em></p>--}}
{{--                                        @elseif($order->payment_method == 0 && $order->payment_status == 1)--}}
{{--                                            <p class="m-0 badge text-bg-success"><em>Đã thanh toán</em></p>--}}
{{--                                        @endif--}}

{{--                                        @if ($order->payment_method == 1 && $order->payment_status == 0)--}}
{{--                                            <p class="m-0 badge text-bg-warning"><em>Chưa thanh toán</em></p>--}}
{{--                                            <form action="{{ route('retry-payment') }}" method="POST">--}}
{{--                                                @csrf--}}
{{--                                                <input type="hidden" name="order_id" value="{{ $order->id }}">--}}
{{--                                                <button--}}
{{--                                                    class="text-white btn btn-dark btn-sm shadow-lg fw-bold rounded-3 mt-1">Thanh--}}
{{--                                                    toán</button>--}}
{{--                                            </form>--}}
{{--                                        @elseif($order->payment_method == 1 && $order->payment_status == 1)--}}
{{--                                            @if (--}}
{{--                                                $order->order_status == -1 &&--}}
{{--                                                    $order->payment_method == 1 &&--}}
{{--                                                    $order->payment_status == 1 &&--}}
{{--                                                    $order->vnp_transaction_id !== null)--}}
{{--                                                @if (--}}
{{--                                                    $order->vnp_refund_status == 'Pending' ||--}}
{{--                                                        $order->vnp_refund_status == 'Processing' ||--}}
{{--                                                        $order->vnp_refund_status == 'Refund_Failed')--}}
{{--                                                    <p class="m-0 badge text-bg-success"><em--}}
{{--                                                            style="text-decoration: line-through #dc3545; text-decoration-thickness: 2px;">Đã--}}
{{--                                                            thanh toán</em></p>--}}
{{--                                                @endif--}}
{{--                                            @else--}}
{{--                                                <p class="m-0 badge text-bg-success"><em>Đã thanh toán</em></p>--}}
{{--                                            @endif--}}
{{--                                        @elseif($order->payment_method == 1 && $order->payment_status == 2)--}}
{{--                                            <p class="m-0 badge text-bg-danger"><em>Thanh toán thất bại</em></p>--}}
{{--                                            <form action="{{ route('retry-payment') }}" method="POST">--}}
{{--                                                @csrf--}}
{{--                                                <input type="hidden" name="order_id" value="{{ $order->id }}">--}}
{{--                                                <button--}}
{{--                                                    class="text-white btn btn-dark btn-sm shadow-lg fw-bold rounded-3 mt-1">Thanh--}}
{{--                                                    toán</button>--}}
{{--                                            </form>--}}
{{--                                        @endif--}}
{{--                                        @if (--}}
{{--                                            $order->order_status == -1 &&--}}
{{--                                                $order->payment_method == 1 &&--}}
{{--                                                $order->payment_status == 1 &&--}}
{{--                                                $order->vnp_transaction_id !== null)--}}
{{--                                            @if ($order->vnp_refund_status == 'Pending')--}}
{{--                                                <p class="m-0 badge text-bg-secondary"><em>Chờ phê duyệt hoàn tiền</em></p>--}}
{{--                                            @elseif($order->vnp_refund_status == 'Processing')--}}
{{--                                                <p class="m-0 badge text-bg-secondary"><em>Đang xử lý hoàn tiền</em></p>--}}
{{--                                            @elseif($order->vnp_refund_status == 'Refunded')--}}
{{--                                                <p class="m-0 badge text-bg-secondary"><em>Đã hoàn tiền</em></p>--}}
{{--                                            @elseif($order->vnp_refund_status == 'Refund_Failed')--}}
{{--                                                <p class="m-0 badge text-bg-secondary"><em>Hoàn tiền không thành công</em>--}}
{{--                                                </p>--}}
{{--                                            @endif--}}
{{--                                        @endif--}}
{{--                                    </td>--}}
{{--                                    <td >--}}
{{--                                        @if ($order->shipping_method == 0)--}}
{{--                                            <p class="fw-normal m-0">Nhận tại cửa hàng</p>--}}
{{--                                        @elseif($order->shipping_method == 1)--}}
{{--                                            <p class="fw-normal mb-1"><img width="50px"--}}
{{--                                                    src="https://cdn.haitrieu.com/wp-content/uploads/2022/05/Logo-GHTK-H.png"--}}
{{--                                                    alt="ghtk"> <span>{{$order->tracking_id ? "-". $order->tracking_id:''}}</span></p>--}}
{{--                                        @endif--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                         Nhận tại cửa hàng--}}
{{--                                        @if ($order->order_status == -1)--}}
{{--                                            <strong class="text-danger">Đã hủy</strong>--}}
{{--                                        @elseif ($order->shipping_method == 0)--}}
{{--                                            @if ($order->order_status == 0)--}}
{{--                                                <strong>Đang xử lý</strong>--}}
{{--                                            @elseif ($order->order_status == 91)--}}
{{--                                                <strong class="">Đã tiếp nhận</strong>--}}
{{--                                            @elseif ($order->order_status == 92)--}}
{{--                                                <strong class="text-success">Đã hoàn thành</strong>--}}
{{--                                            @endif--}}
{{--                                            @if ($order->order_status == 0 || $order->order_status == 91)--}}
{{--                                                <div class="action-cancel">--}}
{{--                                                    <input type="hidden" value="{{ $order->id }}" name="order_id">--}}
{{--                                                    <button id="btn-cancel-order" type="button"--}}
{{--                                                        data-url="{{ route('order.update', $order->id) }}"--}}
{{--                                                        class="btn btn-outline-danger btn-sm">Hủy đơn hàng</button>--}}
{{--                                                </div>--}}
{{--                                            @endif--}}
{{--                                            <p class="pt-2" style="font-size: 10px"><em>{{ $order->created_at }}</em></p>--}}
{{--                                             GHTK--}}
{{--                                        @elseif($order->shipping_method == 1)--}}
{{--                                            @if ($order->order_status == 0)--}}
{{--                                                <strong>Chờ xác nhận</strong>--}}
{{--                                            @endif--}}
{{--                                            @if ($order->order_status > 0)--}}
{{--                                                <strong>Đã tiếp nhận</strong>--}}
{{--                                            @endif--}}

{{--                                            @if ($order->order_status == 0 || $order->order_status == 1 || $order->order_status == 2)--}}
{{--                                                <div class="action-cancel">--}}
{{--                                                    <input type="hidden" value="{{ $order->id }}" name="order_id">--}}
{{--                                                    <button id="btn-cancel-order" type="button"--}}
{{--                                                        data-url="{{ route('order.update', $order->id) }}"--}}
{{--                                                        class="btn btn-outline-danger btn-sm">Hủy đơn hàng</button>--}}
{{--                                                </div>--}}
{{--                                            @endif--}}
{{--                                        @endif--}}
{{--                                    </td>--}}
{{--                                    <td><strong>{{ number_format($order->total + $order->ship_money, 0, '', '.') }}--}}
{{--                                            VNĐ</strong></td>--}}
{{--                                    <td>--}}
{{--                                        <a href="{{ route('order.show', $order->id) }}"--}}
{{--                                            class="btn btn-primary btn-rounded px-3 py-1">Xem</a>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                            @empty--}}
{{--                            @endforelse--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                    {{ $getOrders->links() }}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
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
        })
    </script>
@endpush
