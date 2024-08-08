@extends('frontend.layouts.master')
@section('title', 'Tin tức - Cybermart cập nhập tin tức công nghệ')
@section('description', 'Cybermart, hệ thống bán lẻ điện thoại, máy tính và thiết bị công nghệ hàng đầu tại Việt Nam, chúng tôi luôn cập nhật những tin tức công nghệ mới nhất và đáng chú ý nhất.')
@section('schema')
<script type="application/ld+json">{"@context":"https://schema.org","@graph":[{"@type":"WebSite","@id":"{{ url('/') }}/#website","url":"{{ url('/') }}","name":"{{ config('app.name') ?? 'Cybermart' }}","alternateName":"CyberMart - Hệ thống cửa hàng bán lẻ điện thoại, máy tính laptop.","publisher":{"@id":"{{ url('/') }}/#organization"},"inLanguage":"vi"},{"@type":"ImageObject","@id":"{{ asset('uploads/logo/cybermart7x4.png') }}","url":"{{ asset('uploads/logo/cybermart7x4.png') }}","width":"700","height":"400","caption":"CyberMart - Hệ thống cửa hàng bán lẻ điện thoại, máy tính laptop.","inLanguage":"vi"},{"@type":"BreadcrumbList","@id":"{{ url()->current() }}/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"item":{"@id":"{{ url('/') }}","name":"Trang chủ"}},{"@type":"ListItem","position":2,"item":{"@id":"{{ url()->current() }}","name":"Tin tức"}}]},{"@type":"WebPage","@id":"{{ url()->current() }}/#webpage","url":"{{ url()->current() }}","name":"Tin tức mới nhất về Thương Mại Điện Tử CyberMart cập nhật những thông tin bổ ích!","datePublished":"2024-07-10T15:26:47+07:00","dateModified":"2024-07-15T15:26:47+07:00","isPartOf":{"@id":"{{ url('/') }}/#website"},"primaryImageOfPage":{"@id":"{{ asset('uploads/logo/cybermart7x4.png') }}"},"inLanguage":"vi","breadcrumb":{"@id":"{{ url()->current() }}/#breadcrumb"}},{"@type":"Article","headline":"Tin tức mới nhất về Thương Mại Điện Tử CyberMart cập nhật những thông tin bổ ích!","datePublished":"2024-07-10T15:26:47+07:00","dateModified":"2024-07-15T15:26:47+07:00","publisher":{"@id":"{{ url('/') }}/#organization"},"description":"Cybermart - Cập nhật những tin tức, tin tức mới nhất về Thương Mại Điện Tử CyberMart cập nhật những thông tin bổ ích!","name":"Tin tức mới nhất về Thương Mại Điện Tử CyberMart cập nhật những thông tin bổ ích!","@id":"{{ url()->current() }}/#richSnippet","isPartOf":{"@id":"{{ url()->current() }}/#webpage"},"image":"{{ asset('uploads/logo/cybermart7x4.png') }}","inLanguage":"vi","mainEntityOfPage":{"@id":"{{ url()->current() }}/#webpage"}},{"@type":"Organization","@id":"{{ url('/') }}/#organization","name":"{{ config('app.name') ?? 'Cybermart' }}","url":"{{ url('/') }}","logo":{"@id":"{{ asset('uploads/logo/cybermart7x4.png') }}"}}]}</script>
@endsection


@section('content')
    <div class="container-fluid m-0 p-0">
        <section class="bread-crumb">
            <div class="container ">
                <ul class="breadcrumb d-flex ">
                    <li class="home">
                        <a href="/" title="Trang chủ"><span>Trang chủ</span></a>
                        <span class="mr_lr mx-2"><i class="fas fa-angle-right"></i></span>
                        <strong>
                            <span>Tin tức</span>
                        </strong>
                    </li>
                </ul>
            </div>
        </section>
        <div class="w-100" style="margin: 20px 0px;">
            <h2 class="text-center w-100 mt-2"><b>Tin tức</b></h2>
        </div>
        <div class="container">
            <!-- slide  -->
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    @foreach ($slideposts as $item)
                        <div class="carousel-item active rounded-4">
                            <a
                                href="{{ route('news.details', ['slugs_cate' => $item->Post_categories->slug, 'slugs' => $item->slug]) }}">
                                <img src="{{ asset('uploads/post/' . $item->image) }}" class="d-block w-100 rounded-4"
                                    alt="..." style="height: 500px;object-fit: cover">
                            </a>

                        </div>
                    @endforeach


                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- slide end  -->

            <!-- categories post -->
            {{-- <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 mt-3"> --}}
            <div class="col-12 d-flex flex-wrap justify-content-center gx-2 mt-3">
                @foreach ($newsCate as $cate)
                    <div class="col-{{ 12 / $newsCate->count() }} text-center ">
                        <a style="color: #515154; text-decoration: none;"
                            href="{{ route('news.newsSiteType', ['slugs' => $cate->slug]) }}">
                            <div class="p-2 ">
                                {{ $cate->name }}
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
            <!-- categories end -->

            <!-- product post -->
            @foreach ($newsCate as $cate)
                @if ($cate->posts->count() > 0)
                    <div class="w-100" style="margin: 40px 0px;">
                        <h2 class=""><b>{{ $cate->name }}</b></h2>
                        <div class="row row-cols-2">
                            @foreach ($newsDetail[$cate->id] as $postsNews)
                                <div class="col mt-3">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <img src="{{ asset('uploads/post/' . $postsNews->image) }}" alt=""
                                                class="w-100" style="height: 150px; object-fit:cover;">
                                        </div>
                                        <div class="col-lg-6">
                                            <a href="{{ route('news.details', ['slugs_cate' => $postsNews->Post_categories->slug, 'slugs' => $postsNews->slug]) }}"
                                                style="
                                        width: 98%;
                                        text-decoration: none;
                                        color: black;
                                        display: -webkit-box;
                                        line-height: 1.2;
                                        -webkit-line-clamp: 3;
                                        -webkit-box-orient: vertical;
                                        overflow: hidden;
                                        text-overflow: ellipsis;">
                                                <b>{{ $postsNews->title }}</b>
                                            </a>

                                            <div style="margin-top:10px;">
                                                <span> <i class="fa-regular fa-user"></i>
                                                    {{ $postsNews->User->name }}</span>
                                            </div>
                                            <div style="margin-top:10px;">
                                                <span><i class="fa-solid fa-calendar-days"></i>
                                                    {{ date('d/m/Y', strtotime($postsNews->created_at)) }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class=" show-all text-center mt-5 show">
                            <a class="px-5 py-2 btn btn-outline-dark "
                                href="{{ route('news.newsSiteType', ['slugs' => $cate->slug]) }}">Xem tất cả <i
                                    class="fa-regular fa-chevron-right"></i></a>
                        </div>

                    </div>
                @endif
            @endforeach


            <!-- product post end -->

        </div>
    </div>





@endsection
