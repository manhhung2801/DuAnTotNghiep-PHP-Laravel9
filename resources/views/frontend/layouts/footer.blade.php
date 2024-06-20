{{-- <article>
    <div class="section-form_email pt-3 mb-2">
        <div class=" col-12 text-center py-3" style="background: #F2F2F2; color: #515154;">
            <h3>Đăng kí nhận tin từ CyBer Mart</h3>
            <p>Thông tin sản phẩm mới nhất và chương trình khuyến mãi</p>
            <div class="input-group justify-content-center">
                <input type="text" class=" rounded-start-5 px-3 border-0 col-md-6" placeholder="Email của bạn">
                <button class="input-group-text btn text-bg-primary rounded-end-5 px-4">Đăng kí</button>
            </div>
        </div>
    </div>
</article>
<div class="section-footer bg-dark">
    <div class="container">
        <footer class="py-5">
            <div class="row">
                <div class="col-lg-4 col-sm-12 col-md-12 footer-item">
                    <h5 class="mb-3">Logo</h5>
                    {{-- @foreach ($storeAddress as $item)
                    <ul class="nav flex-column ">
                        <li class="nav-item mb-2">Hệ thống cửa hàng Sudes Phone chuyên bán lẻ điện thoại, máy tính laptop, smartwatch, smarthome, phụ kiện chính hãng - Giá tốt, giao miễn phí.</li>
                        <li class="nav-item mb-2"><b>Địa chỉ:</b> {{$item->address}}, {{$item->ward}}, {{$item->district}}, {{$item->province}}</li>
                        <li class="nav-item mb-2"><b>Điện thoại:</b> {{$item->phone}}</li>
                        <li class="nav-item mb-2"><b>Email:</b> {{$item->email}}</li>
                    </ul>
                    @endforeach --}}
                </div>
                <div class="col-lg-2 col-sm-12 col-md-4 footer-item">
                    <h5 class="mb-3">CHÍNH SÁCH</h5>
                    <ul class="nav flex-column itemCard">
                        <li class="nav-item mb-2 text-light"><a href="">Chính sách mua hàng</a></li>
                        <li class="nav-item mb-2"><a href="">chính sách đổi trả</a></li>
                        <li class="nav-item mb-2"><a href="{{route('address')}}">Địa chỉ cửa hàng</a></li>
                        <li class="nav-item mb-2"><a href="">Chính sách bảo mật</a></li>
                        <li class="nav-item mb-2"><a href="">Chính sách cam kết</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-sm-12 col-md-4 footer-item">
                    <h5 class="mb-3">HƯỚNG DẪN</h5>
                    <ul class="nav flex-column itemCard">
                        <li class="nav-item mb-2"><a href="">Hướng dẫn mua hàng</a></li>
                        <li class="nav-item mb-2"><a href="">Hướng dẫn đổi trả</a></li>
                        <li class="nav-item mb-2"><a href="">Hướng dẫn chuyển khoản</a></li>
                        <li class="nav-item mb-2"><a href="">Hướng dẫn trả góp</a></li>
                        <li class="nav-item mb-2"><a href="">Hướng dẫn hoàn hàng</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-sm-12 col-md-4 p-0 m-0 footer-item">
                    <ul class="row itemCard p-0 m-0">
                        <li class="mb-3">
                            <h5>KẾT NỐI VỚI CHÚNG TÔI</h5>
                        </li>
                        <li class="nav-item mb-2 col-lg-2 col-sm-2 col-2 ">
                            <a href=""><img src="https://bizweb.dktcdn.net/100/480/632/themes/900313/assets/facebook_2.svg?1712897547805" alt=""></a>
                        </li>
                        <li class="nav-item mb-2  col-lg-2  col-sm-2 col-2 ">
                            <a href=""><img src="https://bizweb.dktcdn.net/100/480/632/themes/900313/assets/instagram_1.svg?1712897547805" alt=""></a>
                        </li>
                        <li class="nav-item mb-2  col-lg-2  col-sm-2 col-2">
                            <a href=""><img src="https://bizweb.dktcdn.net/100/480/632/themes/900313/assets/lazada.svg?1712897547805" alt=""></a>
                        </li>
                        <li class="nav-item mb-2  col-lg-2  col-sm-2 col-2">
                            <a href=""><img src="https://bizweb.dktcdn.net/100/480/632/themes/900313/assets/lazada.svg?1712897547805" alt=""></a>
                        </li>

                    </ul>
                    <ul class="row itemCard p-0 m-0">
                        <li class="mb-3 mt-3">
                            <h5>HỖ TRỢ THANH TOÁN</h5>
                        </li>
                        <li class="nav-item mb-2 col-lg-2 col-sm-2 col-2 ">
                            <a href=""><img class="border" src="https://bizweb.dktcdn.net/100/480/632/themes/900313/assets/payment_1.svg?1712897547805" alt=""></a>
                        </li>
                        <li class="nav-item mb-2 col-lg-2 col-sm-2 col-2">
                            <a href=""><img class="border" src="https://bizweb.dktcdn.net/100/480/632/themes/900313/assets/payment_1.svg?1712897547805" alt=""></a>
                        </li>
                        <li class="nav-item mb-2 col-lg-2 col-sm-2 col-2">
                            <a href=""><img class="border" src="https://bizweb.dktcdn.net/100/480/632/themes/900313/assets/payment_1.svg?1712897547805" alt=""></a>
                        </li>
                        <li class="nav-item mb-2 col-lg-2 col-sm-2 col-2">
                            <a href=""><img class="border" src="https://bizweb.dktcdn.net/100/480/632/themes/900313/assets/payment_1.svg?1712897547805" alt=""></a>
                        </li>
                        <li class="nav-item mb-2 col-lg-2 col-sm-2 col-2">
                            <a href=""><img class="border" src="https://bizweb.dktcdn.net/100/480/632/themes/900313/assets/payment_1.svg?1712897547805" alt=""></a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</div> --}}
