@extends('frontend.layouts.master')
@section('title', 'Liên hệ')

@section('content')
<div class="wrapper-contact_page layout-collection">
    <section class="bread-crumb">
        <div class="container">
            <ul class="breadcrumb">
                <li class="home">
                    <a href="#" title="Trang chủ"><span>Trang chủ</span></a>
                    <span class="mr_lr mx-2"><i class="fas fa-angle-right"></i></span>
                    <strong><span>Viết đánh giá</span></strong>
                </li>
            </ul>
        </div>
    </section>
    <form class="mx-auto text-center" style="width :560px;">
        <fieldset>
            <h2 class="text-center mt-2">Viết đánh giá</h2>
            <div class="mb-3 text-start">
                <label class="form-label">Số điện thoại</label>
                <input type="text" class="form-control" placeholder="Nhập SĐT của bạn">
            </div>
            <div class="mb-3 text-start">
                <label class="form-label">Nội dung đánh giá</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Nhập nội dung"></textarea>
            </div>
            <div class="text-start" style="font-size: small">
                Mọi đánh giá của bạn sẽ được CYBER MART ghi nhận và cải thiện trong thời gian sớm nhất. Xin cảm ơn.
            </div>
        </fieldset>
        <button type="submit" class="btn btn-primary" style="width: 100px">Gửi đi</button>
    </form>
</div>
@endsection