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
        <button class="btn btn-light continue-shopping ">Tiếp tục mua hàng</button>
        <div class="total fs-5">
            <div class="row">
                <span class="fs-5 pe-4 col-5 fw-normal">Tổng tiền: </span>
                <p class="col-5 fs-5 text-danger">59.980.000₫</p>
            </div>
            <div class="text-right col-md-12">
                <button class="btn btn-dark checkout-button " style="width:350px">Thanh toán</button>
            </div>
        </div>
    </div>

</div>
@endsection
@push('script')
    <script type="text/javascript">
        function miuns() {
           var qtyProduct = document.getElementById('qtyProduct').value
            if(qtyProduct > 1)qtyProduct --;
            document.getElementById('qtyProduct').value = qtyProduct
        }
        function plus () {
           var qtyProduct = document.getElementById('qtyProduct').value
            if(qtyProduct < 100) qtyProduct++;
            document.getElementById('qtyProduct').value = qtyProduct
        }
    </script>
@endpush
