@extends('frontend.layouts.master')
@section('title', $informationDetail->seo_title ?? $informationDetail->name)
@section('description', $informationDetail->seo_description ?? 'CyberMart - Hệ thống cửa hàng bán lẻ điện thoại, máy tính laptop, smartwatch, gia dụng, thiết bị IT, phụ kiện chính hãng - Giá tốt, trả góp 0%, giao miễn phí.' )
@section('schema')
    <script type="application/ld+json">
    
</script>
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
                        <h1 class="fs-3"><a href=""
                                class="text-decoration-none ">{{ $informationDetail->name }}</a></h1>
                        {!! $informationDetail->long_description !!}
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
