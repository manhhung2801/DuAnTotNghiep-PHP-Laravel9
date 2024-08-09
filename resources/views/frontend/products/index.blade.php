@extends('frontend.layouts.master')
@section('title', ($category->name ?? ($subCategory->name ?? ($childCategory->name ?? ($product->name ?? ' Sản phẩm'))))
    . ' Chính hãng giá rẻ, ưu đãi, trả góp 0%')
@section('description',
    'Mua ngay ' .
    ($category->name ?? ($subCategory->name ?? ($childCategory->name ?? ($product->name ?? 'sản phẩm ')))) .
    ' với mức giá ưu đãi, bảo hành uy tín kèm nhiều chương trình khuyến mãi giảm giá
    lớn, dịch vụ chăm sóc')
@section('schema')
    {{-- WebSite --}}
    <script type="application/ld+json">{ "@type": "WebSite", "@id": "{{ url('/') }}#website", "url": "{{ url('/') }}", "name": "Thương Mại Điện Tử CyberMart", "description": "Hệ thống thương mại điện tử CyberMart Việt Nam", "inLanguage": "vi", "publisher": { "@id": "{{ url('/') }}#organization" }, "potentialAction": [ { "@type": "SearchAction", "target": { "@type": "EntryPoint", "urlTemplate": "{{ url('/') }}/search?search={search_term_string}" }, "query-input": { "@type": "PropertyValueSpecification", "valueRequired": "http://schema.org/True", "valueName": "search_term_string" } } ] }</script>
    {{-- Product --}}
    <script type="application/ld+json">{ "@context": "https://schema.org", "@type": "Product", "name": "{{ $category->name ?? ($subCategory->name ?? ($childCategory->name ?? ($product->name ?? ''))) }}", "image": "{{ asset('uploads/logo/cybermart7x4.png') }}", "description": "Mua {{ ($category->name ?? ($subCategory->name ?? ($childCategory->name ?? ($product->name ?? 'sản phẩm ')))) }}- Apple chính hãng, giá rẻ. Hư gì đổi nấy 12 tháng, thu cũ Đổi mới giảm đến 2tr, có trả góp 0%. BH chính hãng 1 năm, freeship lần mua đầu. Xem ngay!", "brand": { "@type": "Brand", "name": "{{ ($category->name ?? ($subCategory->name ?? ($childCategory->name ?? ($product->name ?? 'sản phẩm ')))) }}" }, "offers": { "@type": "AggregateOffer", "priceCurrency": "VND", "seller": { "@type": "Organization", "@id": "{{ url('/') }}/#organization", "name": "Cybermart" }, "offerCount": 10, "lowPrice": 0, "highPrice": 100000000 } }</script>
    {{-- organization --}}
    <script type="application/ld+json">{ "@context": "https://schema.org", "@type": "organization", "@id": "{{ url('/') }}#organization", "name": "Thương Mại Điện Tử CyberMart", "url": "{{ url('/') }}", "logo": { "@type": "ImageObject", "@id": "{{ url('/') }}#logo", "url": "{{ asset('uploads/logo/cybermart7x4.png') }}", "contentUrl": "{{ asset('uploads/logo/cybermart7x4.png') }}", "width": 700, "height": 400, "caption": "Thương Mại Điện Tử CyberMart" } }</script>
@endsection

@section('content')
    <div class="layout-collection">
        @include('frontend.layouts.breadCrumb')
        <!-- Main -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-title text-center mb-1">
                    <h2 class="fs-3 text-uppercase">
                        {{ $category->name ?? ($subCategory->name ?? ($childCategory->name ?? ($product->name ?? ''))) }}
                    </h2>
                </div>
                <div class="col-md-12 col-title text-center mb-1">
                    <h1 class="fs-3 d-none">CyberMart - Sản thường mại điển tử lớn nhất Việt Nam -Nhiều Ưu đãi háo dẫn!</h1>
                </div>
                <div class="banner_product col-md-12 ">
                    <a href="#" title="click xem ngay">
                        <img alt="Banner {{ $category->name ?? ($subCategory->name ?? ($childCategory->name ?? ($product->name ?? 'Sản phẩm'))) }}"
                            width="1300" height="300" class="img-fluid lazyload loaded rounded-1"
                            data-src="//bizweb.dktcdn.net/100/480/632/files/iphone.jpg"
                            src="//bizweb.dktcdn.net/100/480/632/files/iphone.jpg">
                    </a>
                </div>
                <div class="col-list-cate col-md-12 mt-4 mb-3" style="overflow-y: auto;">
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
