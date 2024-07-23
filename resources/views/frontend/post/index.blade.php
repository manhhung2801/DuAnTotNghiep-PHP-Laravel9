@extends('frontend.layouts.master')
@section('title', 'Bài viết')

@section('content')
<div class="wrapper-post_page container">
    <div class="page-body sales-body row py-4 mt-5">
        <div class="sale-sidebar col-lg-3 col-sm-12">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid p-0">
                    <button class="d-lg-none border-0 button-navbar-mobie ms-3 py-2 fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar-brand d-lg-none me-0">
                        <div class="input-group">
                            <input type="text" class="form-control rounded-start-5" placeholder="Tìm kiếm">
                            <button class="btn btn-outline-primary rounded-end-5" type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </div>
                    @include('frontend.post.partials.sideBarCate')
                </div>
            </nav>
        </div>
        <div class="post-content col-lg-9 col-sm-12 mt-sm-4">
            <div class="content_head-page row mb-5">
                <div class="col-lg-8 col-sm-12 text-center text-lg-start">
                    <h2>{{$newCatefind->name}}</h2>
                </div>
            </div>
            <div class="post-list row">
                @include('frontend.post.partials.postItem')
            </div>
        </div>
    </div>
</div>
@endsection
