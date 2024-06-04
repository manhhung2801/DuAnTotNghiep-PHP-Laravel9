@extends('frontend.layouts.master')

@section('title', 'Chi tiết sản phẩm')

@section('content')
<div class="wrapper-detail_page">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-title mb-1">
                <div class="wrapper-details-page">
                    <div class="page-body container my-4">
                        <div class="product-essential row">
                            <div class="gallery col-lg-4 p-0 ">
                                @include('frontend.products.partialsDetail.imageGallery')
                            </div>
                            <div class="overview col-lg-5 px-4">
                                @include('frontend.products.partialsDetail.overView')
                            </div>

                            <div class="slide_bar col-lg-3">
                                @include('frontend.products.partialsDetail.sidebar')
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-lg-12">
                            <div class="description-review-area mt-5 w-100" data-aos="fade-up" data-aos-delay="200">
                                <div class="tab-details row w-100">
                                    <ul class="nav nav-pills mb-3 nav-product-detail justify-content-center align-items-center" id="pills-tab" role="tablist">
                                        <li class="nav-item nav-product-detail-item">
                                            <a class="nav-link active" id="pills-home-tab" data-bs-toggle="tab" href="#select" role="tab-pane" aria-controls="pills-home" aria-selected="true">Mô tả sản phẩm</a>
                                        </li>
                                        <li class="nav-item nav-product-detail-item border rounded-2 mx-2">
                                            <a class="nav-link" id="pills-profile-tab" data-bs-toggle="tab" href="#select1" role="tab-pane" aria-controls="pills-profile" aria-selected="false">Thông số kỹ thuật</a>
                                        </li>
                                        <li class="nav-item nav-product-detail-item  border rounded-2">
                                            <a class="nav-link" id="pills-contact-tab" data-bs-toggle="tab" href="#select2" role="tab-pane" aria-controls="pills-contact" aria-selected="false">Hỏi đáp</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content description-review-bottom bg-secondary-subtle">
                                    <hr>
                                    <!-- Mô tả sản phẩm -->
                                    <div id="select" class="tab-pane active">
                                        @include('frontend.products.partialsDetail.description')
                                    </div>
                                    <!--Mô tả sản phẩm end  -->

                                    <!-- Thông số kỹ thuật -->
                                    <div id="select1" class="tab-pane">
                                        @include('frontend.products.partialsDetail.attribute')
                                    </div>
                                    <!-- Thông số kỹ thuật end -->
                                    <!-- Hỏi đáp -->
                                    <div id="select2" class="tab-pane">
                                        @include('frontend.products.partialsDetail.comment')
                                    </div>
                                    <!-- Hỏi đáp end-->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="detail-category-hot">
                @include('frontend.products.partialsDetail.categoryListHot')
            </div>
        </div>
    </div>
</div>
@endsection