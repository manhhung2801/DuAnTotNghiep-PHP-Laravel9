@extends('frontend.layouts.master')
@section('title', 'Không tìm thấy trang')

@section('content')
<div class="master-wrapper-content d-flex justify-content-center mb-3">
    <div class="master-column-wrapper text-center">
        <div class="center-1">
            <div class="page not-found-page text-center p-1">
                <img src="https://shopdunk.com/images/uploaded-source/bn_404.png" alt="" class="img_notfound">
                <div class="page-title mt-1">
                    <h1 class="fs-4">Oops! Trang bạn tìm kiếm không tồn tại.</h1>
                </div>
                <div class="page-body">
                    <div class="topic-block ">
                        <div class="topic-block-body ">
                            <p style="text-align: center;">Website CyberMart mới nâng cấp, do đó có một số link có thể được thay đổi.<br>Bạn vui lòng trở lại trang chủ, thử tìm kiếm với từ khóa khác hoặc tiếp tục mua sắm!</p>
                        </div>
                    </div>

                </div>
                <a class="btn_pagenotfound" href="/">Trở về trang chủ</a>
            </div>
        </div>
    </div>
</div>
@endsection


