@extends('frontend.layouts.master')
@section('title', 'Giỏ hàng')
@section('content')
    <div class="container cart-container">
        <div>
            <h3 class="fw-medium "><i class="fa-regular fa-cart-shopping-fast"></i> Giỏ hàng của bạn</h3>
            @if (empty(\Auth::check()))
                <p>Vui lòng <a class="text-danger" href="{{ route('login') }}">Đăng nhập</a> trước khi đặt hàng! </p>
            @endif
        </div>
        @if (Cart::isEmpty() == false)
            <section class="h-100">
                @include('frontend.cart.partials.cartItem')
            </section>

            <div class="d-flex justify-content-end">
                <span class="fs-5 pe-4 fw-normal">Tổng tiền: </span>
                <strong id="subTotal" class="fs-5 text-danger">{{ number_format($subTotal, 0, '', '.') }}₫</strong>
            </div>
            <div class="row">
                <div class="btn_back col">
                    <a onclick="history.back()" class="btn btn-light continue-shopping">Tiếp tục mua hàng</a>
                </div>
                <div class="col">
                    @if (Auth()->check())
                        <a href="{{ route('checkout.index') }}"
                            class="btn btn-dark checkout-button py-2 px-3 float-end">Thanh toán</a>
                    @else
                        <a href="{{ route('login') }}"
                            class="btn btn-danger checkout-button py-2 float-end px-4 w-auto">Đăng
                            nhập</a>
                    @endif
                </div>
            </div>
    </div>
@else
    <div class="cart_empty text-center">
        <img src="{{ asset('uploads/072024/empty-cart.webp') }}" width="30%" alt="cart_empty"> <br>
        <p>Giỏ hàng của bạn đang trống. Bạn hãy thêm gì đó đi!</p>
        <a class="btn btn-outline-dark rounded rounded-0" style="width:200px" href="/">Trở lại mua hàng</a>
    </div>
    @endif
    </div>
@endsection
@push('ajax')
    <script>
        $(document).ready(function() {
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 1000,
                timerProgressBar: true,
            });
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('body').off('click', '.btn_delete_cart').on('click', '.btn_delete_cart', function(e) {
                //Ngăn hành vi mặc định reload
                e.preventDefault();
                window.setTimeout(() => {
                    // url xóa sản phẩm
                    var url = $(this).attr('data-url');
                    // lấy ra element tr chứa nút delete để xóa element mà không cần reload trang
                    var row = $(this).closest('.card');
                    Swal.fire({
                        html: `<h5>Bạn muốn xóa sản phẩm này!</h5>`,
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonText: "Xóa ngay",
                        cancelButtonText: "Hủy"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                type: 'DELETE',
                                url: url,
                                success: function(data) {
                                    // In ra thông báo xóa thành công
                                    if (data.status == true) {
                                        //message thành công 
                                        Toast.fire({
                                            icon: "success",
                                            title: data.message
                                        });

                                        //Nếu xóa sản phẩm trong cart thành công thì tiến hành xóa luôn hàng của sản phẩm trong cart
                                        row.remove()

                                        // Update lại giá của sản phẩm
                                        $('#subTotal').text(data.subTotal +
                                        '₫');
                                        if (data.subTotal == 0) {
                                            window.location.reload();
                                        }
                                        // update lại số lượng sản phẩm có trong cart trong header.
                                        $('.cart-count').text(data.cart_count);
                                    }

                                    // Nếu xóa sản phẩm thất bại báo lỗi
                                    if (data.status == false) {
                                        Toast.fire({
                                            icon: "error",
                                            title: data.message
                                        });
                                    }
                                },
                                // báo lỗi serrve
                                error: function(error) {
                                    Toast.fire({
                                        icon: "error",
                                        title: error
                                    });
                                }
                            })
                        }
                    });
                }, 500)
            })
            $('body').off('click', ".btn-minus_product, .btn-plus_product").on('click',
                ".btn-minus_product, .btn-plus_product",
                function(e) {
                    e.preventDefault()
                    window.setTimeout(() => {
                        //lấy ra element cha bao quát các input
                        var container = $(this).closest('form')

                        //tìm element có id qtyProduct trong container input-group
                        var qtyInput = container.find('#qtyProduct');
                        var qtyProduct = parseInt(qtyInput.val());

                        //Lấy số lượng trong kho ra để so sánh với số lượng trong cart
                        var productInput = container.find('#productInStock');
                        var productInStock = parseInt(productInput.attr('data-qty'));

                        // Tăng giảm số lượng sản phẩm khi bấm nút
                        if ($(this).hasClass('btn-minus_product')) {
                            qtyProduct--;

                        } else if ($(this).hasClass('btn-plus_product')) {
                            qtyProduct++;
                        }
                        // Nếu số lượng trong cart lớn hơn sản phẩm trong kho thì return về lỗi
                        if (qtyProduct > productInStock) {
                            Toast.fire({
                                icon: "error",
                                title: "Sản phẩm trong kho không đủ"
                            });
                            return;
                        }
                        // nếu qty bé hơn bằng 1 thì không được giảm
                        if (qtyProduct < 1) {
                            return;
                        }
                        // gán số lượng xử lý vào value input
                        qtyInput.val(qtyProduct);

                        //lấy element tr gần nút bấm nhất làm container box 1 sản phẩm 
                        var containerPrice = $(this).closest('.card');
                        // url xóa
                        var url = container.attr('data-url')
                        if (qtyProduct >= 1) {
                            $.ajax({
                                type: 'PUT',
                                url: url,
                                data: {
                                    qtyProduct: qtyProduct,
                                },
                                success: function(data) {
                                    if (data.status == true) {
                                        Toast.fire({
                                            icon: "success",
                                            title: data.message
                                        });
                                        $('.cart-count').text(data.cart_count);
                                    }
                                    if (data.status == false) {
                                        Toast.fire({
                                            icon: "error",
                                            title: data.message
                                        });
                                    }

                                    //Tìm #priceItemCart trong container box 1 sản phẩm tại nút bấm tăng giảm qty => gán lại giá mới
                                    containerPrice.find('#priceItemCart').text(data
                                        .summedPrice + '₫');
                                    // gán lại tổng giá
                                    $('#subTotal').text(data.subTotal + '₫');
                                },
                                error: function(error) {
                                    Toast.fire({
                                        icon: "error",
                                        title: error
                                    });
                                }
                            })
                        }
                    }, 500)
                })
        })
    </script>
@endpush
