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

        .total-line__price {
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
@endsection
@push('script')
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
@endpush
@push('script_lib-js')
    <script src="{{ asset('assets/js/app.js') }}"></script>
@endpush
