@extends('frontend.layouts.master')

@section('title', 'Chi tiết sản phẩm')

@section('content')
    <div class="layout-collection">
        @include('frontend.products.partialsDetail.breadCrumb')
        <!-- Main -->
        <div class="container">
            <div class="row mb-3 mt-4">
                <div class="col-lg-4 col-md-6 col-12 ">
                    @include('frontend.products.partialsDetail.imageGallery')
                </div>
                <div class="col-lg-5 col-md-6 col-12 details-pro">
                    @include('frontend.products.partialsDetail.overView')
                </div>
                <div class="col-lg-3 col-md-12 col-12 product-col-right">
                    @include('frontend.products.partialsDetail.sidebar')
                </div>
            </div>
            <div class="catalog-product-list container">
                @include('frontend.products.partialsDetail.relatedProducts')
            </div>
            <div class="row">
                <div class="col-lg-8 col-12 product-review-details mb-3">
                    @include('frontend.products.partialsDetail.productInformation')
                </div>
                <div class="col-lg-4 col-12">
                    @include('frontend.products.partialsDetail.attribute')
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const decreaseBtn = document.querySelector('.decrease-btn');
            const increaseBtn = document.querySelector('.increase-btn');
            const quantityInput = document.querySelector('.qtym');
            var qtyCart = document.querySelector('#getQtyCart').value
    
            decreaseBtn.addEventListener('click', function() {
                let currentValue = parseInt(quantityInput.value);
                if (currentValue > 1) {
                    quantityInput.value = currentValue - 1;
                }
            });
    
            increaseBtn.addEventListener('click', function() {
                let currentValue = parseInt(quantityInput.value);
                let maxValue = parseInt(quantityInput.getAttribute('max'))
                var qtyAdd = parseInt(qtyCart) + currentValue;
                if (qtyAdd < maxValue) {
                    quantityInput.value = currentValue + 1;
                }
            });
        });
    </script>
@endsection
