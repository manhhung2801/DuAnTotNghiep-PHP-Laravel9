@extends('frontend.layouts.master')

@section('title', 'Sản phẩm')

@section('content')
<div class="layout-collection">
    @include('frontend.layouts.breadCrumb')
    <!-- Main -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-title text-center mb-1">
                <h1 class="fs-3">Tất cả sản phẩm</h1>
            </div>
            <div class="banner_product col-md-12 ">
                <a href="#" title="click xem ngay">
                    <img alt="Banner top" width="1300" height="300" class="img-fluid lazyload loaded rounded-4" data-src="//bizweb.dktcdn.net/100/480/632/files/iphone.jpg" src="//bizweb.dktcdn.net/100/480/632/files/iphone.jpg">
                </a>
            </div>
            <div class="col-list-cate col-md-12 mt-4 ">
                @include('frontend.products.partials.menuList')
            </div>
            <div class="block-collection col-lg-12 col-12">
                <div class="category-products products-view products-view-grid list_hover_pro">
                    <div class="filter-containers">
                        @include('frontend.products.partials.filterProduct')
                        @include('frontend.products.partials.productList')
                    </div>
                </div>
            </div>
            @include('frontend.products.partials.pagination')
        </div>
    </div>
    <!-- End Main -->
</div>
@endsection
