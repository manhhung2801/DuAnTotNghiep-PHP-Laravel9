@extends('frontend.layouts.master')
@section('title', 'Liên hệ')

@section('content')
<style>
    .frame-contact {
        padding: 15px 20px;
        border-radius: 12px;
        background-color: #f5f5f5;
    }
</style>
<div class="wrapper-contact_page layout-collection">
    <section class="bread-crumb">
        <section class="bread-crumb ">
            <div class="container ">
                <ul class="breadcrumb d-flex ">
                    <li class="home">
                        <a href="#" title="Trang chủ"><span>Trang chủ</span></a>
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
                    @foreach ($storeAddress as $item)
                    <div class="row">
                        <div class="col-lg-6 col-12 col-md-6">
                            <div class="contact">
                                <div class="name_address">
                                    <h4 class="d-none d-md-block  ">{{$item->store_name}}</h4>
                                    <h4 class="d-md-none text-center mb-2 ">{{$item->store_name}}</h4>
                                </div>
                                <div class="des_foo mb-3">
                                    Hệ thống cửa hàng <b>CYBERMART</b> chuyên bán lẻ điện thoại, máy tính laptop, smartwatch, smarthome, phụ kiện chính hãng - Giá tốt, giao miễn phí.
                                </div>
                                <div class="address fw-bold">
                                    {{$item->province}}
                                </div>
                                <div class="time_work">
                                    <div class=" mb-1 ">
                                        <div><b class="font-weight-light">Địa chỉ:</b> {{$item->address}}, {{$item->ward}}, {{$item->district}}, {{$item->province}}</div>
                                    </div>
                                    <div class=" mb-1">
                                        <div><b>Hotline:</b>
                                            <a class="fone text-decoration-none text-danger hover-text-dark" href="tel:{{$item->province}}">{{$item->phone}}</a>
                                        </div>
                                    </div>
                                    <div class=" mb-1">
                                        <div> <b>Email:</b> <a href="mailto:{{$item->email}}" title="{{$item->email}}" class="text-decoration-none  text-danger font-weight-light">{{$item->email}}</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12 col-md-6 mt-2">
                            <form class="mx-auto">
                                <fieldset class="row frame-contact">
                                    <h4 class="text-center mt-2 col-lg-12"><b>LIÊN HỆ VỚI CHÚNG TÔI</b></h4>
                                    <div class="mb-3 text-start col-lg-6">
                                        <input type="text" class="form-control" placeholder="Họ và tên">
                                    </div>
                                    <div class="mb-3 text-start col-lg-6">
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="mb-3 text-start col-lg-12">
                                        <input type="email" class="form-control" placeholder="Điện thoại">
                                    </div>
                                    <div class="mb-3 text-start col-lg-12">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Nội dung"></textarea>
                                    </div>
                                    <div class="col-lg-12">

                                        <button type="submit" class="btn btn-dark">Gửi tin nhắn <i class="fa-solid fa-chevron-right"></i></button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <hr>
                    @endforeach
                </div>
            </div>
        </main>
    </section>

</div>
@endsection