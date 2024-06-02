@extends('frontend.layouts.master')

@section('title', 'Trang Chủ')

@section('content')
<div class="wrapper-home-page">
    <div class="slideshow-home-page pb-4">
        @include('frontend.home.partials.slideShow')
    </div>
    <div class="content-home-page">
        <div class="scroll_animation section_services">
            @include('frontend.home.partials.services')
        </div>
        <div class="section-categories-hot pt-5">
            @include('frontend.home.partials.categoryHot')
        </div>
        <div class="section-category-product">
            @include('frontend.home.partials.productByCategory')
        </div>
        <div class="scroll_animation section-banner_new pt-5">
            @include('frontend.home.partials.banner')
        </div>
        <div class="scroll_animation select-news pt-5">
            @include('frontend.home.partials.news')
        </div>
    </div>
</div>
@endsection