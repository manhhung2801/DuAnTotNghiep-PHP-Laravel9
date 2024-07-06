@extends('frontend.layouts.master')
@section('title', 'Bài viết')

@section('content')
<style>
    .eidt-description {
        border: 3px solid #c7abab;
        ;
        padding: 20px;
        border-radius: 20px;
    }

    .eidt-description div p span {
        line-height: 27px;
        font-size: 20px;

    }
</style>
<div class="bread-crumb">
    <section class="bread-crumb">
        <div class="container ">
            <ul class="breadcrumb d-flex ">
                <li class="home">
                    <a href="#" title="Trang chủ"><span>Trang chủ</span></a>
                    <span class="mr_lr mx-2"><i class="fas fa-angle-right"></i></span>
                    <span> {{$newsdetai->Post_categories->name}}</span>
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
                        <div class="right-content col-lg-12 col-12">
                            <div class="article-details clearfix">
                                <p class="article-title fs-3" style="text-align: center; "><b style="font-size: 27px;">{{$newsdetai->title}}</b></p>
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
                                <div class="article-image " style="text-align: center;">
                                    <img class="img-fluid loaded" style="width: 100%; border-radius: 16px;max-height: 415px;object-fit: cover;" src="{{asset('uploads/post')}}/{{ $newsdetai->image}}">
                                </div>
                                <div class="rte w-100 d-block mt-5 eidt-description">
                                    {!! $newsdetai->content !!}
                                </div>
                            </div>
                            <div class="blog_related" style="margin: 20vh 0;">
                                <div class="title" style="font-size: 1.8rem; font-weight: 700; margin-bottom: 20px">Tin tức liên quan</div>
                                <div class="row">
                                    @foreach($list_related_news as $itemNew)
                                    @if($itemNew->id != $newsdetai->id)
                                    <div class="col-lg-3 col-md-3 col-ms-6 col-6 mb-4">
                                        <div class="news-item">
                                            <a href="#" class="list-group-item">
                                                <div class="card border-0">
                                                    <div style="height: 200px;">

                                                        <img src="{{asset('uploads/post')}}/{{ $itemNew->image}}" class="card-img-top h-100" alt="{{$itemNew->name}}">
                                                    </div>
                                                    <div class="card-body px-3">
                                                        <a href="{{route('news.details', [ 'slugs_cate' =>$itemNew->Post_categories->slug, 'slugs' =>$itemNew->slug ])}}" style="text-decoration: none; color: black;">
                                                            <h3 class="news-title line-clamp line-clamp-2 ">
                                                                {{$itemNew->title}}
                                                            </h3>
                                                        </a>
                                                        <span class="news-desc line-clamp line-clamp-3 mb-1">
                                                            {!!$itemNew->description!!}
                                                        </span>
                                                        <span class="news-desc_item"><i class="fa-solid fa-clock"></i>
                                                            {{ $itemNew->created_at->format('d/m/Y') }}</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach

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