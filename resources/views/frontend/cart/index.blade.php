@extends('frontend.layouts.master')
@section('title', 'Giỏ hàng')
@section('content')
<div class="container cart-container">
    <h3 class="my-4 fw-normal ">Giỏ hàng của bạn</h3>
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
                <a href="{{ route('checkout.index') }}" class="btn btn-dark checkout-button" style="width:350px">Thanh toán</a>
            </div>
        </div>
    </div>
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
            e.preventDefault();
            window.setTimeout(() => {
                var url = $(this).attr('data-url');
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
                            row.remove()
                            $('#subTotal').text(data.subTotal + '₫');
                            if (data.subTotal == 0) {
                                window.location.reload();
                            }
                        }
                        if (data.status == false) {
                            Toast.fire({
                                icon: "error",
                                title: data.message
                            });
                        }
                    },
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
                //lấy ra element cha của input cần tăng sl
                var container = $(this).closest('form')

                //tìm element có id qtyProduct trong container input-group
                var qtyInput = container.find('#qtyProduct');
                var qtyProduct = parseInt(qtyInput.val());

                // Tăng giảm số lượng sản phẩm khi bấm nút
                if ($(this).hasClass('btn-minus')) {
                    if (qtyProduct <= 1) {
                        return;
                    }
                    qtyProduct--;
                } else if ($(this).hasClass('btn-plus')) {
                    if (qtyProduct >= 99) {
                        return;
                        console.log('ac');
                    }
                    qtyProduct++;
                }
                qtyInput.val(qtyProduct);

                //lấy element tr gần nút bấm nhất làm box khoanh vùng
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

                            //Tìm #priceItemCart trong box cha của nút bấm
                            containerPrice.find('#priceItemCart').text(data.summedPrice + '₫');
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
@push('script')
@endpush