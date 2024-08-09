@extends('frontend.layouts.master')
@section('title', $PagesDetail->seo_title ?? $PagesDetail->name)
@section('description',
    $PagesDetail->seo_description ??
    'CyberMart - Hệ thống cửa hàng bán lẻ điện thoại, máy tính
    laptop, smartwatch, gia dụng, thiết bị IT, phụ kiện chính hãng - Giá tốt, trả góp 0%, giao miễn phí.')
@section('schema')
<script type="application/ld+json">{"@context":"https://schema.org","@graph":[{"@type":"WebSite","@id":"{{ url('/') }}/#website","url":"{{ url('/') }}","name":"{{ config('app.name') ?? 'Cybermart' }}","alternateName":"CyberMart - Hệ thống cửa hàng bán lẻ điện thoại, máy tính laptop.","publisher":{"@id":"{{ url('/') }}/#organization"},"inLanguage":"vi"},{"@type":"ImageObject","@id":"{{ asset('uploads/logo/cybermart7x4.png') }}","url":"{{ asset('uploads/logo/cybermart7x4.png') }}","width":"700","height":"400","caption":"Logo của CyberMart","inLanguage":"vi"},{"@type":"BreadcrumbList","@id":"{{ url()->current() }}/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"item":{"@id":"{{ url('/') }}","name":"Trang chủ"}},{"@type":"ListItem","position":2,"item":{"@id":"{{ url()->current() }}","name":"{{ $PagesDetail->name }}"}}]},{"@type":"WebPage","@id":"{{ url()->current() }}/#webpage","url":"{{ url()->current() }}","name":"{{ $PagesDetail->name }}","datePublished":"{{ $PagesDetail->created_at ?? '' }}","dateModified":"{{ $PagesDetail->updated_at ?? '' }}","isPartOf":{"@id":"{{ url('/') }}/#website"},"primaryImageOfPage":{"@id":"{{ asset('uploads/logo/cybermart7x4.png') }}"},"inLanguage":"vi","breadcrumb":{"@id":"{{ url()->current() }}/#breadcrumb"}},{"@type":"Article","headline":"{{ $PagesDetail->seo_title ?? $PagesDetail->name }}","datePublished":"{{ $PagesDetail->created_at ?? '' }}","dateModified":"{{ $PagesDetail->updated_at ?? '' }}","publisher":{"@id":"{{ url('/') }}/#organization"},"description":"{{ $PagesDetail->seo_description ?? 'CyberMart - Hệ thống cửa hàng bán lẻ điện thoại, máy tính laptop.'}}","name":"{{ $PagesDetail->name }}","@id":"{{ url()->current() }}/#richSnippet","isPartOf":{"@id":"{{ url()->current() }}/#webpage"},"image":"{{ asset('uploads/logo/cybermart7x4.png') }}","inLanguage":"vi","mainEntityOfPage":{"@id":"{{ url()->current() }}/#webpage"}},{"@type":"Organization","@id":"{{ url('/') }}/#organization","name":"{{ config('app.name') ?? 'Cybermart' }}","url":"{{ url('/') }}","logo":{"@id":"{{ asset('uploads/logo/cybermart7x4.png') }}","url":"{{ asset('uploads/logo/cybermart7x4.png') }}","width":"700","height":"400","caption":"Logo của CyberMart"}}]}</script>
@endsection
@section('content')
    <style>
        a {
            color: black
        }

        a:hover {
            color: red;
            transition: 0.5s;
        }
    </style>
    <div class="bread-crumb">
        <section class="bread-crumb">
            <div class="container ">
                <ul class="breadcrumb d-flex ">
                    <li class="home">
                        <a href="/" title="Trang chủ"><span>Trang chủ</span></a>
                        <span class="mr_lr mx-2"><i class="fas fa-angle-right"></i></span>
                        <span class="text-danger">@yield('title')</span>
                    </li>
                </ul>
            </div>
        </section>
        <main>
            <div class="layout-contact">
                <div class="container">
                    <div class="row">
                        <h1 class="fs-3"><a href="" class="text-decoration-none ">{{ $PagesDetail->name }}</a></h1>
                        {!! $PagesDetail->long_description !!}
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
