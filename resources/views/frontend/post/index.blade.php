@extends('frontend.layouts.master')
@section('title', 'Bài viết')

@section('content')
<div class="wrapper-post_page container">
    <div class="page-body sales-body row py-4">
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
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <div class="list-group">
                            <div class="slidebar_list-tem">
                                <a href="#" class="list-group-item list-group-item-action border-0 fw-semibold"><i class="me-2 fa-solid fa-house"></i> Tin tức</a>
                            </div>
                            <div class="slidebar_list-tem">
                                <a href="#" class="list-group-item list-group-item-action border-0 fw-semibold"><i class="me-2 fa-regular fa-newspaper"></i> Tin tức Apple</a>
                            </div>
                            <div class="slidebar_list-tem">
                                <a href="#" class="list-group-item list-group-item-action border-0 fw-semibold"><i class="me-2 fa-regular fa-pen-to-square"></i> Bài viết review</a>
                            </div>
                            <div class="slidebar_list-tem">
                                <a href="#" class="list-group-item list-group-item-action border-0 fw-semibold"><i class="me-2 fa-regular fa-earth-americas"></i> Khám phá</a>
                            </div>
                            <div class="slidebar_list-tem">
                                <a href="#" class="list-group-item list-group-item-action border-0 fw-semibold"><i class="me-2 fa-solid fa-wand-magic-sparkles"></i> Thủ thuật</a>
                            </div>
                            <div class="slidebar_list-tem">
                                <a href="#" class="list-group-item list-group-item-action border-0 fw-semibold"><i class="me-2 fa-solid fa-tags"></i> Khuyến mại</a>
                            </div>
                            <div class="slidebar_list-tem">
                                <a href="#" class="list-group-item list-group-item-action border-0 fw-semibold"><i class="me-2 fa-regular fa-lightbulb"></i> Tin khác</a>
                            </div>
                            <div class="slidebar_list-tem">
                                <a href="#" class="list-group-item list-group-item-action border-0 fw-semibold"><i class="me-2 fa-regular fa-camera"></i> Video</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div class="sale-content col-lg-9 col-sm-12 mt-sm-4">
            <div class="content_head-page row">
                <div class="col-lg-8 col-sm-12 text-center text-lg-start">
                    <h2>Khuyến mại</h2>
                </div>
                <div class="col-lg-4 d-none d-lg-block">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control rounded-start-5" placeholder="Tìm kiếm">
                        <button class="btn btn-outline-primary rounded-end-5" type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </div>
            </div>
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
                                        20/05/2024<span>
                                        </span></span>
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
                                        20/05/2024<span>
                                        </span></span>
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
                                        20/05/2024<span>
                                        </span></span>
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
                                        20/05/2024<span>
                                        </span></span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection