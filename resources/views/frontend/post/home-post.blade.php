@extends('frontend.layouts.master')
@section('title', 'Bài viết')

@section('content')

<div class="container-fluid m-0 p-0">
    <section class="bread-crumb">
        <div class="container ">
            <ul class="breadcrumb d-flex ">
                <li class="home">
                    <a href="#" title="Trang chủ"><span>Trang chủ</span></a>
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
        <div id="carouselExampleCaptions " class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('uploads/post/media_6678459ac8cc9.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('uploads/post/media_6678459ac8cc9.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('uploads/post/media_6678459ac8cc9.jpg')}}" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- slide end  -->

        <!-- categories post -->
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 mt-3">
            @foreach($newsCate as $cate)
            <div class="col" style="padding: 10px; text-align: center;">
                <a style="text-decoration: none; color: black;" href="{{route('news.newsSiteType',['slugs' =>$cate->slug ])}}">
                    <div class="border border-primary rounded-3 p-2">
                        {{$cate->name}}
                    </div>
                </a>
            </div>
            @endforeach

        </div>
        <!-- categories end -->

        <!-- product post -->
        @foreach($newsCate as $cate)
        @if($cate->posts->count() > 0)
        <div class="w-100" style="margin: 40px 0px;">
            <h2 class=""><b>{{$cate->name}}</b></h2>
            <div class="row row-cols-2">
                @foreach($newsDetail[$cate->id] as $postsNews)
            
                <div class="col mt-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="{{ asset('uploads/post/' . $postsNews->image) }}" alt="" class="w-100" style="height: 150px;">
                        </div>
                        <div class="col-lg-6">
                            <a href="{{route('news.details', [ 'slugs_cate' =>$postsNews->Post_categories->slug, 'slugs' =>$postsNews->slug ])}}" style="
                                        width: 98%;
                                        text-decoration: none;
                                        color: black;
                                        display: -webkit-box;
                                        line-height: 1.2;
                                        -webkit-line-clamp: 3;
                                        -webkit-box-orient: vertical;
                                        overflow: hidden;
                                        text-overflow: ellipsis;">
                                <b>{{$postsNews->title}}</b>
                            </a>
                        </div>
                    </div>
                </div>
          
                @endforeach
            </div>
            <p class="text-center mt-5">
                <a href="{{route('news.newsSiteType',['slugs' =>$cate->slug ])}}" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Xem tất cả {{$cate->name}}</a>
            </p>
        </div>
        @endif
        @endforeach


        <!-- product post end -->

    </div>
</div>





@endsection