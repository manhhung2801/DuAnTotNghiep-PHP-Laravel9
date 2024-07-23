@extends('frontend.layouts.master')

@section('title', 'CyberMart - Hệ thống thương mại điện tử hàng đầu Việt Nam')
@section('description', 'CyberMart - Hệ thống cửa hàng bán lẻ điện thoại, máy tính laptop, smartwatch, gia dụng, thiết bị IT, phụ kiện chính hãng - Giá tốt, trả góp 0%, giao miễn phí.')
@section('schema')
<script type="application/ld+json">{ "@context": "https://schema.org", "@graph": [ { "@type": "WebPage", "@id": "{{ url('/') }}", "url": "{{ url('/') }}", "name": "Thương Mại Điện Tử CyberMart", "isPartOf": { "@id": "{{ url('/') }}#website" }, "about": { "@id": "{{ url('/') }}#organization" }, "primaryImageOfPage": { "@id": "{{ url('/') }}#primaryimage" }, "thumbnailUrl": "{{ url('/') }}/uploads/logo/cybermart_logo_1x1.png", "datePublished": "2022-11-05T12:01:44+00:00", "dateModified": "2024-07-21T16:54:25+00:00", "description": "CyberMart - Hệ thống cửa hàng bán lẻ điện thoại, máy tính laptop, smartwatch, gia dụng, thiết bị IT, phụ kiện chính hãng - Giá tốt, trả góp 0%, giao miễn phí.", "breadcrumb": { "@id": "{{ url('/') }}#breadcrumb" }, "inLanguage": "vi", "potentialAction": [ { "@type": "ReadAction", "target": [ "{{ url('/') }}" ] } ] }, { "@type": "ImageObject", "inLanguage": "vi", "@id": "{{ url('/') }}#primaryimage", "url": "{{ url('/') }}/uploads/logo/cybermart_logo_1x1.png", "width": 255, "height": 255 }, { "@type": "BreadcrumbList", "@id": "{{ url('/') }}#breadcrumb", "itemListElement": [ { "@type": "ListItem", "position": 1, "name": "Trang chủ", "potentialAction": { "@type": "ReadAction", "target": { "@type": "EntryPoint", "urlTemplate": "{{ url('/') }}" } } } ] }, { "@type": "WebSite", "@id": "{{ url('/') }}#website", "url": "{{ url('/') }}", "name": "Thương Mại Điện Tử CyberMart", "description": "Hệ thống thương mại điện tử CyberMart Việt Nam", "publisher": { "@id": "{{ url('/') }}#organization" }, "potentialAction": [ { "@type": "SearchAction", "target": { "@type": "EntryPoint", "urlTemplate": "{{ url('/') }}/search?search={search_term_string}" }, "query-input": { "@type": "PropertyValueSpecification", "valueRequired": "http://schema.org/True", "valueName": "search_term_string" } } ], "inLanguage": "vi" }, { "@type": "Organization", "@id": "{{ url('/') }}#organization", "name": "Thương Mại Điện Tử CyberMart", "url": "{{ url('/') }}", "logo": { "@type": "ImageObject", "inLanguage": "vi", "@id": "{{ url('/') }}#logo", "url": "{{ url('/') }}/uploads/logo/cybermart_logo_1x1.png", "contentUrl": "{{ url('/') }}/uploads/logo/cybermart_logo_1x1.png", "width": 250, "height": 250, "caption": "Thương Mại Điện Tử CyberMart" } } ] }</script>
@endsection

@section('content')
<div class="wrapper-home-page">
    <div class="slideshow-home-page pb-4">
        @include('frontend.home.partials.slideShow')
    </div>
    <div class="content-home-page">
        <div class="scroll_animation section_services">
            @include('frontend.home.partials.services')
        </div>
        <div class="section-categories-hot pt-5">
            @include('frontend.home.partials.categoryHot')
        </div>
        <div class="section-category-product">
            @include('frontend.home.partials.productByCategory')
        </div>
        <div class="scroll_animation section-banner_new pt-5">
            @include('frontend.home.partials.banner')
        </div>
       <div class="scroll_animation select-news ">
            @include('frontend.home.partials.news')
        </div>
    </div>
</div>
@endsection
