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
                    @foreach ($storeAddress as $item)
                        <div class="row">
                            <div class="col-lg-5 col-12 col-md-5">
                                <div class="contact">
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
                            <div class="col-lg-7 col-12 col-md-7 mt-2">
                                <h4 class="d-md-none text-center mb-2">Google map</h4>
                                <div id="contact_map" class="map">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.518104241413!2d106.650981814287!3d10.771573662229935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ec073c87139%3A0x10ef6fd79e84aa6f!2zNzAgTOG7ryBHaWEsIFBoxrDhu51uZyAxNSwgUXXhuq1uIDExLCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1647783383128!5m2!1svi!2s"
                                        width="100%" height="300" style="border:0;" allowfullscreen=""
                                        loading="img-fluid" class="border-0 rounded-3"></iframe>
                                </div>
                            </div>
                        </div>
                        <hr>
                    @endforeach
                </div>
            </div>
        </main>
    </section>
@endsection
