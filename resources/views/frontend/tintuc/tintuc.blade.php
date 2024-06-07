<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <link rel="stylesheet" href="Font-Awesome-640/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- icon fixed -->
    <div class="contact-position text-light">
        <div class="rounded-circle d-flex align-items-center justify-content-center bg-secondary position-fixed fs-5"
            style="width: 60px; height: 60px; bottom: 50px; right: 20px;">
            <i class="fa-solid fa-comment-dots"></i>
            <span class="position-absolute translate-middle p-2 bg-danger rounded-circle"
                style="right: -6px; top: 8px;">
            </span>
        </div>
        <div class="rounded-circle d-flex align-items-center justify-content-center bg-secondary position-fixed fs-5"
            style="width: 60px; height: 60px; bottom: 130px; right: 20px;">
            <a href="https://zalo.me/0353605901"><i
                    class="fa-sharp fa-solid fa-phone-volume fa-shake text-light"></i></a>
        </div>
        <div class="master-wrapper-page container-fluid p-0">
        </div>
    </div>
    <!-- endIconfixed -->


    <!-- Header -->
    <div class="header-content-all w-100" style="background: #515154;">
        <div class="header-lower container d-flex justify-content-between align-items-center">
            <div class="header-logo">
                <a href="index.html">
                    <img class="object-fit-cover" src="images/uploaded/logo/0012445_Logo_ShopDunk.png"
                        width="173px" alt="">
                </a>
            </div>

            <!-- Nav -->
            <nav class="navbar navbar-expand-lg p-0">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link px-4 py-4 text-light" href="product_list.html">IPhone</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-4 py-4 text-light" href="product_list.html">IPad</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-4 py-4 text-light" href="product_list.html">Mac</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-4 py-4 text-light" href="product_list.html">Watch</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-4 py-4 text-light" href="product_list.html">Âm thanh</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-4 py-4 text-light" href="product_list.html">Phụ kiện</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link px-4 py-4 text-light dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown">
                                    Dịch vụ
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class=" dropdown-item" href="#">Liên hệ</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Tra cứu thần số học</a></li>
                                    <li><a class="dropdown-item" href="#">Thu mới đổ cũ</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link px-4 py-4 text-light dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown">
                                    Tin tức
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">News</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-4 py-4 text-light" href="#">Khuyến mãi</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End nav -->

            <div class="header-links-wrapper text-light d-flex align-items-center">
                <div class="search-icon px-2 py-3">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="nav-link p-0"><i
                            class="fs-5 fa-thin fa-magnifying-glass"></i></button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog mt-0">
                            <div class="modal-content border-0" style="background: none;">
                                <div class="p-3 w-100">
                                    <form action="search.html">
                                        <div class="form-group w-50 m-auto">
                                            <input class="form-control" type="text" placeholder="Tìm kiếm...">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cart-icon position-relative px-2 py-3">
                    <a class="nav-link" href="cart.html">
                        <i class="fs-5 fa-thin fa-bag-shopping"></i>
                        <span
                            class="position-absolute bottom-0 start-100 translate-middle badge text-bg-light fw-light rounded-circle">
                            1
                        </span>
                    </a>
                </div>
                <div class="user-icon px-3 py-3">
                    <!-- user chưa login -->
                    <!-- <a class="nav-link" href="#"><i class="fs-5 fa-thin fa-user"></i></a> -->
                    <!-- end -->

                    <!-- user login -->
                    <div class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <img src="images/uploaded/logo/login.png" alt="" style="margin-bottom: 4px;">
                        </a>
                    </div>

                    
                </div>
                <div class="languague-flag px-2 py-3">
                    <a href="#"><img src="images/uploaded/logo/vn.png" alt="flags"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Endheader -->

    <!-- Main content -->
    <div class="container">
        <div class="group_news">
            <div class="page-title py-3">
                <h1 class="text-center">Tin tức</h1>
            </div>
            <div class="page-body">
                <div class="news-items row">
                    <div class="col-8">
                        <div class="picture_latest_big">
                            <img class="object-fit-cover" src="images/uploaded/0023320_sac-macbook-pro-m3-bao-nhieu-w_(4)_1600.jpg" width="100%" alt="">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="picture_latest_normal float-right">
                            <img src="images/uploaded/0023320_sac-macbook-pro-m3-bao-nhieu-w_(4)_1600.jpg" width="100%" alt="">
                        </div>
                        <div class="picture_latest_normal">
                            <img src="images/uploaded/0023320_sac-macbook-pro-m3-bao-nhieu-w_(4)_1600.jpg" width="100%" alt="">
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    <section class="list-related-tag d-flex justify-content-center align-items-center">
            <button class="btn btn-light"><a href="#" class="fs-6 text-decoration-none text-black p-2">Tin t&#x1EE9;c Apple</a></button>
            <button class="btn btn-light"><a href="#" class="fs-6 text-decoration-none text-black p-2">B&#xE0;i vi&#x1EBF;t review</a></button>
            <button class="btn btn-light"><a href="#" class="fs-6 text-decoration-none text-black p-2">Kh&#xE1;m ph&#xE1;</a></button>
            <button class="btn btn-light"><a href="#" class="fs-6 text-decoration-none text-black p-2">Th&#x1EE7; thu&#x1EAD;t</a></button>
            <button class="btn btn-light"><a href="#" class="fs-6 text-decoration-none text-black p-2">Khuy&#x1EBF;n m&#x1EA1;i</a></button>
            <button class="btn btn-light"><a href="#" class="fs-6 text-decoration-none text-black p-2">Tin kh&#xE1;c</a></button>
            <button class="btn btn-light"><a href="#" class="fs-6 text-decoration-none text-black p-2">iVideo</a></button>
            <button class="btn btn-light"><a href="#" class="fs-6 text-decoration-none text-black p-2">Góc cảm ơn</a></button>
    </section>
        <div class="group-news">
            <div class="page-title py-3">
                <h1>Tin tức Apple</h1>
            </div>
            <div class="page-body">
                <div class="news-item row">
                    <div class="col-lg-6 row p-2">
                        <div class="picture col-6">
                            <img src="images/uploaded/0023320_sac-macbook-pro-m3-bao-nhieu-w_(4)_1600.jpg" width="100%" alt="">
                        </div>
                        <div class="news-head col-6">
                            <a class="news-title text-black text-decoration-none" href="#">Tiêu điểm cuối năm 2023: Tổng hợp sản phẩm MacBook và iMac mới nhất
                                của Apple</a>
                           <div class="news-date"><i class="fa-light fa-calendar-days fa-sm" style="color: #74C0FC;"></i>  31/10/2023</div>
                        </div>
                    </div>
                    <div class="col-lg-6 row p-2">
                        <div class="picture col-6">
                            <img src="images/uploaded/0023320_sac-macbook-pro-m3-bao-nhieu-w_(4)_1600.jpg" width="100%" alt="">
                        </div>
                        <div class="news-head col-6">
                            <a class="news-title text-black text-decoration-none" href="#">Tiêu điểm cuối năm 2023: Tổng hợp sản phẩm MacBook và iMac mới nhất
                                của Apple</a>
                            <div class="news-date"><i class="fa-light fa-calendar-days fa-sm" style="color: #74C0FC;"></i>  31/10/2023</div>
                        </div>
                    </div>
                    <div class="col-lg-6 row p-2">
                        <div class="picture col-6">
                            <img src="images/uploaded/0023320_sac-macbook-pro-m3-bao-nhieu-w_(4)_1600.jpg" width="100%" alt="">
                        </div>
                        <div class="news-head col-6">
                            <a class="news-title text-black text-decoration-none" href="#">Tiêu điểm cuối năm 2023: Tổng hợp sản phẩm MacBook và iMac mới nhất
                                của Apple</a>
                          <div class="news-date"><i class="fa-light fa-calendar-days fa-sm" style="color: #74C0FC;"></i>  31/10/2023</div>
                        </div>
                    </div>
                    <div class="col-lg-6 row p-2">
                        <div class="picture col-6">
                            <img src="images/uploaded/0023320_sac-macbook-pro-m3-bao-nhieu-w_(4)_1600.jpg" width="100%" alt="">
                        </div>
                        <div class="news-head col-6">
                            <a class="news-title text-black text-decoration-none" href="#">Tiêu điểm cuối năm 2023: Tổng hợp sản phẩm MacBook và iMac mới nhất
                                của Apple</a>
                            <div class="news-date"><i class="fa-light fa-calendar-days fa-sm" style="color: #74C0FC;"></i>  31/10/2023</div>
                        </div>
                    </div>
                </div>
                <div class="show-all text-center mt-3">
                    <a class="px-5 btn btn-outline-primary" href="#">Xem tất cả</a>
                </div>
            </div>
        </div>
        <div class="group-news">
            <div class="page-title py-3">
                <h1>Bài viết review</h1>
            </div>
            <div class="page-body">
                <div class="news-item row">
                    <div class="col-lg-6 row p-2">
                        <div class="picture col-6">
                            <img src="images/uploaded/0023320_sac-macbook-pro-m3-bao-nhieu-w_(4)_1600.jpg" width="100%" alt="">
                        </div>
                        <div class="news-head col-6">
                           <a class="news-title text-black text-decoration-none" href="#">Tiêu điểm cuối năm 2023: Tổng hợp sản phẩm MacBook và iMac mới nhất
                                của Apple</a>
                            <div class="news-date"><i class="fa-light fa-calendar-days fa-sm" style="color: #74C0FC;"></i>  31/10/2023</div>
                        </div>
                    </div>
                    <div class="col-lg-6 row p-2">
                        <div class="picture col-6">
                            <img src="images/uploaded/0023320_sac-macbook-pro-m3-bao-nhieu-w_(4)_1600.jpg" width="100%" alt="">
                        </div>
                        <div class="news-head col-6">
                           <a class="news-title text-black text-decoration-none" href="#">Tiêu điểm cuối năm 2023: Tổng hợp sản phẩm MacBook và iMac mới nhất
                                của Apple</a>
                           <div class="news-date"><i class="fa-light fa-calendar-days fa-sm" style="color: #74C0FC;"></i>  31/10/2023</div>
                        </div>
                    </div>
                    <div class="col-lg-6 row p-2">
                        <div class="picture col-6">
                            <img src="images/uploaded/0023320_sac-macbook-pro-m3-bao-nhieu-w_(4)_1600.jpg" width="100%" alt="">
                        </div>
                        <div class="news-head col-6">
                            <a class="news-title text-black text-decoration-none" href="#">Tiêu điểm cuối năm 2023: Tổng hợp sản phẩm MacBook và iMac mới nhất
                                của Apple</a>
                           <div class="news-date"><i class="fa-light fa-calendar-days fa-sm" style="color: #74C0FC;"></i>  31/10/2023</div>
                        </div>
                    </div>
                    <div class="col-lg-6 row p-2">
                        <div class="picture col-6">
                            <img src="images/uploaded/0023320_sac-macbook-pro-m3-bao-nhieu-w_(4)_1600.jpg" width="100%" alt="">
                        </div>
                        <div class="news-head col-6">
                            <a class="news-title text-black text-decoration-none" href="#">Tiêu điểm cuối năm 2023: Tổng hợp sản phẩm MacBook và iMac mới nhất
                                của Apple</a>
                           <div class="news-date"><i class="fa-light fa-calendar-days fa-sm" style="color: #74C0FC;"></i>  31/10/2023</div>
                        </div>
                    </div>
                </div>
                <div class="show-all text-center mt-3">
                    <a class="px-5 btn btn-outline-primary" href="#!category/ipad">Xem tất cả</a>
                </div>
            </div>
        </div>
        <div class="group-news">
            <div class="page-title py-3">
                <h1>Khám phá</h1>
            </div>
            <div class="page-body">
                <div class="news-item row">
                    <div class="col-lg-6 row p-2">
                        <div class="picture col-6">
                            <img src="images/uploaded/0023320_sac-macbook-pro-m3-bao-nhieu-w_(4)_1600.jpg" width="100%" alt="">
                        </div>
                        <div class="news-head col-6">
                            <a class="news-title text-black text-decoration-none" href="#">Tiêu điểm cuối năm 2023: Tổng hợp sản phẩm MacBook và iMac mới nhất
                                của Apple</a>
                            <div class="news-date"><i class="fa-light fa-calendar-days fa-sm" style="color: #74C0FC;"></i>  31/10/2023</div>
                        </div>
                    </div>
                    <div class="col-lg-6 row p-2">
                        <div class="picture col-6">
                            <img src="images/uploaded/0023320_sac-macbook-pro-m3-bao-nhieu-w_(4)_1600.jpg" width="100%" alt="">
                        </div>
                        <div class="news-head col-6">
                           <a class="news-title text-black text-decoration-none" href="#">Tiêu điểm cuối năm 2023: Tổng hợp sản phẩm MacBook và iMac mới nhất
                                của Apple</a>
                           <div class="news-date"><i class="fa-light fa-calendar-days fa-sm" style="color: #74C0FC;"></i>  31/10/2023</div>
                        </div>
                    </div>
                    <div class="col-lg-6 row p-2">
                        <div class="picture col-6">
                            <img src="images/uploaded/0023320_sac-macbook-pro-m3-bao-nhieu-w_(4)_1600.jpg" width="100%" alt="">
                        </div>
                        <div class="news-head col-6">
                           <a class="news-title text-black text-decoration-none" href="#">Tiêu điểm cuối năm 2023: Tổng hợp sản phẩm MacBook và iMac mới nhất
                                của Apple</a>
                            <div class="news-date"><i class="fa-light fa-calendar-days fa-sm" style="color: #74C0FC;"></i>  31/10/2023</div>
                        </div>
                    </div>
                    <div class="col-lg-6 row p-2">
                        <div class="picture col-6">
                            <img src="images/uploaded/0023320_sac-macbook-pro-m3-bao-nhieu-w_(4)_1600.jpg" width="100%" alt="">
                        </div>
                        <div class="news-head col-6">
                            <a class="news-title text-black text-decoration-none" href="#">Tiêu điểm cuối năm 2023: Tổng hợp sản phẩm MacBook và iMac mới nhất
                                của Apple</a>
                            <div class="news-date"><i class="fa-light fa-calendar-days fa-sm" style="color: #74C0FC;"></i>  31/10/2023</div>
                        </div>
                    </div>
                </div>
                <div class="show-all text-center mt-3">
                    <a class="px-5 btn btn-outline-primary" href="#!category/ipad">Xem tất cả</a>
                </div>
            </div>
        </div>
        <div class="group-news">
            <div class="page-title py-3">
                <h1>Thủ thuật</h1>
            </div>
            <div class="page-body">
                <div class="news-item row">
                    <div class="col-lg-6 row p-2">
                        <div class="picture col-6">
                            <img src="images/uploaded/0023320_sac-macbook-pro-m3-bao-nhieu-w_(4)_1600.jpg" width="100%" alt="">
                        </div>
                        <div class="news-head col-6">
                            <a class="news-title text-black text-decoration-none" href="#">Tiêu điểm cuối năm 2023: Tổng hợp sản phẩm MacBook và iMac mới nhất
                                của Apple</a>
                            <div class="news-date"><i class="fa-light fa-calendar-days fa-sm" style="color: #74C0FC;"></i>  31/10/2023</div>
                        </div>
                    </div>
                    <div class="col-lg-6 row p-2">
                        <div class="picture col-6">
                            <img src="images/uploaded/0023320_sac-macbook-pro-m3-bao-nhieu-w_(4)_1600.jpg" width="100%" alt="">
                        </div>
                        <div class="news-head col-6">
                            <a class="news-title text-black text-decoration-none" href="#">Tiêu điểm cuối năm 2023: Tổng hợp sản phẩm MacBook và iMac mới nhất
                                của Apple</a>
                           <div class="news-date"><i class="fa-light fa-calendar-days fa-sm" style="color: #74C0FC;"></i>  31/10/2023</div>
                        </div>
                    </div>
                    <div class="col-lg-6 row p-2">
                        <div class="picture col-6">
                            <img src="images/uploaded/0023320_sac-macbook-pro-m3-bao-nhieu-w_(4)_1600.jpg" width="100%" alt="">
                        </div>
                        <div class="news-head col-6">
                            <a class="news-title text-black text-decoration-none" href="#">Tiêu điểm cuối năm 2023: Tổng hợp sản phẩm MacBook và iMac mới nhất
                                của Apple</a>
                           <div class="news-date"><i class="fa-light fa-calendar-days fa-sm" style="color: #74C0FC;"></i>  31/10/2023</div>
                        </div>
                    </div>
                    <div class="col-lg-6 row p-2">
                        <div class="picture col-6">
                            <img src="images/uploaded/0023320_sac-macbook-pro-m3-bao-nhieu-w_(4)_1600.jpg" width="100%" alt="">
                        </div>
                        <div class="news-head col-6">
                           <a class="news-title text-black text-decoration-none" href="#">Tiêu điểm cuối năm 2023: Tổng hợp sản phẩm MacBook và iMac mới nhất
                                của Apple</a>
                            <div class="news-date"><i class="fa-light fa-calendar-days fa-sm" style="color: #74C0FC;"></i>  31/10/2023</div>
                        </div>
                    </div>
                </div>
                <div class="show-all text-center mt-3">
                    <a class="px-5 btn btn-outline-primary" href="#!category/ipad">Xem tất cả</a>
                </div>
            </div>
        </div>
        <div class="group-news">
            <div class="page-title py-3">
                <h1>Khuyến mại</h1>
            </div>
            <div class="page-body">
                <div class="news-item row">
                    <div class="col-lg-6 row p-2">
                        <div class="picture col-6">
                            <img src="images/uploaded/0023320_sac-macbook-pro-m3-bao-nhieu-w_(4)_1600.jpg" width="100%" alt="">
                        </div>
                        <div class="news-head col-6">
                            <a class="news-title text-black text-decoration-none" href="#">Tiêu điểm cuối năm 2023: Tổng hợp sản phẩm MacBook và iMac mới nhất
                                của Apple</a>
                            <div class="news-date">31/10/2023</div>
                        </div>
                    </div>
                    <div class="col-lg-6 row p-2">
                        <div class="picture col-6">
                            <img src="images/uploaded/0023320_sac-macbook-pro-m3-bao-nhieu-w_(4)_1600.jpg" width="100%" alt="">
                        </div>
                        <div class="news-head col-6">
                            <a class="news-title text-black text-decoration-none" href="#">Tiêu điểm cuối năm 2023: Tổng hợp sản phẩm MacBook và iMac mới nhất
                                của Apple</a>
                           <div class="news-date"><i class="fa-light fa-calendar-days fa-sm" style="color: #74C0FC;"></i>  31/10/2023</div>
                        </div>
                    </div>
                    <div class="col-lg-6 row p-2">
                        <div class="picture col-6">
                            <img src="images/uploaded/0023320_sac-macbook-pro-m3-bao-nhieu-w_(4)_1600.jpg" width="100%" alt="">
                        </div>
                        <div class="news-head col-6">
                            <a class="news-title text-black text-decoration-none" href="#">Tiêu điểm cuối năm 2023: Tổng hợp sản phẩm MacBook và iMac mới nhất
                                của Apple</a>
                            <div class="news-date"><i class="fa-light fa-calendar-days fa-sm" style="color: #74C0FC;"></i>  31/10/2023</div>
                        </div>
                    </div>
                    <div class="col-lg-6 row p-2">
                        <div class="picture col-6">
                            <img src="images/uploaded/0023320_sac-macbook-pro-m3-bao-nhieu-w_(4)_1600.jpg" width="100%" alt="">
                        </div>
                        <div class="news-head col-6">
                            <a class="news-title text-black text-decoration-none" href="#">Tiêu điểm cuối năm 2023: Tổng hợp sản phẩm MacBook và iMac mới nhất
                                của Apple</a>
                            <div class="news-date"><i class="fa-light fa-calendar-days fa-sm" style="color: #74C0FC;"></i>  31/10/2023</div>
                        </div>
                    </div>
                </div>
                <div class="show-all text-center mt-3">
                    <a class="px-5 btn btn-outline-primary" href="#!category/ipad">Xem tất cả</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End main content -->



    <!-- Form info -->
    <article>
        <div class="footer_newletter container-fluid pt-5">
            <div class="form-newletter text-center py-5" style="background: #F2F2F2; color: #515154;">
                <h3>Đăng kí nhận tin từ CyberMart</h3>
                <p>Thông tin sản phẩm mới nhất và chương trình khuyến mãi</p>
                <div class="input-group w-25 m-auto">
                    <input type="text" class="form-control rounded-start-5 px-3 border-0" placeholder="Email của bạn">
                    <button class="input-group-text btn text-bg-primary rounded-end-5 px-4">Đăng kí</button>
                </div>
            </div>
        </div>
    </article>
    <!-- Form info -->

    <!-- Foooter -->
    <footer>
        <div class="footer-upper text-bg-dark">
            <div class="container">
                <div class="row pt-5">
                    <div class="follow-us col-lg-3 col-12 ">
                        <div class="fu-logo">
                            <img src="public/images/uploaded/logo/0012445_Logo_ShopDunk.png" class="d-block w-50"
                                alt="logo">
                        </div>
                        <div class="fu-topic my-2">
                            Năm 2020, ShopDunk trở thành đại lý ủy quyền của Apple. Chúng tôi phát triển chuỗi cửa hàng
                            tiêu
                            chuẩn
                            và Apple Mono Store nhằm mang đến trải nghiệm tốt nhất về sản phẩm và dịch vụ của Apple cho
                            người
                            dùng
                            Việt Nam.
                        </div>
                        <div class="fu-network">
                            <ul class="d-inline-flex">
                                <li class="list-group-item p-2 me-2"><a href="#"><i
                                            class="fs-4 fa-brands fa-facebook-f"></i></a></li>
                                <li class="list-group-item p-2 me-2"><a href="#"><i
                                            class="fs-4 fa-brands fa-youtube text-danger"></i></a></li>
                                <li class="list-group-item p-2 me-2"><a href="#"><i
                                            class="fs-4 fa-brands fa-twitter"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="information col-lg-3 col-4 px-5">
                        <h6 class="mb-3">Thông tin</h6>

                        <ul class="list-unstyled text-start text-secondary">
                            <li>
                                <a href="#!" class="text-reset text-decoration-none">Tin tức</a>
                            </li>
                            <li>
                                <a href="#!" class="text-reset text-decoration-none">Giới thiệu</a>
                            </li>
                            <li>
                                <a href="#!" class="text-reset text-decoration-none">Check IMEI</a>
                            </li>
                            <li>
                                <a href="#!" class="text-reset text-decoration-none">Phương thức thanh toán</a>
                            </li>
                            <li>
                                <a href="#!" class="text-reset text-decoration-none">Thuê điểm bán lẻ</a>
                            </li>
                            <li>
                                <a href="#!" class="text-reset text-decoration-none">Bảo hành và sửa chữa</a>
                            </li>
                            <li>
                                <a href="#!" class="text-reset text-decoration-none">Tuyển dụng</a>
                            </li>
                            <li>
                                <a href="#!" class="text-reset text-decoration-none">Đánh giá chất lượng, khiếu nại</a>
                            </li>
                            <li>
                                <a href="#!" class="text-reset text-decoration-none">tra cứu hóa đơn điện tử</a>
                            </li>
                        </ul>
                    </div>
                    <div class="customer-service col-lg-3 col-4 px-5">
                        <h6 class="mb-3">Chính sách</h6>

                        <ul class="list-unstyled text-start text-secondary">
                            <li>
                                <a href="#!" class="text-reset text-decoration-none">Thu cũ đổi mới</a>
                            </li>
                            <li>
                                <a href="#!" class="text-reset text-decoration-none">Giao hàng</a>
                            </li>
                            <li>
                                <a href="#!" class="text-reset text-decoration-none">Giao hàng (ZaloPay)</a>
                            </li>
                            <li>
                                <a href="#!" class="text-reset text-decoration-none">Đổi trả</a>
                            </li>
                            <li>
                                <a href="#!" class="text-reset text-decoration-none">Bảo hành</a>
                            </li>
                            <li>
                                <a href="#!" class="text-reset text-decoration-none">Dịnh vụ</a>
                            </li>
                            <li>
                                <a href="#!" class="text-reset text-decoration-none">Giải quyết khiếu nại</a>
                            </li>
                            <li>
                                <a href="#!" class="text-reset text-decoration-none">Bảo mật thông tin</a>
                            </li>
                            <li>
                                <a href="#!" class="text-reset text-decoration-none">Hướng dẫn thanh toán qua VNPAY</a>
                            </li>
                        </ul>
                    </div>
                    <div class="my-account col-lg-3 col-4 px-5">
                        <h6 class="mb-3">Địa chỉ & Liên hệ</h6>

                        <ul class="list-unstyled text-start text-secondary">
                            <li>
                                <a href="#!" class="text-reset text-decoration-none">Tài khoảng của tôi</a>
                            </li>
                            <li>
                                <a href="#!" class="text-reset text-decoration-none">Đơn hàng</a>
                            </li>
                            <li>
                                <a href="#!" class="text-reset text-decoration-none">Hệ thống cữa hàng</a>
                            </li>
                            <li>
                                <a href="#!" class="text-reset text-decoration-none">Tìm store trên Google Map</a>
                            </li>
                            <li>
                                <a href="#!" class="text-reset text-decoration-none">Mua hàng: </a><span
                                    class="text-primary fs-6">1900.6626</span>
                                <ul>
                                    <li class="list-group-item fw-lighter">Nhánh 1: khu vực Hà Nội và các tỉnh phía bắc
                                    </li>
                                    <li class="list-group-item fw-lighter">Nhánh 2: khu vực Hồ Chí Minh và các tỉnh phía
                                        nam
                                    </li>
                                    <li class="list-group-item fw-lighter">Nhánh 3: Khiếu nại và góp ý</li>
                                </ul>
                            </li>
                            <li>
                                <a href="#!" class="text-reset text-decoration-none">Doanh nghiệp: </a><span
                                    class="text-primary fs-6">0822.688.668</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="row py-4">
                    <div class="col-lg-10 col-8">
                        <p class="text-secondary m-0 fw-light">© 2016 Công ty Cổ Phần HESMAN Việt Nam GPDKKD: 0107465657
                            do Sở
                            KH
                            & ĐT TP. Hà Nội cấp ngày 08/06/2016.</p>
                        <p class="text-secondary m-0 fw-light">Địa chỉ: Số 76 Thái Hà, phường Trung Liệt, quận Đống Đa,
                            thành
                            phố
                            Hà Nội, Việt Nam</p>
                        <p class="text-secondary m-0 fw-light">Đại diện pháp luật: PHẠM MẠNH HÒA | ĐT: 0247.305.9999 |
                            Email:
                            lienhe@shopdunk.com</p>
                    </div>
                    <div class="col-lg-2  col-4">
                        <img src="public/images/uploaded/Bocongthuong.png" class="d-block w-75" alt="bo cong thuong">
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer -->
    </div>

</body>
<!-- script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/script.js"></script>

</html>