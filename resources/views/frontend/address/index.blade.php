@extends('frontend.layouts.master')
@section('title', 'Địa chỉ cửa hàng')
@section('content')
    <section class="bread-crumb">
        <section class="bread-crumb ">
            <div class="container ">
                <ul class="breadcrumb d-flex ">
                    <li class="home">
                        <a href="/" title="Trang chủ"><span>Trang chủ</span></a>
                        <span class="mr_lr mx-1"><i class="fas fa-angle-right"></i></span>
                        <strong>
                            <span> @yield('title')</span>
                        </strong>
                    </li>
                </ul>
            </div>
        </section>
        <main>
            <div class="layout-contact">
                <div class="container">
                    <h1 class="visually-hidden">Địa chỉ CyberMart - Hệ thống thương mại điện tử hàng đầu Việt Nam</h1>
                    <div class="row">
                        @foreach ($storeAddress as $item)
                            <div class="col-lg-12 col-12 col-md-12 ">
                                <div class="contact ">
                                    <div class="name_address">
                                        <h2 class="d-none d-md-block fs-4">{{ $item->store_name }}</h2>
                                        <h2 class="d-md-none text-center mb-2 fs-4">{{ $item->store_name }}</h2>
                                    </div>
                                    <div class="des_foo mb-3">
                                        {{ $item->description }}
                                    </div>
                                    <div class="address fw-bold">
                                        {{ $item->province }}
                                    </div>
                                    <div class="time_work">
                                        <div class=" mb-1 ">
                                            <div><b class="font-weight-light">Địa chỉ:</b> {{ $item->address }},
                                                {{ $item->ward }}, {{ $item->district }}, {{ $item->province }}</div>
                                        </div>
                                        <div class=" mb-1">
                                            <div><b>Hotline:</b>
                                                <a class="fone text-decoration-none text-danger hover-text-dark"
                                                    href="tel:{{ $item->province }}">{{ $item->phone }}</a>
                                            </div>
                                        </div>
                                        <div class=" mb-1">
                                            <div> <b>Email:</b> <a href="mailto:{{ $item->email }}"
                                                    title="{{ $item->email }}"
                                                    class="text-decoration-none  text-danger font-weight-light">{{ $item->email }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </main>
    </section>
@endsection
