@extends('frontend.layouts.master')
@section('title', 'Thanh toán')
@section('content')
    <style>
        .radio-wrapper {
            display: table;
            box-sizing: border-box;
            width: 100%;
        }

        .radio__input,
        .checkbox__input {
            white-space: nowrap;
            padding-right: .75em;
        }

        .radio__label,
        .checkbox__label {
            cursor: pointer;
            vertical-align: middle;
            display: table-cell;
            width: 100%;
        }

        .radio__label__primary {
            cursor: inherit;
            font-family: inherit;
            vertical-align: top;
            display: table-cell;
            width: 100%;
        }

        .radio__label__accessory {
            text-align: right;
            padding-left: .75em;
            white-space: nowrap;
            display: table-cell;
            vertical-align: middle;
        }

        .product-thumbnail {
            width: 50px;
            height: 50px;
            border-radius: 8px;
            background: #fff;
            position: relative;
        }

        .product-thumbnail__wrapper {
            width: 100%;
            height: 100%;
            position: relative;
            overflow: hidden;
            border-radius: 8px;
        }

        .product-thumbnail__image {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            max-width: 100%;
            max-height: 100%;
            margin: auto;
        }

        .product-thumbnail__quantity {
            font-size: .78em;
            white-space: nowrap;
            padding: 0 .62em;
            border-radius: 2em;
            background-color: #2a9dcc;
            color: #fff;
            position: absolute;
            right: -.9em;
            top: -.55em;
            z-index: 3;
            box-sizing: border-box;
            min-width: 1.75em;
            height: 1.75em;
            text-align: center;
            line-height: 1.75em;
        }

        .product-table tbody th {
            padding-left: 1em;
            font-weight: 500;
            color: #333;
            padding-top: 0;
            padding-bottom: 0;
        }

        .field__input {
            border-radius: 4px;
            width: 100%;
            display: block;
            box-sizing: border-box;
            padding: .94em .8em;
            border: 1px #d9d9d9 solid;
            height: 40px;
            background-color: #fff;
            color: #333;
        }

        .total-line__price,
        .total-line__coupon {
            padding-left: 1.5em;
            text-align: right;
            white-space: nowrap;
        }

        .field__input-btn-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .tenchung {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            width: 100%;
        }
    </style>
    <div class="wrapper-checkout_page">
        <div class="container mt-5">
            <form action="{{ route('checkout.store') }}" method="post" class="needs-validation" novalidate>
                @csrf @method('POST')
                <div class="row ">
                    <div class="col-md-4 order-1 order-md-1 mb-3">
                        <h4><i class="fas fa-user-alt d-md-none"></i>Thông tin nhận hàng</h4>
                        @include('frontend.checkout.partials.form')
                    </div>
                    <div class="col-md-4 order-2 order-md-2 mb-3">
                        <div class="payment_method">
                            <h4><i class="fas fa-shuttle-van d-md-none mb-3"></i>Phương thức thanh toán</h4>
                            @include('frontend.checkout.partials.paymentMethod')
                        </div>
                        <div class="shipping_method mt-3">
                            <h4><i class="fas fa-shuttle-van d-md-none "></i>Phương thức vận chuyển</h4>
                            @include('frontend.checkout.partials.shippingMethod')
                        </div>
                    </div>
                    <div class="col-md-4  order-3 order-md-3 mb-3">
                        <div class="ws">
                            @include('frontend.checkout.partials.orderSummary')
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        (() => {
            const forms = document.querySelectorAll('.needs-validation')
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
@endsection
@push('script_lib-js')
    <script src="{{ asset('assets/js/app.js') }}"></script>
@endpush
@push('ajax')
    <script type="text/javascript">
        $(document).ready(() => {
            // Hàm tính tổng tiền
            function calculateTotal() {
                const totalCart = parseInt($('#total_price_hidden').val());
                const shippingFee = parseInt($('input[name="shipping_money"]').val()) || 0;
                const couponDiscount = parseInt($('#coupon_code_value').val()) || 0;

                const total = totalCart + shippingFee - couponDiscount;

                $('#total_price_summary').text(total.toLocaleString('vi-VN') + ' VNĐ');
                $('.total-line__coupon').text('-' + couponDiscount.toLocaleString('vi-VN') + ' VNĐ');
                $('#total_line_shipping').text('+ ' + shippingFee.toLocaleString('vi-VN') + ' VNĐ');
            }

            // Xử lý nhận hàng tại cửa hàng
            $('body').off('click', '#receiveStore').on('click', '#receiveStore', function() {
                $('input[name="shipping_money"]').val(0);
                $('#coupon_code_input, #coupon_code_value').val('');
                $('#pick_address_store').removeClass('d-none');

                calculateTotal();

                $.get("{{ route('api.getStoreAddress') }}")
                    .done(function(data) {
                        if (data.status) {
                            $('#pick_address_store').empty();
                            $.each(data.storeAdress, function(index, value) {
                                $('#pick_address_store').append(`
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="store_address" id="store_address_${index}" value="${value}" ${index === 0 ? 'checked' : ''}>
                                <label class="form-check-label lable_store_address" for="store_address_${index}">${value}</label>
                            </div>
                        `);
                            });
                        } else {
                            alert('Đã có lỗi xảy ra: ' + data.message);
                        }
                    })
                    .fail(function() {
                        alert('Đã có lỗi xảy ra. Vui lòng liên hệ cho chúng tôi');
                    });
            });

            // Xử lý giao hàng tận nơi (GHTK)
            $('body').off('change', '#wards, #ghtk').on('change', '#wards, #ghtk', function() {
                if ($('#ghtk').is(':checked') && $('#wards').val()) {
                    $('#pick_address_store').addClass('d-none').empty();

                    const shippingData = {
                        province: $('#provinces').val(),
                        district: $('#districts').val(),
                        ward: $('#wards').val(),
                        address: $('#address').val() || ''
                    };

                    $.get("{{ route('calculateShipping') }}", shippingData)
                        .done(function(data) {
                            $('input[name="shipping_money"]').val(data.shipMoney);
                            calculateTotal();
                        })
                        .fail(function() {
                            alert('Đã có lỗi vui lòng thử lại sau!');
                        });
                }
            });

            // Áp dụng mã giảm giá
            $('body').off('click', '#apply_coupon_code').on('click', '#apply_coupon_code', function() {
                const couponData = {
                    coupon_code: $('#coupon_code_input').val(),
                    total_cart: $('#total_price_hidden').val()
                };

                $.post("{{ route('applyCouponCode') }}", couponData)
                    .done(function(data) {
                        if (data.status) {
                            $('#tag_coupon').empty();
                            const discount = couponData.total_cart - data.newTotal;
                            $('#coupon_code_value').val(discount);
                            $('#message_coupon').text('');
                            $('#tag_coupon').append(
                                ` <span class="vc">${couponData.coupon_code}</span>`)
                            calculateTotal();
                        } else {
                            $('#coupon_code_value').val(0);
                            $('.vc').remove();
                            $('#message_coupon').text(data.message ||
                                'Có lỗi xảy ra khi áp dụng mã giảm giá.');
                            calculateTotal();
                        }
                    })
                    .fail(function() {
                        $('#coupon_code_value').val(0);
                        $('#message_coupon').text(
                            'Đã có lỗi khi áp dụng mã giảm giá. Xin vui lòng thử lại sau!');
                        calculateTotal();
                    });
            });
        });
        // $(document).ready(() => {
        //     function calculateTotal () {

        //     }
        //     //Nếu Nhận hàng tại cửa hàng thì reset các trường
        //     $('body').off('click', '#receiveStore').on('click', '#receiveStore', function() {
        //         //Phí ship sẽ bằng 0 nếu người dùng chọn nhận tại nữa hàng (trường show dữ liệu)
        //         $('#total_line_shipping').text(0 + ' VNĐ');
        //         //Lấy tổng tiền ở hiện tại trong input ẩn.
        //         var totalMoney = $('#total_price_hidden').val();
        //         $('#total_price_summary').text(parseInt(totalMoney).toLocaleString('vi-VN') + ' VNĐ');
        //         //Phí ship sẽ bằng 0 nếu người dùng chọn nhận tại nữa hàng (trường lấy dữ liệu)
        //         $('input[name="shipping_money"]').val(0)
        //         //Hiện ds cửa hàng
        //         $('#pick_address_store').removeClass('d-none')
        //         //reset coupon
        //         $('#coupon_code_input').val('');
        //         $('#coupon_code_value').val(0);
        //         $('.total-line__coupon').text(0+ ' VNĐ');
        //         $.ajax({
        //             type: 'GET',
        //             url: "{{ route('api.getStoreAddress') }}",
        //             success: function(data) {
        //                 if (data.status) {
        //                     //loại bỏ tất cả các option có trước đó
        //                     $('#pick_address_store').empty()

        //                     $.each(data.storeAdress, function(index, value) {
        //                         var form_check = $('<div>').addClass('form-check')
        //                         form_check.append(
        //                             `<input class="form-check-input" type="radio" name="store_address" id="store_address_${index}" value="${value}" checked><label class="form-check-label lable_store_address" for="store_address_${index}">${value}</label>`
        //                         )
        //                         $('#pick_address_store').append(form_check)
        //                     })
        //                 } else {
        //                     alert('Đã có lỗi xảy ra: ' + response.message);
        //                 }
        //             },
        //             error: function(xhr, status, error) {
        //                 alert('Đã có lỗi xảy ra. Vui lòng liên hệ cho chúng tôi')
        //             }
        //         })
        //     })

        //     // Nếu GHTK thì tính phí ship 
        //     $('body').off('change click', '#wards, #ghtk').on('change click', '#wards, #ghtk', function() {
        //         if ($('#ghtk').is(':checked')) {
        //             // Ẩn ds cửa hàng đi
        //             $('#pick_address_store').addClass('d-none')
        //             $('#pick_address_store').empty()

        //             //Lấy thông tin người nhận để render phí ship
        //             var province = $('#provinces').val()
        //             var district = $('#districts').val()
        //             var ward = $('#wards').val()
        //             var address = $('#address').val()
        //             var total_cart = parseInt($('#total_price_hidden').val())

        //             if (ward) {
        //                 $.ajax({
        //                     type: 'get',
        //                     url: "{{ route('calculateShipping') }}",
        //                     data: {
        //                         province: province,
        //                         district: district,
        //                         ward: ward,
        //                         address: address ?? '',
        //                     },
        //                     dataType: 'json',
        //                     success: function(data) {
        //                         //in ra phí ship
        //                         $('#total_line_shipping').text('+ ' + data.shipMoney
        //                             .toLocaleString('vi-VN') + ' VNĐ')
        //                         //tính toán và in ra số tiền đã + phí ship
        //                         var total = total_cart + parseInt(data.shipMoney);
        //                         $('#total_price_summary').text(total.toLocaleString('vi-VN') +
        //                             ' VNĐ')
        //                         //Lưu tiền ship vào input
        //                         $('input[name="shipping_money"]').val(data.shipMoney)
        //                     },
        //                     error: function(xhr, status, error) {
        //                         alert('Đã có lỗi vui lòng thử lại sau!');
        //                     }
        //                 })
        //             }
        //         }
        //     })

        //     // Apply coupon code
        //     $('body').off('click', '#apply_coupon_code').on('click', '#apply_coupon_code', function() {
        //         var coupon_code = $('#coupon_code_input').val()
        //         var total_cart = $('#total_price_hidden').val()
        //         $.ajax({
        //             type: "post", // Sử dụng method POST
        //             url: "{{ route('applyCouponCode') }}",
        //             data: {
        //                 coupon_code: coupon_code,
        //                 total_cart: total_cart
        //             },
        //             success: function(data) {
        //                 if (data.status) {
        //                     //Lấy số tiền đã app mã coupon + với phí ship nếu có
        //                     var shipping = $('#shipping_value').val()
        //                     var total = parseInt(data.newTotal) + parseInt(shipping)
        //                     $('#total_price_summary').text(total.toLocaleString('vi-VN') +
        //                         ' VNĐ');

        //                     //Lưu số tiền đã giảm vào input hidden
        //                     $('#coupon_code_value').val(total_cart - data.newTotal)
        //                     var total_coupon = data.newTotal - total_cart;
        //                     $('.total-line__coupon').text(total_coupon.toLocaleString('vi-VN') +
        //                     ' VNĐ')
        //                 }else {
        //                     $('#message_coupon').text(data.message)
        //                 }
        //             },
        //             error: function(xhr, status, error) {
        //                 alert('Đã có lỗi khi áp dụng mã giảm giá. Xin vui lòng thử lại sau!' +
        //                     error);
        //             }
        //         });
        //     })
        // })
    </script>
@endpush
