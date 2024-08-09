@extends('frontend.layouts.master')
@section('title', $newCatefind->name.' - cập nhập thông tin mới nhất!')
@section('description',
    $newCatefind->name. ' công nghệ. Hệ thống thương mại điện tử hàng đầu Việt Nam liên hệ ngay để
    đặt hàng!!!.')
@section('schema')
<script type="application/ld+json">{"@context":"https://schema.org","@graph":[{"@type":"WebSite","@id":"{{ url('/') }}/#website","url":"{{ url('/') }}","name":"{{ config('app.name') ?? 'Cybermart' }}","alternateName":"CyberMart - Hệ thống cửa hàng bán lẻ điện thoại, máy tính laptop.","publisher":{"@id":"{{ url('/') }}/#organization"},"inLanguage":"vi"},{"@type":"ImageObject","@id":"{{ asset('uploads/logo/cybermart7x4.png') }}","url":"{{ asset('uploads/logo/cybermart7x4.png') }}","width":"700","height":"400","caption":"Logo của CyberMart","inLanguage":"vi"},{"@type":"BreadcrumbList","@id":"{{ url()->current() }}/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"item":{"@id":"{{ url('/') }}","name":"Trang chủ"}},{"@type":"ListItem","position":2,"item":{"@id":"{{ url('/')}}/tin-tuc/","name":"Tin tức"}},{"@type":"ListItem","position":3,"item":{"@id":"{{ url()->current() }}","name":"{{ $newCatefind->name }}"}}]},{"@type":"WebPage","@id":"{{ url()->current() }}/#webpage","url":"{{ url()->current() }}","name":"{{ $newCatefind->name }} mới nhất về Thương Mại Điện Tử CyberMart cập nhật những thông tin bổ ích!","datePublished":"{{ $newCatefind->created_at ?? '' }}","dateModified":"{{ $newCatefind->updated_at ?? '' }}","isPartOf":{"@id":"{{ url('/') }}/#website"},"primaryImageOfPage":{"@id":"{{ asset('uploads/logo/cybermart7x4.png') }}"},"inLanguage":"vi","breadcrumb":{"@id":"{{ url()->current() }}/#breadcrumb"}},{"@type":"Article","headline":"Tin tức mới nhất về Thương Mại Điện Tử CyberMart cập nhật những thông tin bổ ích!","datePublished":"{{ $newCatefind->created_at ?? '' }}","dateModified":"{{ $newCatefind->updated_at ?? '' }}","publisher":{"@id":"{{ url('/') }}/#organization"},"description":"Cybermart - Cập nhật những {{ $newCatefind->name }} mới nhất về Thương Mại Điện Tử CyberMart cập nhật những thông tin bổ ích!","name":"{{ $newCatefind->name }}","@id":"{{ url()->current() }}/#richSnippet","isPartOf":{"@id":"{{ url()->current() }}/#webpage"},"image":"{{ asset('uploads/logo/cybermart7x4.png') }}","inLanguage":"vi","mainEntityOfPage":{"@id":"{{ url()->current() }}/#webpage"}},{"@type":"Organization","@id":"{{ url('/') }}/#organization","name":"{{ config('app.name') ?? 'Cybermart' }}","url":"{{ url('/') }}","logo":{"@id":"{{ asset('uploads/logo/cybermart7x4.png') }}","url":"{{ asset('uploads/logo/cybermart7x4.png') }}","width":"700","height":"400","caption":"Logo của CyberMart"}}]}</script>  
@endsection
@section('content')
    <div class="wrapper-post_page container">
        <div class="page-body sales-body row py-4 mt-5">
            <div class="sale-sidebar col-lg-3 col-sm-12">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid p-0">
                        <button class="d-lg-none border-0 button-navbar-mobie ms-3 py-2 fs-5" type="button"
                            data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="navbar-brand d-lg-none me-0">
                            <div class="input-group">
                                <input type="text" class="form-control rounded-start-5" placeholder="Tìm kiếm">
                                <button class="btn btn-outline-primary rounded-end-5" type="button"><i
                                        class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                        </div>
                        @include('frontend.post.partials.sideBarCate')
                    </div>
                </nav>
            </div>
            <div class="post-content col-lg-9 col-sm-12 mt-sm-4">
                <div class="content_head-page row mb-5">
                    <div class="col-lg-8 col-sm-12 text-center text-lg-start">
                        <h2>{{ $newCatefind->name }}</h2>
                    </div>
                </div>
                <div class="post-list row">
                    @include('frontend.post.partials.postItem')
                </div>
            </div>
        </div>
    </div>
@endsection
