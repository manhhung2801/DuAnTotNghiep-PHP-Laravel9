@extends('frontend.layouts.master')
@section('title', 'Không tìm thấy trang')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center my-3">
                <div class="page-title mt-1" style="font-size: 2rem;">
                    <img src="https://shopdunk.com/images/uploaded-source/bn_404.png" alt="image 404" class="img-fluid">
                    <h1 class="fs-4">Oops! Trang bạn tìm kiếm không tồn tại.</h1>
                </div>
                <div class="page-body">
                    <div class="topic-block">
                        <div class="topic-block-body">
                            <p style="font-size: 1rem; color: #333;">Website CyberMart mới nâng cấp,
                                do đó có một số link có thể được thay đổi.<br>Bạn vui lòng trở lại trang chủ, thử tìm
                                kiếm với từ khóa khác hoặc tiếp tục mua sắm!</p>
                        </div>
                    </div>
                </div>
                <a class="btn_pagenotfound" href="/"
                    style=" padding: 0.5rem 1rem; background-color: #007bff; color: #fff; text-decoration: none; border-radius: 4px; margin-top: 1rem;">Trở
                    về trang chủ</a>
            </div>
        </div>
    </div>
@endsection
