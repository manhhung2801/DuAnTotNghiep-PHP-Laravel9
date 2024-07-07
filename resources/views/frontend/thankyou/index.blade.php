@extends('frontend.layouts.master')
@section('title', 'Cảm ơn')

@section('content')
<div class="m-auto text-center py-5">
    <div class="icon"><i class="fa-solid fa-cart-circle-check fs-1" style="color: #09c88f;"></i></div>
    <div class="text-thank my-3">
        <h2>Đơn hàng đã đặt thành công!</h2>
    </div>
    <div class="text my-3">
        <span>Chúng tôi đã ghi nhận đơn hàng của bạn. Đơn hàng sẽ sớm đến tay của bạn!</span>
    </div>
    <div class="action-back my-3">
        <a class="text-danger" href="{{ route('order.index') }}">Xem đơn hàng</a>
    </div>
</div>
@endsection