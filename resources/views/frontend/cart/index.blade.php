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
            <div class="table-responsive">
                <table class="table">
                    @include('frontend.cart.partials.cartItem')
                </table>
            </div>
            <div class="d-flex justify-content-between align-items-end">
                <a onclick="history.back()" class="btn btn-light continue-shopping ">Tiếp tục mua hàng</a>
                <div class="total fs-5">
                    <div class="row">
                        <span class="fs-5 pe-4 col-5 fw-normal">Tổng tiền: </span>
                        <p id="subTotal" class="col-5 fs-5 text-danger">{{ number_format($subTotal, 0, '', '.') }}₫</p>
                    </div>
                    <div class="text-right col-md-12">
                        <a href="{{ route('checkout.index') }}" class="btn btn-dark checkout-button"
                            style="width:350px">Thanh
                            toán</a>
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

            $('body').on('click', '.btn_delete_cart', function(e) {
                //Ngăn hành vi mặc định reload
                e.preventDefault();
                window.setTimeout(() => {
                    // url xóa sản phẩm
                    var url = $(this).attr('data-url');
                    // lấy ra element tr chứa nút delete để xóa element mà không cần reload trang
                    var row = $(this).closest('tr');
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
                                $('#subTotal').text(data.subTotal + '₫');
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
                }, 500)
            })
            $('body').on('click', ".btn-minus, .btn-plus", function(e) {
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
                    if ($(this).hasClass('btn-minus')) {
                        // nếu qty bé hơn bằng 1 thì không được giảm
                        if (qtyProduct <= 1) {
                            return;
                        }
                        qtyProduct--;

                    } else if ($(this).hasClass('btn-plus')) {
                        // Nếu số lượng trong cart lớn hơn sản phẩm trong kho thì return về lỗi
                        if (qtyProduct >= productInStock) {
                            Toast.fire({
                                icon: "error",
                                title: "Sản phẩm trong kho không đủ"
                            });
                            return;
                        }
                        qtyProduct++;
                    }
                    // gán số lượng xử lý vào value input
                    qtyInput.val(qtyProduct);

                    //lấy element tr gần nút bấm nhất làm container box 1 sản phẩm 
                    var containerPrice = $(this).closest('tr');
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
