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
    </style>
@endsection

@section('content')
    <section class="h-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <h1 class="fs-4">#Đơn hàng của <em>{{ \Auth::user()->name }}</em></h1>
                <div class="page account-page customer-info-page mt-3">
                    <table class="table align-middle mb-0 bg-white table-striped justify-content-center">
                        <thead class="bg-light">
                            <tr class="table-dark">
                                <th>Mã ĐH</th>
                                {{-- <th>Thông tin người nhận</th> --}}
                                <th>Phương thức thanh toán</th>
                                <th>Vận chuyển</th>
                                <th>Trạng thái</th>
                                <th>Tổng tiền</th>
                                <th>Chi tiết</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($getOrders as $order)
                                <tr>
                                    <td>
                                        @if($order-> $)
                                        <p class="fw-bold mb1"></p>
                                    </td>
                                    {{-- <td>
                                        <div class="d-flex align-items-center">
                                            <div class="ms-3">
                                                <p class="fw-bold mb-1">Tên: {{ $order->order_name }}</p>
                                                <p style="font-size: 12px" class="text-muted mb-0 order_info">SĐT:
                                                    {{ $order->order_phone }} - Email: {{ $order->order_email }}</p>
                                                <p style="font-size: 12px" class="text-muted mb-0 order_info">Địa chỉ:
                                                    {{ $order->order_address }}
                                                    {{ $order->order_ward }}, {{ $order->order_district }},
                                                    {{ $order->order_province }}</p>
                                            </div>
                                        </div>
                                    </td> --}}
                                    <td>
                                        @if ($order->payment_method == 0)
                                            <p class="fw-normal mb-1">Thanh toán khi nhận hàng</p>
                                        @elseif ($order->payment_method == 1)
                                            <p class="fw-normal mb-1">Thanh toán qua ngân hàng</p>
                                            <p class="fw-normal mb-1">
                                                <img src="{{ asset('uploads/vnpay.png') }}" alt="" width="60px"
                                                    height="13px">
                                            </p>
                                        @endif
                                        @if ($order->payment_method == 0 && $order->payment_status == 0)
                                            <p class="m-0 badge text-bg-warning"><em>Chưa thanh toán</em></p>
                                        @elseif($order->payment_method == 0 && $order->payment_status == 1)
                                            <p class="m-0 badge text-bg-success"><em>Đã thanh toán</em></p>
                                        @endif

                                        @if ($order->payment_method == 1 && $order->payment_status == 0)
                                            <p class="m-0 badge text-bg-warning"><em>Chưa thanh toán</em></p>
                                            <form action="{{ route('retry-payment') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="order_id" value="{{ $order->id }}">
                                                <button
                                                    class="text-white btn btn-dark btn-sm shadow-lg fw-bold rounded-3 mt-1">Thanh
                                                    toán</button>
                                            </form>
                                        @elseif($order->payment_method == 1 && $order->payment_status == 1)
                                            @if (
                                                $order->order_status == -1 &&
                                                    $order->payment_method == 1 &&
                                                    $order->payment_status == 1 &&
                                                    $order->vnp_transaction_id !== null)
                                                @if (
                                                    $order->vnp_refund_status == 'Pending' ||
                                                        $order->vnp_refund_status == 'Processing' ||
                                                        $order->vnp_refund_status == 'Refunded' ||
                                                        $order->vnp_refund_status == 'Refund_Failed')
                                                    <p class="m-0 badge text-bg-success"><em
                                                            style="text-decoration: line-through #dc3545; text-decoration-thickness: 2px;">Đã
                                                            thanh toán</em></p>
                                                @endif
                                            @else
                                                <p class="m-0 badge text-bg-success"><em>Đã thanh toán</em></p>
                                            @endif
                                        @elseif($order->payment_method == 1 && $order->payment_status == 2)
                                            <p class="m-0 badge text-bg-danger"><em>Thanh toán thất bại</em></p>
                                            <form action="{{ route('retry-payment') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="order_id" value="{{ $order->id }}">
                                                <button
                                                    class="text-white btn btn-dark btn-sm shadow-lg fw-bold rounded-3 mt-1">Thanh
                                                    toán</button>
                                            </form>
                                        @endif
                                        @if (
                                            $order->order_status == -1 &&
                                                $order->payment_method == 1 &&
                                                $order->payment_status == 1 &&
                                                $order->vnp_transaction_id !== null)
                                            @if ($order->vnp_refund_status == 'Pending')
                                                <p class="m-0 badge text-bg-secondary"><em>Chờ phê duyệt hoàn tiền</em></p>
                                            @elseif($order->vnp_refund_status == 'Processing')
                                                <p class="m-0 badge text-bg-secondary"><em>Đang xử lý hoàn tiền</em></p>
                                            @elseif($order->vnp_refund_status == 'Refunded')
                                                <p class="m-0 badge text-bg-secondary"><em>Đã hoàn tiền</em></p>
                                            @elseif($order->vnp_refund_status == 'Refund_Failed')
                                                <p class="m-0 badge text-bg-secondary"><em>Hoàn tiền không thành công</em>
                                                </p>
                                            @endif
                                        @endif
                                    </td>
                                    <td>
                                        @if ($order->shipping_method == 0)
                                            <p class="fw-normal m-0">Nhận tại cửa hàng</p>
                                        @elseif($order->shipping_method == 1)
                                            <p class="fw-normal mb-1"><img width="50px"
                                                    src="https://cdn.haitrieu.com/wp-content/uploads/2022/05/Logo-GHTK-H.png"
                                                    alt="ghtk"></p>
                                        @endif
                                    </td>
                                    <td>
                                        {{-- Nhận tại cửa hàng --}}
                                        @if ($order->order_status == -1)
                                            <strong class="text-danger">Đã hủy</strong>
                                        @elseif ($order->shipping_method == 0)
                                            @if ($order->order_status == 0)
                                                <strong>Đang xử lý</strong>
                                            @elseif ($order->order_status == 91)
                                                <strong class="">Đã tiếp nhận</strong>
                                            @elseif ($order->order_status == 92)
                                                <strong class="text-success">Đã hoàn thành</strong>
                                            @endif
                                            @if ($order->order_status == 0 || $order->order_status == 91)
                                                <div class="action-cancel">
                                                    <input type="hidden" value="{{ $order->id }}" name="order_id">
                                                    <button id="btn-cancel-order" type="button"
                                                        data-url="{{ route('order.update', $order->id) }}"
                                                        class="btn btn-outline-danger btn-sm">Hủy đơn hàng</button>
                                                </div>
                                            @endif
                                            <p class="pt-2" style="font-size: 10px"><em>{{ $order->created_at }}</em></p>
                                            {{-- GHTK --}}
                                        @elseif($order->shipping_method == 1)
                                            @if ($order->order_status == 0)
                                                <strong>Chờ xác nhận</strong>
                                            @endif
                                            @if ($order->order_status == 0 || $order->order_status == 1 || $order->order_status == 2)
                                                <div class="action-cancel">
                                                    <input type="hidden" value="{{ $order->id }}" name="order_id">
                                                    <button id="btn-cancel-order" type="button"
                                                        data-url="{{ route('order.update', $order->id) }}"
                                                        class="btn btn-outline-danger btn-sm">Hủy đơn hàng</button>
                                                </div>
                                            @endif
                                        @endif
                                    </td>
                                    <td><strong>{{ number_format($order->total + $order->ship_money, 0, '', '.') }}
                                            VNĐ</strong></td>
                                    <td>
                                        <a href="{{ route('order.show', $order->id) }}"
                                            class="btn btn-primary btn-rounded px-3 py-1">Xem</a>
                                    </td>
                                </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                    {{ $getOrders->links() }}
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
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    cancelButtonText: "Hủy",
                    confirmButtonText: "Tôi đồng ý hủy!"
                }).then((result) => {
                    if (result.isConfirmed) {
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
