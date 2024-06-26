@extends('frontend.layouts.master')
@section('title', 'Bài viết')

@section('content')
<div class="bread-crumb">
    <section class="bread-crumb">
        <div class="container ">
            <ul class="breadcrumb d-flex ">
                <li class="home">
                    <a href="#" title="Trang chủ"><span>Trang chủ</span></a>
                    <span class="mr_lr mx-2"><i class="fas fa-angle-right"></i></span>
                    <span> iPhone</span>
                    <span class="mr_lr"><i class="fas fa-angle-right"></i></span>
                    <strong>
                        <span>{{$newsdetai->title}}</span>
                    </strong>
                </li>
            </ul>
        </div>
    </section>
    <section class="blogpage">
        <div class="container layout-article">
            <div class="bg_blog">
                <article class="article-main">
                    <div class="row d-flex">
                        <div class="right-content col-lg-9 col-12">
                            <div class="article-details clearfix">
                                <h1 class="article-title fs-3">{{$newsdetai->title}}</h1>
                                <div class="posts d-flex mb-3">
                                    <div class="time-post ">
                                        <i class="fa-regular fa-clock"></i>
                                        <span>{{$newsdetai->created_at->format('d/m/Y') }}</span>
                                    </div>
                                    <div class="time-post mx-3">
                                        <i class="fa-solid fa-user"></i>
                                        <span>{{$newsdetai->User->name }}</span>
                                    </div>
                                </div>
                                <div class="article-image ">
                                    <img class="img-fluid loaded" src="{{asset('uploads/post')}}/{{ $newsdetai->image}}">
                                </div>
                                <div class="rte w-100 d-block">
                                    {!! $newsdetai->description !!}
                                </div>
                            </div>
                            <div class="blog_related" style="margin: 20vh 0;">
                                <div class="title" style="font-size: 1.8rem; font-weight: 700; margin-bottom: 20px">Tin tức liên quan</div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-ms-6 col-6 mb-4">
                                        <div class="news-item">
                                            <a href="#" class="list-group-item">
                                                <div class="card border-0">
                                                    <img src="//bizweb.dktcdn.net/100/480/632/articles/010.jpg?v=1682692969433" class="card-img-top" alt="iphone">
                                                    <div class="card-body px-3">
                                                        <h3 class="news-title line-clamp line-clamp-2 ">'Thò thụt': iPhone đã đúng khi không đụng đến tính năng này suốt những năm qua - Đình đám một thời nay đã chết yểu
                                                        </h3>
                                                        <p class="news-desc line-clamp line-clamp-3 mb-1">iPhone vẫn kiên định với thiết kế tai thỏ suốt nhiều năm dù bị nhiều người dùng chỉ trích. Thế nhưng, có vẻ như Apple một lần nữa đã sáng suốt. Cái chết của camera thò thụt...
                                                        </p>
                                                        <span class="news-desc_item"><i class="fa-solid fa-clock"></i>
                                                            20/05/2024</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-ms-6 col-6 mb-4">
                                        <div class="news-item">
                                            <a href="#" class="list-group-item">
                                                <div class="card border-0">
                                                    <img src="//bizweb.dktcdn.net/100/480/632/articles/010.jpg?v=1682692969433" class="card-img-top" alt="iphone">
                                                    <div class="card-body px-3">
                                                        <h3 class="news-title line-clamp line-clamp-2 ">'Thò thụt': iPhone đã đúng khi không đụng đến tính năng này suốt những năm qua - Đình đám một thời nay đã chết yểu
                                                        </h3>
                                                        <p class="news-desc line-clamp line-clamp-3 mb-1">iPhone vẫn kiên định với thiết kế tai thỏ suốt nhiều năm dù bị nhiều người dùng chỉ trích. Thế nhưng, có vẻ như Apple một lần nữa đã sáng suốt. Cái chết của camera thò thụt...
                                                        </p>
                                                        <span class="news-desc_item"><i class="fa-solid fa-clock"></i>
                                                            20/05/2024</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-ms-6 col-6 mb-4">
                                        <div class="news-item">
                                            <a href="#" class="list-group-item">
                                                <div class="card border-0">
                                                    <img src="//bizweb.dktcdn.net/100/480/632/articles/010.jpg?v=1682692969433" class="card-img-top" alt="iphone">
                                                    <div class="card-body px-3">
                                                        <h3 class="news-title line-clamp line-clamp-2 ">'Thò thụt': iPhone đã đúng khi không đụng đến tính năng này suốt những năm qua - Đình đám một thời nay đã chết yểu
                                                        </h3>
                                                        <p class="news-desc line-clamp line-clamp-3 mb-1">iPhone vẫn kiên định với thiết kế tai thỏ suốt nhiều năm dù bị nhiều người dùng chỉ trích. Thế nhưng, có vẻ như Apple một lần nữa đã sáng suốt. Cái chết của camera thò thụt...
                                                        </p>
                                                        <span class="news-desc_item"><i class="fa-solid fa-clock"></i>
                                                            20/05/2024</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-ms-6 col-6 mb-4">
                                        <div class="news-item">
                                            <a href="#" class="list-group-item">
                                                <div class="card border-0">
                                                    <img src="//bizweb.dktcdn.net/100/480/632/articles/010.jpg?v=1682692969433" class="card-img-top" alt="iphone">
                                                    <div class="card-body px-3">
                                                        <h3 class="news-title line-clamp line-clamp-2 ">'Thò thụt': iPhone đã đúng khi không đụng đến tính năng này suốt những năm qua - Đình đám một thời nay đã chết yểu
                                                        </h3>
                                                        <p class="news-desc line-clamp line-clamp-3 mb-1">iPhone vẫn kiên định với thiết kế tai thỏ suốt nhiều năm dù bị nhiều người dùng chỉ trích. Thế nhưng, có vẻ như Apple một lần nữa đã sáng suốt. Cái chết của camera thò thụt...
                                                        </p>
                                                        <span class="news-desc_item"><i class="fa-solid fa-clock"></i>
                                                            20/05/2024</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="blog_left_base col-lg-3 col-12 ">
                            <div class="side-right-stick ">
                                @include('frontend.post.partialsPost.sideBar')
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
</div>
@endsection