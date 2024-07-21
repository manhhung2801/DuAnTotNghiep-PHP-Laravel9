@extends('frontend.layouts.master')
@section('title', 'Không tìm thấy trang')

@section('content')
    <div class="master-wrapper-content d-flex justify-content-center mb-3" style="overflow: hidden">
        <div class="master-column-wrapper text-center">
            <div class="center-1">
                <div class="page not-found-page text-center p-1">
                    <img src="https://shopdunk.com/images/uploaded-source/bn_404.png" alt="" class="img_notfound">
                    <div class="page-title mt-1" style="font-size: 2rem;"> <!-- Example: Increase font size for page title -->
                        <h1 class="fs-4">Oops! Trang bạn tìm kiếm không tồn tại.</h1>
                    </div>
                    <div class="page-body"
                        style="padding: 10px; background-color: #f0f0f0; ">
                        <div class="topic-block" style="border: 1px solid #ccc; border-radius: 4px; padding: 10px;">
                            <div class="topic-block-body">
                                <p style="text-align: center; font-size: 1rem; color: #333;">Website CyberMart mới nâng cấp,
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
    </div>
</div>
@endsection


