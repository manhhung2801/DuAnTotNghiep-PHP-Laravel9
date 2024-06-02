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
                                <div class="picture p-3 rounded-1" style="background: #ebebefb3">
                                    <img src="public/images/product/ipad_01.png" class="w-100 d-block m-0" alt="ảnh iphone">
                                </div>
                                <div class="picture-slideshow mt-3">
                                    de <ul class="p-0 d-flex">
                                        <li class="w-25 list-group-item p-3 border border-dark-subtle rounded-2 me-1">
                                            <img src="public/images/product/iphone_01.png" class="w-100 d-block" alt="thums">
                                        </li>
                                        <li class="w-25 list-group-item p-3 border border-dark-subtle rounded-2 me-1">
                                            <img src="public/images/product/iphone_01.png" class="w-100 d-block" alt="thums">
                                        </li>
                                        <li class="w-25 list-group-item p-3 border border-dark-subtle rounded-2 me-1">
                                            <img src="public/images/product/iphone_01.png" class="w-100 d-block" alt="thums">
                                        </li>
                                        <li class="w-25 list-group-item p-3 border border-dark-subtle rounded-2 me-1">
                                            <img src="public/images/product/iphone_01.png" class="w-100 d-block" alt="thums">
                                        </li>

                                    </ul>
                                </div>

                            </div>
                            <div class="overview col-lg-5 px-4">
                                <div class="wrapper-info py-2 border-bottom">
                                    <div class="product-name">
                                        <h3 class="fw-medium">Iphone 15 ProMax</h3>
                                    </div>
                                    <div class="product-review-box d-flex align-items-center justify-content-between">
                                        <div class="d-flex">
                                            <div class="rating text-warning pe-2">
                                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="storelocation-all">
                                            <select class="form-select bg-light">
                                                <option value="1">Vui lòng chọn</option>
                                                <option selected>Khu vực miền Bắc</option>
                                                <option value="2">Khu vực miền Nam</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="prices d-flex align-items-center my-2">
                                    <div class="price me-3 d-flex text-primary">
                                        <h4 class="fw-bolder">12.999.000</h4><i class="fa-solid fa-dong-sign"></i>
                                    </div>
                                    <div class="lowPrice text-secondary"><del class="fs-5">12.999.000</del> <i class="fa-light fa-dong-sign fa-xs"></i></div>
                                </div>
                                <dl class="attributes">
                                    <dt class="text-prompt">
                                        <label class="form-label fw-lighter mb-2">Dung lượng</label>
                                    </dt>
                                    <dd>
                                        <ul class="d-flex mb-3">
                                            <li class="list-group-item py-1 px-3 border border-dark-subtle me-2 rounded-2">
                                                <a class="nav-link text-secondary" href="#">128GB</a>
                                            </li>
                                            <li class="list-group-item py-1 px-3 border border-dark-subtle me-2 rounded-2">
                                                <a class="nav-link text-secondary" href="#">256GB</a>
                                            </li>
                                            <li class="list-group-item py-1 px-3 border border-dark-subtle me-2 rounded-2">
                                                <a class="nav-link text-secondary" href="#">512GB</a>
                                            </li>
                                        </ul>
                                    </dd>
                                    <dt class="text-prompt">
                                        <label class="form-label fw-lighter mb-2">Màu sắc</label>
                                    </dt>
                                    <dd>
                                        <ul class="d-flex mb-3">
                                            <li class="list-group-item " ng-show="">

                                                <span class="me-3 rounded-circle d-inline-block" style="width: 30px; height: 30px; background: #4c4b49;">&nbsp;
                                                </span>
                                            </li>
                                            <li class="list-group-item "><span class="me-3 rounded-circle d-inline-block" style="width: 30px; height: 30px; background: #e3e5e3;">&nbsp;</span>
                                            </li>
                                            <li class="list-group-item "><span class="me-3 rounded-circle d-inline-block" style="width: 30px; height: 30px; background: #fcebd3;">&nbsp;</span>
                                            </li>
                                            <li class="list-group-item "><span class="me-3 rounded-circle d-inline-block" style="width: 30px; height: 30px; background: #61586b;">&nbsp;</span>
                                            </li>
                                        </ul>
                                    </dd>
                                </dl>

                                <div class="call-action">
                                    <div class="btn-buy my-3">
                                        <button class="btn text-bg-primary w-100 py-3 fw-bold text-uppercase" ng-click="addCart(product)">Mua
                                            ngay</button>
                                    </div>
                                    <div class="btn-all row">
                                        <div class="col-6">
                                            <button class="btn btn-outline-primary w-100 py-3 fw-bold text-uppercase">Trả
                                                góp</button>
                                        </div>
                                        <div class="col-6">
                                            <button class="btn btn-outline-primary w-100 py-3 fw-bold text-uppercase"><i class="fa-solid fa-rotate"></i> Thu cũ đổi mới</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="service py-2 border border-dark-subtle rounded-2 mt-3">
                                    <ul>
                                        <li class="list-group-item"><i class="fa-solid fa-circle-check" style="color: #0066cc;"></i> Bộ sản phẩm gồm: Hộp, Sách hướng
                                            dẫn, Cây lấy sim, Cáp Lightning - Type C</li>
                                        <li class="list-group-item"><i class="fa-solid fa-circle-check" style="color: #0066cc;"></i> Bảo hành chính hãng 1 năm <a href="#">(Chi
                                                tiết)</a></li>
                                        <li class="list-group-item"><i class="fa-solid fa-circle-check" style="color: #0066cc;"></i> Giao hàng nhanh toàn quốc <a href="#">(Chi
                                                tiết)</a></li>
                                        <li class="list-group-item"><i class="fa-solid fa-circle-check" style="color: #0066cc;"></i> Hoàn thuế cho người nước ngoài <a href="#">(Chi
                                                tiết)</a></li>
                                        <li class="list-group-item"><i class="fa-solid fa-circle-check" style="color: #0066cc;"></i> Gọi đặt mua <strong class="text-primary">19006626</strong> (7:30 - 22:00)
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="uu-dai py-2">
                                    <div class="accordion border rounded" id="accordionExample ">
                                        <div class="border rounded">
                                            <div class=" bg-dark p-2 border-top-0 rounded ">
                                                <h6 class="" style="color: white;">
                                                    <i class="fa-solid fa-circle-check"></i>
                                                    <span class="mx-2" style="color: white;">Chính sách hỗ
                                                        trợ</span>
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="row px-3 mt-2">
                                            <div class="col-lg-2 col-md-1 col-2 mt-3">
                                                <i class="fa-solid fa-car-side fa-sm" style="font-size: 30px;"></i>
                                            </div>
                                            <div class="col-lg-10 col-md-11 col-9 col-sm-10">
                                                <p>
                                                    Vận chuyển miễn phí <br>
                                                    <span>Hóa đơn trên 5 triệu</span>
                                                </p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row px-3 mt-2">
                                            <div class="col-lg-2 col-md-1 col-2 mt-3">
                                                <i class="fa-solid fa-gift fa-sm" style="font-size: 30px;"></i>
                                            </div>
                                            <div class="col-lg-10 col-md-11 col-9 col-sm-10">
                                                <p>
                                                    Quà tặng <br>
                                                    <span>Hóa đơn trên 10 triệu</span>
                                                </p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row px-3 mt-2">
                                            <div class="col-lg-2 col-md-1 col-2 mt-3">
                                                <i class="fa-solid fa-medal fa-sm" style="font-size: 30px;"></i>
                                            </div>
                                            <div class="col-lg-10 col-md-11 col-9 col-sm-10">
                                                <p>
                                                    Chứng nhận chất lượng <br>
                                                    <span>Sản phẩm chính hãng</span>
                                                </p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row px-3 mt-2">
                                            <div class="col-lg-2 col-md-1 col-2 mt-3">
                                                <i class="fa-solid fa-headset " style="font-size: 30px;"></i>
                                            </div>
                                            <div class="col-lg-10 col-md-11 col-9 col-sm-10">
                                                <p>
                                                    Hotline: 0123 1233<br>
                                                    <span>Hỗ trợ 24/7</span>
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
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
                                        <div class="product-anotherinfo-wrapper">
                                            dsadssadsda
                                        </div>
                                    </div>
                                    <!--Mô tả sản phẩm end  -->

                                    <!-- Thông số kỹ thuật -->
                                    <div id="select1" class="tab-pane">
                                        <div class="product-description-wrapper">
                                            <table class="table table-striped  col-12">
                                                <tbody>
                                                    <tr>
                                                        <th scope="col">Kích thước màn hình: </th>
                                                        <td>6.1 inches</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="col">Công nghệ màn hình:</th>
                                                        <td>Super Retina XDR OLED</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="col">Tính năng màn hình</th>
                                                        <td>
                                                            Dynamic Island HDR display True Tone Wide color (P3)
                                                            Haptic Touch Lớp phủ oleophobia chống dấu vân tay Độ
                                                            sáng tối đa: 2000 nits
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="col">Chống nước / Kháng nước:</th>
                                                        <td>IP68</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="col">Camera sau</th>
                                                        <td>Chính 48 MP & Phụ 12 MP</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="col">Camera trước</th>
                                                        <td>12MP</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="col">RAM</th>
                                                        <td>6GB</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="col">Pin và nguồn điện</th>
                                                        <td>
                                                            USB Type-C 3877 mAh
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="col">RAM</th>
                                                        <td>6GB</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="col">Cảm biến</th>
                                                        <td>
                                                            Cảm biến gia tốc, Cảm biến tiệm cận, Cảm biến ánh
                                                            sáng, Con quay hồi chuyển, Cảm biến áp kế
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="col">Kết nối mạng</th>
                                                        <td>
                                                            5G, GPS, GLONASS, Galileo, QZSS, and BeiDou
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="col">Chip</th>
                                                        <td>
                                                            Chipset: Apple A16 Bionic Loại CPU: 6‑core CPU GPU:
                                                            5‑core GPU
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="col">Kích thước và Trọng lượng</th>
                                                        <td>

                                                            Kích thước: 147.6 x 71.6 x 7.80 mm Trọng lượng: 171g
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- Thông số kỹ thuật end -->
                                    <!-- Hỏi đáp -->
                                    <div id="select2" class="tab-pane">
                                        <div class="product-description-wrapper row p-3 ">
                                            <h4>Đánh giá sản phẩm </h4>
                                            <div class="col-lg-5 mb-5 col-md-12">
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <th rowspan="5" class="text-center " style="font-size: 50px; background-color: #e6dee3;">
                                                                0
                                                                <p style="font-size: 10px;">
                                                                    đánh giá </p>
                                                            </th>
                                                            <td class="d-flex" style=" background-color: #e6dee3;">1
                                                                <span class="mx-2">
                                                                    <i class="fa-solid fa-star" style="color:orange;"></i>
                                                                </span>
                                                                <div class="border rounded mt-2 bg-secondary" style="width: 200px ; height: 10px ;">
                                                                </div>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td class="d-flex" style=" background-color: #e6dee3;">2
                                                                <span class="mx-2">
                                                                    <i class="fa-solid fa-star" style="color:orange"></i>
                                                                </span>
                                                                <div class="border rounded mt-2 bg-secondary" style="width: 200px ; height: 10px ;">
                                                                </div>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td class="d-flex" style=" background-color: #e6dee3;">3
                                                                <span class="mx-2">
                                                                    <i class="fa-solid fa-star" style="color:orange"></i>
                                                                </span>
                                                                <div class="border rounded mt-2 bg-secondary" style="width: 200px ; height: 10px ;">
                                                                </div>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td class="d-flex" style=" background-color: #e6dee3;">4
                                                                <span class="mx-2">
                                                                    <i class="fa-solid fa-star" style="color:orange"></i>
                                                                </span>
                                                                <div class="border rounded mt-2 bg-secondary" style="width: 200px ; height: 10px ;">
                                                                </div>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td class="d-flex" style=" background-color: #e6dee3;">5
                                                                <span class="mx-2">
                                                                    <i class="fa-solid fa-star" style="color:orange"></i>
                                                                </span>
                                                                <div class="border rounded mt-2 bg-secondary" style="width: 200px ; height: 10px ;">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <p>
                                                    Viết đánh giá của riêng bạn
                                                </p>
                                                <div class="d-flex">Chắc lượng:
                                                    <div class="rating text-warning pe-2 mx-2">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                </div>
                                                <form action="" method="post">
                                                    <div class="mt-2">
                                                        <label for="">Tên của bạn </label><br>
                                                        <input type="text" class="p-2 w-75 border rounded">
                                                    </div>
                                                    <div class="mt-3">
                                                        <label for="">Đánh giá của bạn về sản phẩm</label><br>
                                                        <textarea name="" id="" rows="5" cols="35" class="p-2 "></textarea>
                                                    </div>
                                                    <div class="mt-2">
                                                        <input type="file">

                                                    </div>
                                                    <div class="mt-4">
                                                        <button type="submit" class="btn btn-primary w-25">Gửi</button>
                                                    </div>
                                                </form>
                                            </div>

                                            <div class="col-lg-7 col-md-12">
                                                Chưa có đánh giá nào
                                                <!-- DANH GIA -->
                                                <!-- <div>
                                                            <div class="d-block">
                                                                <img src="/public/images/uploaded/logo/vn.png"
                                                                    alt="" class="border rounded"
                                                                    style="width: 4%; height: 4%;">
                                                                <label><b>Hằng</b></label><br>
                                                            </div>
                                                            <div class="mt-2" style="margin-left: 4%;">
                                                                <p>Thời gian mất bao lâu để đặt hàng và nhận sản
                                                                    phẩm khi mua trả góp?
                                                                </p>
                                                            </div>
                                                        </div> -->
                                                <!-- END DANH GIA -->
                                            </div>
                                        </div>
                                        <div class="product-description-wrapper row mt-5 p-3">
                                            <h4>Bình luận</h4>
                                            <hr>
                                            <div class="col-lg-5 mt-5 col-md-12">
                                                <form action="" method="post">
                                                    <p>Viết bình luận của bạn</p>
                                                    <div class="mt-2">
                                                        <label for="">Tên của bạn </label><br>
                                                        <input type="text" class="p-2 w-75 border rounded">
                                                    </div>
                                                    <div class="mt-2">
                                                        <label for="">Số Điện thoại</label><br>
                                                        <input type="number" class="p-2 w-75 border rounded">
                                                    </div>
                                                    <div class="mt-3">
                                                        <label for="">Nội dung bình luận</label><br>
                                                        <textarea name="" id="" rows="5" cols="35" class="p-2 "></textarea>
                                                    </div>
                                                    <div class="mt-3">
                                                        <button type="submit" class="btn btn-primary w-25">Gửi</button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-lg-7 col-md-12 mt-5">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <!-- câu hỏi -->
                                                        <div>
                                                            <div class="d-block">
                                                                <img src="/public/images/uploaded/logo/vn.png" alt="" class="border rounded" style="width: 4%; height: 4%;">
                                                                <label><b>Hằng</b></label><br>
                                                            </div>
                                                            <div class="mt-2 mb-4" style="margin-left: 4%;">
                                                                <p>Thời gian mất bao lâu để đặt hàng và nhận sản
                                                                    phẩm khi mua trả góp?
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!-- câu trả lời -->
                                                        <div class="ms-5 mt-2">
                                                            <div class="d-block">
                                                                <i class="fa-solid fa-reply fa-flip-both"></i>
                                                                <img src="/public/images/uploaded/logo/vn.png" alt="" class="border rounded" style="width: 4%; height: 4%;">
                                                                <label><b>Hằng</b></label><br>
                                                            </div>
                                                            <div class="" style="margin-left: 7%;">
                                                                <p>Thời gian mất bao lâu để đặt hàng và nhận sản
                                                                    phẩm khi mua trả góp?
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                    <div class="col-12">
                                                        <div>
                                                            <div class="d-block">
                                                                <img src="/public/images/uploaded/logo/vn.png" alt="" class="border rounded" style="width: 4%; height: 4%;">
                                                                <label><b>Hằng</b></label><br>
                                                            </div>
                                                            <div class="mt-2" style="margin-left: 4%;">
                                                                <p>Thời gian mất bao lâu để đặt hàng và nhận sản
                                                                    phẩm khi mua trả góp?
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                    <div class="col-12">
                                                        <div>
                                                            <div class="d-block">
                                                                <img src="/public/images/uploaded/logo/vn.png" alt="" class="border rounded" style="width: 4%; height: 4%;">
                                                                <label><b>Hằng</b></label><br>
                                                            </div>
                                                            <div class="mt-2" style="margin-left: 4%;">
                                                                <p>Thời gian mất bao lâu để đặt hàng và nhận sản
                                                                    phẩm khi mua trả góp?
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hỏi đáp end-->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home-page-category-list">
                <div class="category-list">
                    <div class="categoty-item pt-4">
                        <h2 class="mb-2 fw-bold"><a class="list-group-item" href="#">Gợi ý phụ kiện
                                đi kèm </a></h2>
                        <!-- Start slider -->
                        <div class="wrapper-slider">

                            <div class="direction">
                                <button id="prev">
                                    < </button>
                                        <button id="next">
                                            >
                                        </button>
                            </div>
                            <div id="formList">
                                <div id="list">
                                    <div class="item item_product_main">
                                        <form action="#" method="post" class="variants product-action item-product-main duration-300" data-cart-form="" data-id="product-actions-30510614" enctype="multipart/form-data">
                                            <span class="flash-sale">Giảm
                                                40%
                                            </span>
                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover" href="#" title="iPhone 13 Pro Max 1TB - Chính Hãng VN/A">
                                                    <img class="lazyload duration-300 loaded" src="//bizweb.dktcdn.net/thumb/large/100/480/632/products/13-pm-la-221119025651-2211191456.jpg?v=1681769956803">
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="product-name line-clamp line-clamp-2 ">
                                                    <a href="#" title="" class="text-decoration-none ">iPhone 13
                                                        Pro Max
                                                        1TB-Chính Hãng VN/A</a>
                                                </h3>
                                                <div class="product-price-cart">
                                                    <div class="price-box">
                                                        <span class="compare-price">49.990.000₫</span>
                                                        <span class="price">29.990.000₫</span>
                                                    </div>
                                                    <div class="product-button ">
                                                        <input class="hidden" type="hidden" name="variantId" value="86286440">
                                                        <button class="btn-cart btn-views rounded border-0 px-2" title="Tùy chọn" type="button">
                                                            <i class="fa-sharp fa-regular fa-cart-shopping"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="promotion-content">
                                                <div class="line-clamp-2-new" title="Thu cũ đổi mới: Thu giá cao trợ giá đến 90%">
                                                    <p>Thu cũ đổi mới: Thu giá cao trợ giá đến 90%</p>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="item item_product_main">
                                        <form action="#" method="post" class="variants product-action item-product-main duration-300" data-cart-form="" data-id="product-actions-30510614" enctype="multipart/form-data">
                                            <span class="flash-sale">Giảm
                                                40%
                                            </span>
                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover" href="#" title="iPhone 13 Pro Max 1TB - Chính Hãng VN/A">
                                                    <img class="lazyload duration-300 loaded" src="//bizweb.dktcdn.net/thumb/large/100/480/632/products/13-pm-la-221119025651-2211191456.jpg?v=1681769956803">
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="product-name line-clamp line-clamp-2 ">
                                                    <a href="#" title="" class="text-decoration-none ">iPhone 13
                                                        Pro Max
                                                        1TB-Chính Hãng VN/A</a>
                                                </h3>
                                                <div class="product-price-cart">
                                                    <div class="price-box">
                                                        <span class="compare-price">49.990.000₫</span>
                                                        <span class="price">29.990.000₫</span>
                                                    </div>
                                                    <div class="product-button ">
                                                        <input class="hidden" type="hidden" name="variantId" value="86286440">
                                                        <button class="btn-cart btn-views rounded border-0 px-2" title="Tùy chọn" type="button">
                                                            <i class="fa-sharp fa-regular fa-cart-shopping"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="promotion-content">
                                                <div class="line-clamp-2-new" title="Thu cũ đổi mới: Thu giá cao trợ giá đến 90%">
                                                    <p>Thu cũ đổi mới: Thu giá cao trợ giá đến 90%</p>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="item item_product_main">
                                        <form action="#" method="post" class="variants product-action item-product-main duration-300" data-cart-form="" data-id="product-actions-30510614" enctype="multipart/form-data">
                                            <span class="flash-sale">Giảm
                                                40%
                                            </span>
                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover" href="#" title="iPhone 13 Pro Max 1TB - Chính Hãng VN/A">
                                                    <img class="lazyload duration-300 loaded" src="//bizweb.dktcdn.net/thumb/large/100/480/632/products/13-pm-la-221119025651-2211191456.jpg?v=1681769956803">
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="product-name line-clamp line-clamp-2 ">
                                                    <a href="#" title="" class="text-decoration-none ">iPhone 13
                                                        Pro Max
                                                        1TB-Chính Hãng VN/A</a>
                                                </h3>
                                                <div class="product-price-cart">
                                                    <div class="price-box">
                                                        <span class="compare-price">49.990.000₫</span>
                                                        <span class="price">29.990.000₫</span>
                                                    </div>
                                                    <div class="product-button ">
                                                        <input class="hidden" type="hidden" name="variantId" value="86286440">
                                                        <button class="btn-cart btn-views rounded border-0 px-2" title="Tùy chọn" type="button">
                                                            <i class="fa-sharp fa-regular fa-cart-shopping"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="promotion-content">
                                                <div class="line-clamp-2-new" title="Thu cũ đổi mới: Thu giá cao trợ giá đến 90%">
                                                    <p>Thu cũ đổi mới: Thu giá cao trợ giá đến 90%</p>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="item item_product_main">
                                        <form action="#" method="post" class="variants product-action item-product-main duration-300" data-cart-form="" data-id="product-actions-30510614" enctype="multipart/form-data">
                                            <span class="flash-sale">Giảm
                                                40%
                                            </span>
                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover" href="#" title="iPhone 13 Pro Max 1TB - Chính Hãng VN/A">
                                                    <img class="lazyload duration-300 loaded" src="//bizweb.dktcdn.net/thumb/large/100/480/632/products/13-pm-la-221119025651-2211191456.jpg?v=1681769956803">
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="product-name line-clamp line-clamp-2 ">
                                                    <a href="#" title="" class="text-decoration-none ">iPhone 13
                                                        Pro Max
                                                        1TB-Chính Hãng VN/A</a>
                                                </h3>
                                                <div class="product-price-cart">
                                                    <div class="price-box">
                                                        <span class="compare-price">49.990.000₫</span>
                                                        <span class="price">29.990.000₫</span>
                                                    </div>
                                                    <div class="product-button ">
                                                        <input class="hidden" type="hidden" name="variantId" value="86286440">
                                                        <button class="btn-cart btn-views rounded border-0 px-2" title="Tùy chọn" type="button">
                                                            <i class="fa-sharp fa-regular fa-cart-shopping"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="promotion-content">
                                                <div class="line-clamp-2-new" title="Thu cũ đổi mới: Thu giá cao trợ giá đến 90%">
                                                    <p>Thu cũ đổi mới: Thu giá cao trợ giá đến 90%</p>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="item item_product_main">
                                        <form action="#" method="post" class="variants product-action item-product-main duration-300" data-cart-form="" data-id="product-actions-30510614" enctype="multipart/form-data">
                                            <span class="flash-sale">Giảm
                                                40%
                                            </span>
                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover" href="#" title="iPhone 13 Pro Max 1TB - Chính Hãng VN/A">
                                                    <img class="lazyload duration-300 loaded" src="//bizweb.dktcdn.net/thumb/large/100/480/632/products/13-pm-la-221119025651-2211191456.jpg?v=1681769956803">
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="product-name line-clamp line-clamp-2 ">
                                                    <a href="#" title="" class="text-decoration-none ">iPhone 13
                                                        Pro Max
                                                        1TB-Chính Hãng VN/A</a>
                                                </h3>
                                                <div class="product-price-cart">
                                                    <div class="price-box">
                                                        <span class="compare-price">49.990.000₫</span>
                                                        <span class="price">29.990.000₫</span>
                                                    </div>
                                                    <div class="product-button ">
                                                        <input class="hidden" type="hidden" name="variantId" value="86286440">
                                                        <button class="btn-cart btn-views rounded border-0 px-2" title="Tùy chọn" type="button">
                                                            <i class="fa-sharp fa-regular fa-cart-shopping"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="promotion-content">
                                                <div class="line-clamp-2-new" title="Thu cũ đổi mới: Thu giá cao trợ giá đến 90%">
                                                    <p>Thu cũ đổi mới: Thu giá cao trợ giá đến 90%</p>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="item item_product_main">
                                        <form action="#" method="post" class="variants product-action item-product-main duration-300" data-cart-form="" data-id="product-actions-30510614" enctype="multipart/form-data">
                                            <span class="flash-sale">Giảm
                                                40%
                                            </span>
                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover" href="#" title="iPhone 13 Pro Max 1TB - Chính Hãng VN/A">
                                                    <img class="lazyload duration-300 loaded" src="//bizweb.dktcdn.net/thumb/large/100/480/632/products/13-pm-la-221119025651-2211191456.jpg?v=1681769956803">
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="product-name line-clamp line-clamp-2 ">
                                                    <a href="#" title="" class="text-decoration-none ">iPhone 13
                                                        Pro Max
                                                        1TB-Chính Hãng VN/A</a>
                                                </h3>
                                                <div class="product-price-cart">
                                                    <div class="price-box">
                                                        <span class="compare-price">49.990.000₫</span>
                                                        <span class="price">29.990.000₫</span>
                                                    </div>
                                                    <div class="product-button ">
                                                        <input class="hidden" type="hidden" name="variantId" value="86286440">
                                                        <button class="btn-cart btn-views rounded border-0 px-2" title="Tùy chọn" type="button">
                                                            <i class="fa-sharp fa-regular fa-cart-shopping"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="promotion-content">
                                                <div class="line-clamp-2-new" title="Thu cũ đổi mới: Thu giá cao trợ giá đến 90%">
                                                    <p>Thu cũ đổi mới: Thu giá cao trợ giá đến 90%</p>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="item item_product_main">
                                        <form action="#" method="post" class="variants product-action item-product-main duration-300" data-cart-form="" data-id="product-actions-30510614" enctype="multipart/form-data">
                                            <span class="flash-sale">Giảm
                                                40%
                                            </span>
                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover" href="#" title="iPhone 13 Pro Max 1TB - Chính Hãng VN/A">
                                                    <img class="lazyload duration-300 loaded" src="//bizweb.dktcdn.net/thumb/large/100/480/632/products/13-pm-la-221119025651-2211191456.jpg?v=1681769956803">
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="product-name line-clamp line-clamp-2 ">
                                                    <a href="#" title="" class="text-decoration-none ">iPhone 13
                                                        Pro Max
                                                        1TB-Chính Hãng VN/A</a>
                                                </h3>
                                                <div class="product-price-cart">
                                                    <div class="price-box">
                                                        <span class="compare-price">49.990.000₫</span>
                                                        <span class="price">29.990.000₫</span>
                                                    </div>
                                                    <div class="product-button ">
                                                        <input class="hidden" type="hidden" name="variantId" value="86286440">
                                                        <button class="btn-cart btn-views rounded border-0 px-2" title="Tùy chọn" type="button">
                                                            <i class="fa-sharp fa-regular fa-cart-shopping"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="promotion-content">
                                                <div class="line-clamp-2-new" title="Thu cũ đổi mới: Thu giá cao trợ giá đến 90%">
                                                    <p>Thu cũ đổi mới: Thu giá cao trợ giá đến 90%</p>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="item item_product_main">
                                        <form action="#" method="post" class="variants product-action item-product-main duration-300" data-cart-form="" data-id="product-actions-30510614" enctype="multipart/form-data">
                                            <span class="flash-sale">Giảm
                                                40%
                                            </span>
                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover" href="#" title="iPhone 13 Pro Max 1TB - Chính Hãng VN/A">
                                                    <img class="lazyload duration-300 loaded" src="//bizweb.dktcdn.net/thumb/large/100/480/632/products/13-pm-la-221119025651-2211191456.jpg?v=1681769956803">
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="product-name line-clamp line-clamp-2 ">
                                                    <a href="#" title="" class="text-decoration-none ">iPhone 13
                                                        Pro Max
                                                        1TB-Chính Hãng VN/A</a>
                                                </h3>
                                                <div class="product-price-cart">
                                                    <div class="price-box">
                                                        <span class="compare-price">49.990.000₫</span>
                                                        <span class="price">29.990.000₫</span>
                                                    </div>
                                                    <div class="product-button ">
                                                        <input class="hidden" type="hidden" name="variantId" value="86286440">
                                                        <button class="btn-cart btn-views rounded border-0 px-2" title="Tùy chọn" type="button">
                                                            <i class="fa-sharp fa-regular fa-cart-shopping"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="promotion-content">
                                                <div class="line-clamp-2-new" title="Thu cũ đổi mới: Thu giá cao trợ giá đến 90%">
                                                    <p>Thu cũ đổi mới: Thu giá cao trợ giá đến 90%</p>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- End slider -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection