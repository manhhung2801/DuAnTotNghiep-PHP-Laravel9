@extends('admin.layouts.master')

@section('title', 'Danh sách đơn hàng')

@section('content')

    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Đơn hàng</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Danh sách đơn hàng</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-header">
                <div class="action_start float-start d-flex">
                    <h6 class="mt-2 mb-0 text-uppercase float-start">Danh sách Đơn hàng</h6>
                    <div class="form-search ms-2">
                        <form action="" method="get">
                            <div class="input-group">
                                <input value="{{ Request::get('keyword') }}" type="text" name="keyword"
                                    class="form-control rounded-start-5 focus-ring focus-ring-light querySearch"
                                    placeholder="Tìm kiếm">
                                <button class="btn btn-outline-primary rounded-end-5 buttonSearch" type="submit"><i
                                        class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                        </form>
                    </div>
                    <a href="{{ route('admin.order.index') }}" class="me-2 btn btn-success ms-2"><i
                            class="fa-solid fa-rotate-left fs-6"></i> Làm mới</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered table-responsive" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Thông tin khách hàng</th>
                                <th>Tổng tiền</th>
                                <th>Phương thức thanh toán</th>
                                <th>Vận chuyển</th>
                                <th>Trạng thái ĐH</th>
                                <th>Ghi chú(người dùng)</th>
                                <th>Ghi chú(Admin)</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($getOrders as $order)
                                <tr>
                                    <td>#{{ $order->id }}</td>
                                    <td>
                                        <div class="info_customer_order">
                                            <div class="order_name">
                                                <strong>Tên KH: {{ $order->order_name }}</strong>
                                            </div>
                                            <div class="order_contact">
                                                <em>SĐT: {{ $order->order_phone }} - Email:
                                                    {{ $order->order_email }}</em>
                                            </div>
                                            <div class="order_address">
                                                <em>ĐC: {{ $order->order_address }} {{ $order->order_ward }},
                                                    {{ $order->order_dictrict }}, {{ $order->order_province }}</em>
                                            </div>
                                        </div>
                                    </td>
                                    <td><strong>{{ number_format($order->total) }} VNĐ</strong></td>
                                    <td>
                                        @if ($order->payment_method == 0)
                                            <p class="m-0">Thanh toán khi nhận hàng</p>
                                        @elseif($order->payment_method == 1)
                                            <p class="m-0">Thanh toán bằng ngân hàng</p>
                                        @endif
                                        @if ($order->payment_status == 0)
                                            <p class="m-0 badge text-bg-danger"><em>Chưa thanh toán</em></p>
                                        @elseif($order->payment_status == 1)
                                            <p class="m-0 badge text-bg-success"><em>Đã thanh toán</em></p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($order->shipping_method == 0)
                                            <p class="m-0">Nhận tại cữa hàng</p>
                                        @else
                                            <p class="m-0">Giao hàng tiết kiệm</p>
                                        @endif
                                    </td>
                                    <td>
                                        <select id="change-status-order"
                                            data-url="{{ route('admin.order.update', $order->id) }}" class="form-select"
                                            name="">
                                            <option value="0" {{ $order->order_status == 0 ? 'selected' : '' }}>Chờ
                                                duyệt</option>
                                            <option value="1" {{ $order->order_status == 1 ? 'selected' : '' }}>Đang
                                                vận chuyển</option>
                                            <option value="2" {{ $order->order_status == 2 ? 'selected' : '' }}>Hoàn
                                                thành</option>
                                            <option value="3" {{ $order->order_status == 3 ? 'selected' : '' }}>Đã hủy
                                            </option>
                                        </select>
                                    </td>
                                    <td>
                                        <textarea name="" id="">{{ $order->user_note }}</textarea>
                                    </td>
                                    <td>
                                        <textarea name="" id="">{{ $order->admin_note }}</textarea>
                                    </td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <button id="btn-show-order-detail" type="button"
                                            data-url="{{ route('admin.order.show', $order->id) }}" class="btn btn-primary"
                                            data-bs-toggle="modal" data-bs-target="#orderDetail">
                                            Xem thêm
                                        </button>
                                        @include('admin.order.partials.modalOrderDetail')
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="9">Không có đơn hàng</td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                    {{ $getOrders->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(() => {
            $('body').off('click', '#btn-show-order-detail').on('click', '#btn-show-order-detail', function() {
                var url = $(this).attr('data-url')
                var baseimg = "{{ asset('uploads/products/') }}";
                $.ajax({
                    url: url,
                    type: 'GET',
                    success: function(data) {
                        //lấy id table và xóa toàn bộ nội dung trong table
                        var table = $('#tbody_model_order')
                        table.empty();

                        data.getOrderDetail.forEach(product => {
                            var newRow = $('<tr>')
                            var infoCol = $('<td>').addClass(
                                'd-flex align-items-center')
                            var productCol = $('<div>')

                            var image = $('<img>').attr({
                                width: 60,
                                src: baseimg + '/' + product.product.image,
                                alt: 'abc',
                                class: 'me-2'
                            })
                            productCol.append(image)
                            infoCol.append(productCol)

                            var product_info = $('<div>')
                            var product_name = $('<div>').addClass('product_name_od')
                                .append(
                                    `<h6 class="fw-semibold">${product.product_name}<h6>`
                                )
                            product_info.append(product_name)
                            var product_variant = $('<div>').addClass('product_name_od')
                                .append(
                                    `<p style="font-size: 12px">Màu sắc :${product.variants}<p>`
                                )
                            product_info.append(product_variant)
                            infoCol.append(product_info)
                            newRow.append(infoCol)

                            var qtyCol = $('<td>')
                            qtyCol.append(`<strong>x${product.qty}</strong>`)
                            newRow.append(qtyCol)


                            var priceCol = $('<td>')
                            priceCol.append(`<strong>${product.price} VNĐ</strong>`)
                            newRow.append(priceCol)
                            table.append(newRow)

                        });
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                    }
                })
            });

            $('body').off('change', '#change-status-order').on('change', '#change-status-order', function() {
                var orderStatus = $(this).val();
                var url = $(this).attr('data-url')

                $.ajax({
                    type: 'PATCH',
                    url: url,
                    data: {
                        orderStatus: orderStatus
                    },
                    success: function(data) {
                        if (data.status == true) {
                            const Toast = Swal.mixin({
                                toast: true,
                                position: "top-end",
                                showConfirmButton: false,
                                timer: 1000,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                    toast.onmouseenter = Swal.stopTimer;
                                    toast.onmouseleave = Swal.resumeTimer;
                                }
                            });
                            Toast.fire({
                                icon: "success",
                                title: data.message
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                    }
                })
            })
        })
    </script>
@endpush
