@extends('frontend.layouts.master')
@section('title', 'Check out')
@section('content')
<div class="wrapper-checkout_page">
    <div class="container mt-5">
        <div class="row">
            <div class="seclect-form_order col-md-4">
                <h4>Thông tin nhận hàng</h4>
                @include('frontend.checkout.partials.form')
            </div>
            <div class="seclect-shipping_order col-md-4">
                <h4>Vận chuyển</h4>
                <div class="alert alert-info">
                    Vui lòng nhập thông tin giao hàng
                </div>
                <h4>Thanh toán</h4>
                @include('frontend.checkout.partials.shippingMethod')
            </div>
            <div class="select-summary_order col-md-4">
                @include('frontend.checkout.partials.orderSummary')
            </div>
        </div>
    </div>
</div>
@endsection