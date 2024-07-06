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
                <h1 class="fs-4">#Đơn hàng của <em>{{ \Auth::user()->name}}</em></h1>
                <div class="page account-page customer-info-page mt-3">
                    <table class="table align-middle mb-0 bg-white table-striped justify-content-center">
                        <thead class="bg-light">
                            <tr class="table-dark">
                                <th>Mã ĐH</th>
                                <th>Thông tin người nhận</th>
                                <th>Phương thanh toán</th>
                                <th>Ghi chú</th>
                                <th>Trạng thái</th>
                                <th>Tổng tiền</th>
                                <th>Chi tiết</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($getOrders as $order)
                                <tr>
                                    <td>
                                        <p class="fw-bold mb1">#{{ $order->id }}</p>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="ms-3">
                                                <p class="fw-bold mb-1">{{ $order->order_name }}</p>
                                                <p style="font-size: 12px" class="text-muted mb-0 order_info">SĐT:
                                                    {{ $order->order_phone }}</p>
                                                <p style="font-size: 12px" class="text-muted mb-0 order_info">ĐC:
                                                    {{ $order->order_address }}
                                                    {{ $order->order_ward }}, {{ $order->order_district }},
                                                    {{ $order->order_province }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        @if ($order->payment_status == 0)
                                            <p class="fw-normal mb-1">Thanh toán khi nhận hàng</p>
                                        @elseif ($order->payment_status == 1)
                                            <p class="fw-normal mb-1">Thanh toán qua ngân hàng</p>
                                            <p class="text-success" style="font-size: 12px"><em>Đã thanh toán</em></p>
                                        @endif
                                    </td>
                                    <td>
                                        <p class="fw-normal mb-1">{{ $order->user_note }}</p>
                                    </td>
                                    <td>
                                        @if ($order->order_status == 0)
                                            <strong>Chờ xác nhận</strong>
                                            <div class="action-cancel">
                                                <input type="hidden" value="{{ $order->id }}" name="order_id">
                                                <button id="btn-cancel-order" type="button"
                                                    data-url="{{ route('order.update', $order->id) }}"
                                                    class="btn btn-outline-danger btn-sm">Hủy đơn hàng</button>
                                            </div>
                                        @elseif ($order->order_status == 1)
                                            <strong class="">Đang vận chuyển</strong>
                                        @elseif ($order->order_status == 2)
                                            <strong class="text-success">Đã hoàn thành</strong>
                                        @elseif ($order->order_status == 3)
                                            <strong class="text-danger">Đã Hủy</strong>
                                        @endif
                                        <p class="pt-2" style="font-size: 10px"><em>{{ $order->created_at }}</em></p>
                                    </td>
                                    <td><strong>{{ number_format($order->total, 0, '', '.') }} VNĐ</strong></td>
                                    <td>
                                        <a href="{{ route('order.show', $order->id) }}" class="btn btn-primary btn-rounded px-3 py-1">Xem</a>
                                    </td>
                                </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
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
