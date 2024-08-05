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
                <form action="" method="get">
                    @include('admin.order.partials.filter')
                </form>
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered table-responsive" style="width:100%">
                        <thead>
                            <tr>
                                <th>Mã ĐH</th>
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
                                    <td>{{ $order->order_code }}</td>
                                    
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
                                                @php
                                                    $address = json_decode($order->order_address);
                                                @endphp
                                                <em>ĐC:
                                                    {{ ($address->address ?? '') . ', ' . $address->ward . ', ' . $address->district . ', ' . $address->province }}</em>
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        <strong>{{ number_format($order->total) }} VNĐ</strong>
                                        @if ($order->ship_money != null)
                                            <p>+ {{ number_format($order->ship_money) }} VNĐ</p>
                                        @endif
                                    </td>

                                    {{-- Phương thức thanh toán --}}
                                    <td>
                                        @if ($order->payment_method == 0 && $order->payment_method == 0)
                                            <p class="m-0">Thanh toán khi nhận hàng</p>
                                        @endif

                                        @if ($order->payment_method == 1 && $order->payment_status == 0)
                                            <p class="mb-1"><img src="{{ asset('uploads/vnpay.png') }}" alt=""
                                                    width="60px" height="13px"></p>
                                            <p class="m-0 badge text-bg-danger"><em>Chưa thanh toán</em></p>
                                        @elseif($order->payment_method == 1 && $order->payment_status == 1)
                                            @if ($order->order_status == -1 && $order->vnp_transaction_id !== null)
                                                @if (
                                                    $order->vnp_refund_status == 'Pending' ||
                                                        $order->vnp_refund_status == 'Processing' ||
                                                        $order->vnp_refund_status == 'Refund_Failed')
                                                    <p class="mb-1"><img src="{{ asset('uploads/vnpay.png') }}"
                                                            alt="" width="60px" height="13px"></p>
                                                    <span id="{{ $order->id }}">
                                                        <p class="m-0 badge text-bg-success"><em
                                                                style="text-decoration: line-through #dc3545; text-decoration-thickness: 2px;">Đã
                                                                thanh toán</em></p>
                                                    </span>
                                                @elseif($order->vnp_refund_status == 'Refunded')
                                                    <p class="mb-1"><img src="{{ asset('uploads/vnpay.png') }}"
                                                            alt="" width="60px" height="13px"></p>
                                                @endif
                                            @else
                                                <p class="mb-1"><img src="{{ asset('uploads/vnpay.png') }}"
                                                        alt="" width="60px" height="13px"></p>
                                                <p class="m-0 badge text-bg-success"><em>Đã thanh toán</em></p>
                                            @endif

                                            @if ($order->order_status == -1 && $order->vnp_transaction_id !== null)
                                                <div class="form-floating">
                                                    <select class="form-select mt-1 form-select-sm"
                                                        aria-label="Floating label select example" id="vnp_refund_status"
                                                        data-orderid="{{ $order->id }}">
                                                        <option
                                                            {{ $order->vnp_refund_status == 'Pending' ? 'selected' : '' }}
                                                            value="Pending">
                                                            <p class="badge text-bg-secondary"><em>Chờ phê duyệt</em></p>
                                                        </option>
                                                        <option
                                                            {{ $order->vnp_refund_status == 'Processing' ? 'selected' : '' }}
                                                            value="Processing">
                                                            <p class="badge text-bg-secondary"><em>Đang xử lý</em></p>
                                                        </option>
                                                        <option
                                                            {{ $order->vnp_refund_status == 'Refunded' ? 'selected' : '' }}
                                                            value="Refunded">
                                                            <p class="badge text-bg-secondary"><em>Đã hoàn tiền</em></p>
                                                        </option>
                                                        <option
                                                            {{ $order->vnp_refund_status == 'Refund_Failed' ? 'selected' : '' }}
                                                            value="Refund_Failed">
                                                            <p class="badge text-bg-secondary"><em>Không thành công</em></p>
                                                        </option>
                                                    </select>
                                                    <label for="vnp_refund_status" class="fw-bold">Hoàn Tiền</label>
                                                </div>
                                            @endif
                                        @elseif($order->payment_method == 1 && $order->payment_status == 2)
                                            <p class="mb-1"><img src="{{ asset('uploads/vnpay.png') }}" alt=""
                                                    width="60px" height="13px"></p>
                                            <p class="m-0 badge text-bg-warning"><em>Thanh toán thất bại / lỗi</em></p>
                                        @endif

                                    </td>

                                    {{-- Phương thức nhận hàng --}}
                                    <td>
                                        @if ($order->shipping_method == 0)
                                            <p class="m-0">Nhận tại cửa hàng</p>
                                        @elseif($order->shipping_method == 1)
                                            <p class="fw-normal mb-1"><img width="80px"
                                                    src="https://cdn.haitrieu.com/wp-content/uploads/2022/05/Logo-GHTK-H.png"
                                                    alt="ghtk"></p>
                                        @endif
                                    </td>

                                    {{-- Trạng thái đơn hàng --}}
                                    <td id="container_statusOrder">
                                        @php
                                            $arr_success = [92, 6, 5, 45];
                                        @endphp
                                        @if ($order->order_status == -1)
                                            <p class="p-2 badge text-bg-danger">Đã hủy</p>
                                        @elseif(in_array($order->order_status, $arr_success))
                                            <p class="p-2 badge text-bg-success">Đã hoàn thành</p>
                                        @else
                                            @if ($order->shipping_method == 0)
                                                <select id="change-status-order"
                                                    data-url="{{ route('admin.order.update', $order->id) }}"
                                                    class="form-select" name="">
                                                    <option value="0"
                                                        {{ $order->order_status == 0 ? 'selected' : 'disabled' }}>Chờ tiếp
                                                        nhận</option>
                                                    <option value="91"
                                                        {{ $order->order_status == 91 ? 'selected' : '' }}>Đã tiếp nhận
                                                    </option>
                                                    <option value="92"
                                                        {{ $order->order_status == 92 ? 'selected' : '' }}>Đã hoàn thành
                                                    </option>
                                                    <option value="-1"
                                                        {{ $order->order_status == -1 ? 'selected' : '' }}>Đã hủy</option>
                                                </select>
                                            @else
                                                @if ($order->order_status == 0)
                                                    <a id="accept_ghtk"
                                                        data-url="{{ route('admin.ghtk.post-order', $order->id) }}"
                                                        class="btn btn-outline-primary px-4 py-1 my-1">Xác nhận</a>
                                                    <a id="status-order-cancel"
                                                        data-url="{{ route('admin.order.update', $order->id) }}"
                                                        data-val="-1" class="btn btn-outline-danger px-2 py-1">Hủy</a>
                                                @else
                                                    <p class="p-2 badge text-bg-primary">Đã chuyển đơn cho GHTK</p>
                                                @endif
                                                @if ($order->order_status == 1 || $order->order_status == 2)
                                                    <a id="cancel_ghtk" data-url="{{ route('admin.ghtk.cancel-order', $order->tracking_id) }}" class="btn btn-outline-danger px-2 py-1">Hủy</a>
                                                @endif
                                            @endif
                                        @endif
                                    </td>

                                    <td>
                                        {{ $order->user_note }}
                                    </td>

                                    <td style="width: 100px; overflow:hidden;">
                                        <div class="container_admin_note">
                                            <textarea disabled class="admin_note_text">{{ $order->admin_note }}</textarea>
                                            <!-- Button trigger modal -->
                                            <a data-bs-toggle="modal" data-bs-target="#admin__note_{{ $order->id }}">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>

                                            <!-- Modal -->
                                            @include('admin.order.partials.modelAdminNote')
                                        </div>
                                    </td>

                                    <td>
                                        <!-- Button trigger modal -->
                                        <button id="btn-show-order-detail" type="button"
                                            data-url="{{ route('admin.order.show', $order->id) }}"
                                            class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#orderDetail">
                                            Chi tiết
                                        </button>
                                        @if ($order->vnp_transaction_id !== null)
                                            <a class="btn btn-info btn-sm"
                                                href="https://sandbox.vnpayment.vn/merchantv2/Transaction/PaymentDetail/{{ $order->vnp_transaction_id }}.htm"
                                                target="_blank">
                                                VNPAY
                                            </a>
                                        @endif

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
            $('body').off('change', '#vnp_refund_status').on('change', '#vnp_refund_status', function() {
                var order_id = $(this).attr('data-orderid');
                var vnp_refund_status = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "{{ route('admin.order.vnp-refund-status.update') }}",
                    data: {
                        orderId: order_id,
                        vnpRefundStatus: vnp_refund_status,
                    },
                    dataType: "json",
                    success: function(data) {
                        let $parentElement = $("#" + order_id);

                        if (data.vnp_refund_status == "Refunded") {
                            $parentElement.find("p.m-0.badge.text-bg-success").remove();
                        }
                        if (data.vnp_refund_status !== "Refunded") {
                            $parentElement.html(
                                `<p class="m-0 badge text-bg-success"><em style="text-decoration: line-through #dc3545; text-decoration-thickness: 2px;">Đã thanh toán</em></p>`
                            );
                        }
                        toastr.success(data.message);
                        // console.log(response);
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                    }
                });
            });

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

                            //Image
                            var image = $('<img>').attr({
                                width: 60,
                                src: baseimg + '/' + product.product.image,
                                alt: 'abc',
                                class: 'me-2'
                            })
                            productCol.append(image)
                            infoCol.append(productCol)

                            //Product Name
                            var product_info = $('<div>')
                            var product_name = $('<div>').addClass('product_name_od')
                                .append(
                                    `<h6 class="fw-semibold">${product.product_name}<h6>`
                                )
                            product_info.append(product_name)

                            //Variant
                            var variants = $.parseJSON(product.variants);
                            // Tạo một div để chứa thông tin về các biến thể sản phẩm
                            var product_variant = $('<div>').addClass(
                                'product_variant');

                            // Sử dụng $.each() để lặp qua từng biến thể trong mảng variants
                            $.each(variants, function(index, variant) {
                                // Tạo một đoạn HTML cho mỗi biến thể và thêm vào product_variant
                                var variant_html =
                                    `<p class="m-0 text-capitalize" style="font-size: 12px">${index}: ${variant}</p>`;
                                product_variant.append(variant_html);
                            });

                            product_info.append(product_variant)
                            infoCol.append(product_info)
                            newRow.append(infoCol)


                            //Số lượng
                            var qtyCol = $('<td>')
                            qtyCol.append(`<strong>x${product.qty}</strong>`)
                            newRow.append(qtyCol)

                            //Giá
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

            function changeStatus(url, orderStatus) {
                $.ajax({
                    type: 'PATCH',
                    url: url,
                    data: {
                        orderStatus: orderStatus
                    },
                    success: function(data) {
                        if (data.status == true) {
                            Toast.fire({
                                icon: "success",
                                title: data.message
                            });
                        } else {
                            Toast.fire({
                                icon: "error",
                                title: data.message
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                    }
                })
            }
            $('body').off('change', '#change-status-order').on('change', '#change-status-order', function() {
                var orderStatus = $('#change-status-order').val();
                var url = $(this).attr('data-url')
                changeStatus(url, orderStatus)
            })

            $('body').off('click', '#status-order-cancel').on('click', '#status-order-cancel', function() {
                var orderStatus = $(this).attr('data-val');
                var url = $(this).attr('data-url')
                changeStatus(url, orderStatus)
            })

            $('body').off('click', '.change-admin-note').on('click', '.change-admin-note', function() {
                var container = $(this).closest('td')
                var adminNote = container.find('#admin_note__input').val()
                var url = container.find('.change-admin-note').attr('data-url')
                var adminNoteText = container.find('.admin_note_text')
                $.ajax({
                    type: 'PATCH',
                    url: url,
                    data: {
                        adminNote: adminNote
                    },
                    success: function(data) {
                        adminNoteText.text(data.adminNote)
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                    }
                })
            })
            $('body').off('click', '#accept_ghtk').on('click', '#accept_ghtk', function() {
                var url = $(this).attr('data-url');
                var container_status = $(this).closest('tr').find('#container_statusOrder')
                Swal.fire({
                        title: "Bạn có chắc chắn?",
                        text: "Thực hiện chuyển đơn hàng cho ĐVVC!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "Đồng ý",
                        cancelButtonText: "Hủy",
                    })
                    .then((result) => {
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
                                url: url,
                                success: function(res) {
                                    setTimeout(() => {
                                        // Đơn hàng thành công
                                        if (res.status == true) {
                                            Swal.fire({
                                                title: "Yêu cầu thành công!",
                                                html: `
                                            <div class="text-start">
                                                <h5>Thông tin đơn hàng <u>${res.order.partner_id}</u></h5>
                                                <p class="m-0">MVC: ${res.order.tracking_id}</p>
                                                <p class="m-0">Phí vận chuyển: ${res.order.fee} VMĐ</p>
                                                <p class="m-0">Thời gian lấy: ${res.order.estimated_pick_time}</p>
                                                <p class="m-0">Thời gian giao: ${res.order.estimated_deliver_time}</p>
                                            </div>
                                        `,
                                                icon: "success"
                                            });
                                            container_status.empty();
                                            container_status.append(`
                                            <p class="p-2 badge text-bg-primary">Đã chuyển đơn cho GHTK</p>
                                            `)
                                        }
                                        //Đơn hàng lỗi
                                        if (res.status == false) {
                                            Swal.fire({
                                                title: "Yêu cầu thất bại!",
                                                text: res.message +
                                                    '. Mã lỗi: ' + res
                                                    .error_code,
                                                icon: "error"
                                            });
                                        }
                                    }, 500);
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
                                console.log(res);
                                if (res.success == true) {
                                    Swal.fire({
                                        title: "Yêu cầu thành công!",
                                        text: res.message,
                                        icon: "success"
                                    });
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
