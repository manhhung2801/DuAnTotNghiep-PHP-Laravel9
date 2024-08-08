@extends('frontend.layouts.master')

@section('title', $product->seo_title ?? 'Sản phẩm ' . $product->name)
@section('description',
    $product->seo_description ??
    'CyberMart - Hệ thống cửa hàng bán lẻ điện thoại, máy tính laptop,
    smartwatch, gia dụng, thiết bị IT, phụ kiện chính hãng - Giá tốt, trả góp 0%, giao miễn phí.')
@section('schema')
<script type="application/ld+json">{"@context":"https://schema.org","@graph":[{"@type":["ElectronicsStore","Organization"],"@id":"{{ url('/') }}/#organization","name":"{{ config('app.name') ?? 'Cybermart' }}","url":"{{ url('/') }}","sameAs":["https://facebook.com/cybermart.vn/","https://twitter.com/cybermart.vn"],"email":"sau.huynhvan16@gmail.com","address":{"@type":"PostalAddress","streetAddress":"Công viên phần mềm Quang Trung","addressLocality":"Quận 12","addressRegion":"TP. Hồ Chí Minh","postalCode":"700000","addressCountry":"VN"},"logo":{"@type":"ImageObject","@id":"{{ url('/') }}/#logo","url":"{{ asset('uploads/logo/cybermart7x4.png') }}","contentUrl":"{{ asset('uploads/logo/cybermart7x4.png') }}","caption":"{{ config('app.name') ?? 'Cybermart' }}","inLanguage":"vi","width":"700","height":"400"},"priceRange":"0-100000000","openingHours":"Mo-Su 08:00-20:00","description":"CyberMart - Hệ thống cửa hàng bán lẻ điện thoại, máy tính laptop, smartwatch, gia dụng, thiết bị IT, phụ kiện chính hãng - Giá tốt, trả góp 0%, giao miễn phí.","image":{"@id":"{{ url('/') }}/#logo"},"telephone":"+028 6686 6486"},{"@type":"WebSite","@id":"{{ url('/') }}/#website","url":"{{ url('/') }}","name":"{{ config('app.name') ?? 'Cybermart' }}","alternateName":"CyberMart - Hệ thống cửa hàng bán lẻ điện thoại, máy tính laptop.","publisher":{"@id":"{{ url('/') }}/#organization"},"inLanguage":"vi"},{"@type":"ImageObject","@id":"{{ asset('uploads/products/' . $product->image) }}","url":"{{ asset('uploads/products/' . $product->image) }}","caption":"{{ $product->seo_title ?? $product->name }}","inLanguage":"vi"},{"@type":"BreadcrumbList","@id":"{{ url()->current() }}/#breadcrumb","itemListElement":[{"@type":"ListItem","position":"1","item":{"@id":"{{ url('/') }}","name":"Trang chủ"}},{"@type":"ListItem","position":"2","item":{"@id":"{{ url('/') }}/san-pham/","name":"Sản phẩm"}},{"@type":"ListItem","position":"3","item":{"@id":"{{ url('/') }}/san-pham/{{$product->category->slug}}","name":"{{$product->category->name}}"}},{"@type":"ListItem","position":"4","item":{"@id":"{{ url('/') }}/san-pham/{{$product->category->slug}}/{{$product->subCategory->slug}}","name":"{{$product->subCategory->name}}"}},{"@type":"ListItem","position":"5","item":{"@id":"{{ url('/') }}/san-pham/{{$product->category->slug}}/{{$product->subCategory->slug}}/{{$product->childCategory->slug}}","name":"{{$product->childCategory->name}}"}},{"@type":"ListItem","position":"6","item":{"@id":"{{ url('/') }}/san-pham/{{$product->category->slug}}/{{$product->subCategory->slug ?? ''}}/{{$product->childCategory->slug ?? ''}}/{{ $product->slug ?? '' }}","name":"{{ $product->slug ?? '' }}"}}]},{"@type":"ItemPage","@id":"{{ url('/') }}/san-pham/{{$product->category->slug}}/{{$product->subCategory->slug}}/{{$product->childCategory->slug}}/{{ $product->slug ?? '' }}/#webpage","url":"{{ url('/') }}/san-pham/{{$product->category->slug}}/{{$product->subCategory->slug}}/{{$product->childCategory->slug}}/{{ $product->slug ?? '' }}","name":"{{$product->seo_title ?? $product->name}}","datePublished":"{{ $product->created_at ?? '' }}","dateModified":"{{ $product->updated_at ?? '' }}","isPartOf":{"@id":"{{ url('/') }}/#website"},"primaryImageOfPage":{"@id":"{{ asset('uploads/products/' . $product->image) }}"},"inLanguage":"vi","breadcrumb":{"@id":"{{ url()->current()}}/#breadcrumb"}},{"@type":"Product","name":"{{ $product->seo_title ?? $product->name }}","description":"{{ $product->seo_descriptions ?? strip_tags($product->short_description) }}","category":"{{ $product->category->name }}","mainEntityOfPage":{"@id":"{{ url('/') }}/san-pham/{{$product->category->slug}}/{{$product->subCategory->slug}}/{{$product->childCategory->slug}}/{{ $product->slug ?? '' }}/#webpage"},"image":[{"@type":"ImageObject","url":"{{ asset('uploads/products/' . $product->image) }}","height":"358","width":"358"}],"offers":{"@type":"Offer","price":"{{ Helper::getProductPrice($product) }}","priceCurrency":"VND","priceValidUntil":"{{ $product->offer_end_date ?? ''}}","availability":"https://schema.org/InStock","itemCondition":"NewCondition","url":"{{ url('/') }}/san-pham/{{$product->category->slug}}/{{$product->subCategory->slug}}/{{$product->childCategory->slug}}/{{ $product->slug ?? '' }}","seller":{"@type":"Organization","@id":"{{ url('/') }}","name":"{{ config('app.name') ?? 'Cybermart' }}","url":"{{ url('/') }}","logo":"{{ asset('uploads/logo/cybermart7x4.png') }}"}},"@id":"{{ url('/') }}/san-pham/{{$product->category->slug}}/{{$product->subCategory->slug}}/{{$product->childCategory->slug}}/{{ $product->slug ?? '' }}/#richSnippet"}]}</script>
@endsection


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
                <div class="col-lg-3 col-md-6 col-12 product-col-right">
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

            <div class="col-lg-12 col-12">
                @include('frontend.products.partialsDetail.comment')
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
