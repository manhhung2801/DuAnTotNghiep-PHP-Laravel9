@extends('frontend.layouts.master')

@section('title', 'Chi tiết sản phẩm')

@section('content')
<div class="layout-collection">
    @include('frontend.products.partialsDetail.breadCrumb')
    <!-- Main -->
    <div class="container">
        <div class="row mb-3 mt-4">
            <div class="col-lg-4 col-md-6 col-12 ">
                @include('frontend.products.partialsDetail.imageGallery')
            </div>
            <div class="col-lg-5 col-md-6 col-12 details-pro">
                @include('frontend.products.partialsDetail.overView')
            </div>
            <div class="col-lg-3 col-md-12 col-12 product-col-right">
                @include('frontend.products.partialsDetail.sidebar')
            </div>
        </div>
        <div class="catalog-product-list container">
            <div class="scroll_animation section_title  mb-3  show">
                <h4 class="text-uppercase">Sản phẩm liên quan
                </h4>
            </div>
            <div class="scroll_animation row show ">
                <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-6 ">
                    <div class="item_product_main">
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
                                    <a href="#" title="" class="text-decoration-none ">iPhone 13 Pro Max
                                        1TB-Chính Hãng VN/A</a>
                                </h3>
                                <div class="product-price-cart">
                                    <div class="price-box">
                                        <span class="compare-price">49.990.000₫</span>
                                        <span class="price">29.990.000₫</span>
                                    </div>
                                    <div class="product-button ">
                                        <input class="hidden" type="hidden" name="variantId" value="86286440">
                                        <button class="btn-cart btn-views rounded border-0 px-2" title="Tùy chọn" type="button" fdprocessedid="z0fz">
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
                <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-6">
                    <div class="item_product_main">
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
                                    <a href="#" title="" class="text-decoration-none ">iPhone 13 Pro Max
                                        1TB-Chính Hãng VN/A</a>
                                </h3>
                                <div class="product-price-cart">
                                    <div class="price-box">
                                        <span class="compare-price">49.990.000₫</span>
                                        <span class="price">29.990.000₫</span>
                                    </div>
                                    <div class="product-button ">
                                        <input class="hidden" type="hidden" name="variantId" value="86286440">
                                        <button class="btn-cart btn-views rounded border-0 px-2" title="Tùy chọn" type="button" fdprocessedid="pjb53">
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
                <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-6 ">
                    <div class="item_product_main">
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
                                    <a href="#" title="" class="text-decoration-none ">iPhone 13 Pro Max
                                        1TB-Chính Hãng VN/A</a>
                                </h3>
                                <div class="product-price-cart">
                                    <div class="price-box">
                                        <span class="compare-price">49.990.000₫</span>
                                        <span class="price">29.990.000₫</span>
                                    </div>
                                    <div class="product-button ">
                                        <input class="hidden" type="hidden" name="variantId" value="86286440">
                                        <button class="btn-cart btn-views rounded border-0 px-2" title="Tùy chọn" type="button" fdprocessedid="z0fz">
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
                <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-6">
                    <div class="item_product_main">
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
                                    <a href="#" title="" class="text-decoration-none ">iPhone 13 Pro Max
                                        1TB-Chính Hãng VN/A</a>
                                </h3>
                                <div class="product-price-cart">
                                    <div class="price-box">
                                        <span class="compare-price">49.990.000₫</span>
                                        <span class="price">29.990.000₫</span>
                                    </div>
                                    <div class="product-button ">
                                        <input class="hidden" type="hidden" name="variantId" value="86286440">
                                        <button class="btn-cart btn-views rounded border-0 px-2" title="Tùy chọn" type="button" fdprocessedid="pjb53">
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
        <div class="row">
            <div class="col-lg-8 col-12 product-review-details mb-3">
                <div class="product-content block-content">
                    <div class="title">Thông tin sản phẩm</div>
                    <div class="product-review-content">
                        <div class="ba-text-fpt has-height">
                            <p>iPhone 13 Pro Max 1TB&nbsp;ngoại hình vuông vứt và cấu hình&nbsp;đẳng cấp tựa như&nbsp;iPhone 12 Pro Max. Tính năng quay video điện ảnh hay zoom 3x gây ấn tượng mạnh mẽ cho người dùng. Dung lượng 1TB cực khủng nay đã
                                xuất hiện trên dòng máy này, thoải mái lưu trữ mọi nội dung bạn thích.</p>
                            <h2>Khung máy lớn, thiết kế bóng bẩy đẳng cấp</h2>
                            <p>iPhone 13&zwnj; Pro Max&nbsp;có cùng kích thước với&nbsp;iPhone 12 Pro Max, lớn và vuông ở phàn viền gia cố từ&nbsp;thép không gỉ có khả năng chống mài mòn và trầy xước tốt. Thêm các tùy chọn màu sắc&nbsp;Sierra Blue
                                mới, cùng với Graphite, Gold và Silver tinh tế và nhã nhặn.&nbsp;</p>
                            <p>Ngoài ra, tại sự kiện "Peek Performance" được tổ chức vào rạng sáng ngày 9/3 vừa qua, Apple cũng cho ra mắt thêm&nbsp;<strong>iPhone 13 Pro màu xanh lá</strong>&nbsp;mới, dự đoán sẽ rất hút các iFan bởi độ sang chảnh
                                và đẳng cấp.</p>
                            <p><img data-thumb="original" original-height="2400" original-width="4056" src="//bizweb.dktcdn.net/100/480/632/files/iphone-13-pro-2022-gallery-minht.jpg?v=1681770014046"></p>
                            <h3>Bộ 3 camera 12MP chống rung hoàn hảo, thêm nhiều tính năng chụp ảnh mới</h3>
                            <p>Về Camera, dòng máy Pro Max vẫn có 3 camera 12MP như trước. Đầu tiên phải kể tới công nghệ chống rung cảm biến được cải thiện rõ rệt, cùng với nâng cấp từ bộ xử lý tín hiệu hình ảnh ISP trên chip A15 Bionic, những bức
                                ảnh, thước phim cho ra sẽ cải thiện rõ rệt về chất lượng.</p>
                            <p>Camera góc rộng&nbsp;có kích thước điểm ảnh trên cảm biến là&nbsp;1.9 µm, lớn nhất trên các&nbsp;iPhone&nbsp;từ xưa giờ, giảm tối đa tình trạng noise&nbsp;và lấy nét trong điều kiện thiếu sáng nhanh chóng hơn. Với chế
                                độ chụp ảnh thông thường, bạn đã có được bức ảnh sáng rõ và chi tiết.</p>
                            <p>Camera góc siêu rộng trên iPhone 13 Pro Max&nbsp;khẩu độ f/1.8,&nbsp;lấy nét AF nhanh chóng và cải thiện đến&nbsp;92% chất lượng ảnh&nbsp;trong điều kiện thiếu sáng.</p>
                            <p>Tiêu cự ống tele sẽ được nâng lên 3x, nâng khả năng zoom tổng lên 6x zoom quang học, tuỳ ý zoom phóng cận cảnh đến gần 2cm.</p>
                            <p>Chế độ điện ảnh&nbsp;Cinematic sử dụng sức mạnh của A15 làm mờ hậu cảnh khá mượt mà. trong lúc&nbsp;quay video, người dùng có thể chạm vào các chủ thể khác nhau để chọn tiêu điểm. Ngoài ra máy vẫn có khả năng quay 4K@60fps
                                HDR, hỗ trợ Dolby Vision, Smart HDR 4...</p>
                            <h2>Vi xử lý nâng cấp, dung lượng pin cải thiện</h2>
                            <p>Giống với nhiều thế hệ iPhone mới, vi xử lý A15 Bionic 5 mn được nâng cấp lên một bậc với hiệu năng cải thiện đáng kể cùng khả năng hỗ trợ mạng 5G, bổ sung thêm hàng loạt các tính đăng độc đáo mới
                                chỉ có trên&nbsp;iPhone 13.</p>
                            <p>Theo nhà sản xuất công bố, chip A15 thế hệ mới này cho hiệu năng đồ họa nhanh hơn tới 50% so với smartphone cùng phân khúc. Ngoài ra, khả năng kết nối 5G cũng được cải thiện đáng kể, cùng với đó là chế độ dữ liệu thông
                                minh, giảm tốc độ khi không cần thiết để tiết kiệm điện năng.</p>
                            <p>Chưa kể đến, 1TB là mức dung lượng cao nhất của dòng máy này, bạn thoải mái tải game, phim chất lượng cao hay dựng video 4K trên máy mà không lo hết dung lượng.</p>
                            <h2>Màn hình Promotion 120Hz tiết kiệm pin, lướt mượt mà</h2>
                            <p>Một trong những yếu tố khiến iPhone 13 Pro Max đáng mong chờ đó là thiết kế notch nhỏ hơn 20%,&nbsp;ngoài kích cỡ màn hình 6.7 inch với tấm nền Super Retina XDR OLED, tỷ lệ hiển thị trên màn
                                hình điện thoại mở rộng hơn. Những cảm biến quan trọng như TrueDepth, Face ID hoặc camera selfie đều nằm&nbsp;nguyên vị trí. Màn hình này có độ làm tươi 120Hz, vì thế mà mọi hình ảnh đều luôn tươi sáng
                                và bắt kịp thời gian nhất, đặc biệt là trong trận game hay livestream.</p>
                            <p>Nhìn chung, iPhone 13 Pro Max 1TB có mức dung lượng khủng ấn tượng, thiết kế trang nhã 4 màu sắc ấm áp cùng lớp vỏ kim loại sáng bóng. Với cấu hình ưu việt, iPhone 13 Pro Max thật sự là phiên bản smartphone khủng từ
                                trong ra ngoài đáng sở hữu.</p>
                        </div>
                        <div class="show-more hidden-lg hidden-md hidden-sm">
                            <div class="btn btn-default btn--view-more duration-300 mt-3">
                                <span class="more-text text-white">Xem thêm <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                    <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"></path>
                                    </svg></span>
                                <span class="less-text d-none text-white">Thu gọn <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-up-fill" viewBox="0 0 16 16">
                                    <path d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"></path>
                                    </svg></span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-12">
                <div class="specifications">
                    <div class="title">Thông số kỹ thuật</div>
                    <table class="tskt table table-striped table-hover">
                        <tbody>
                            <tr>
                                <td>Hãng sản xuất</td>
                                <td>Apple</td>
                            </tr>
                            <tr>
                                <td>Kích thước màn hình</td>
                                <td>6.7&nbsp;inches</td>
                            </tr>
                            <tr>
                                <td>Độ phân giải màn hình</td>
                                <td>2778x1284&nbsp;pixel</td>
                            </tr>
                            <tr>
                                <td>Loại màn hình</td>
                                <td>OLED LPTO</td>
                            </tr>
                            <tr>
                                <td>Bộ nhớ trong</td>
                                <td>1TB</td>
                            </tr>
                            <tr>
                                <td>Chipset</td>
                                <td>Apple A15 Bionic</td>
                            </tr>
                            <tr>
                                <td>CPU</td>
                                <td>A15</td>
                            </tr>
                            <tr>
                                <td>GPU</td>
                                <td>Apple GPU (5 lõi)</td>
                            </tr>
                            <tr>
                                <td>Kích thước</td>
                                <td>131.5 x 64.2 x 7.4 mm</td>
                            </tr>
                            <tr>
                                <td>Trọng lượng</td>
                                <td>235 g</td>
                            </tr>
                            <tr>
                                <td>Camera sau</td>
                                <td>
                                    <p>- 12 MP: Kích thước khẩu độ:&nbsp;F1.5;&nbsp;Độ dài tiêu cự:&nbsp;26 mm;&nbsp;Kích thước pixel:&nbsp;1,4 μm<br> - 12 MP (Chụp xa, OIS, PDAF): Zoom quang học: 3.0x;&nbsp;Kích thước khẩu độ: F2.0;&nbsp;Tiêu cự:
                                        52 mm<br> - 12 MP (Siêu rộng): Kích thước khẩu độ: F2.8; góc chụp 120 độ, Tiêu cự: 13 mm</p>
                                </td>
                            </tr>
                            <tr>
                                <td>Camera trước</td>
                                <td>12 MP, f/2.2, 23mm (wide), 1/3.6"<br> SL 3D, (depth/biometrics sensor)</td>
                            </tr>
                            <tr>
                                <td>Quay video</td>
                                <td>
                                    <p>- Sau: 3840x2160 (4K UHD) (60 khung hình / giây), 1920x1080 (Full HD) (240 khung hình / giây), 1280x720 (HD) (30 khung hình / giây)<br> - Trước: 12 MP (Thời gian bay (ToF), EIS, HDR, Video chuyển động chậm)
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>Pin</td>
                                <td>Li-Ion, sạc nhanh 20W, sạc không dây 15W, USB Power Delivery 2.0</td>
                            </tr>
                            <tr>
                                <td>Cổng sạc</td>
                                <td>Lightning, USB 2.0</td>
                            </tr>
                            <tr>
                                <td>Loại SIM</td>
                                <td>Dual SIM (nano‑SIM and eSIM)</td>
                            </tr>
                            <tr>
                                <td>Hệ điều hành</td>
                                <td>iOS</td>
                            </tr>
                            <tr>
                                <td>Phiên bản hệ điều hành</td>
                                <td>iOS 15</td>
                            </tr>
                            <tr>
                                <td>Khe cắm thẻ nhớ</td>
                                <td>Không</td>
                            </tr>
                            <tr>
                                <td>3G</td>
                                <td>HSPA 42.2/5.76 Mbps, EV-DO Rev.A 3.1 Mbps</td>
                            </tr>
                            <tr>
                                <td>4G</td>
                                <td>LTE-A (4CA) Cat16 1024/150 Mbps</td>
                            </tr>
                            <tr>
                                <td>5G</td>
                                <td>mmWave, Sub-6 GHz</td>
                            </tr>
                            <tr>
                                <td>WLAN</td>
                                <td>Wi-Fi 802.11 a/b/g/n/ac/6, dual-band, hotspot</td>
                            </tr>
                            <tr>
                                <td>Bluetooth</td>
                                <td>5.0, A2DP, LE</td>
                            </tr>
                            <tr>
                                <td>GPS</td>
                                <td>A-GPS, GLONASS, GALILEO, QZSS</td>
                            </tr>
                            <tr>
                                <td>NFC</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>Cảm biến</td>
                                <td>Face ID, cảm biến gia tốc, cảm biến tiệm cận, con quay hồi chuyển, cảm biên sáng,&nbsp;ace ID, cảm biến gia tốc, cảm biến tiệm cận, con quay hồi chuyển, cảm biên sáng</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="mb-3 mt-2">
                    <div class="text-center specifications-button-show ">
                        <button type="button" class="btn text-white rounded-3 border specifications-button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Xem cấu hình chi tiết <i class="fas fa-cogs mx-2"></i>
                      </button>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Thông số kỹ thuật</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <table class="tskt table-bordered  table table-striped table-hover">
                                        <tbody>
                                            <tr>
                                                <td>Hãng sản xuất</td>
                                                <td>Apple</td>
                                            </tr>
                                            <tr>
                                                <td>Kích thước màn hình</td>
                                                <td>6.7&nbsp;inches</td>
                                            </tr>
                                            <tr>
                                                <td>Độ phân giải màn hình</td>
                                                <td>2778x1284&nbsp;pixel</td>
                                            </tr>
                                            <tr>
                                                <td>Loại màn hình</td>
                                                <td>OLED LPTO</td>
                                            </tr>
                                            <tr>
                                                <td>Bộ nhớ trong</td>
                                                <td>1TB</td>
                                            </tr>
                                            <tr>
                                                <td>Chipset</td>
                                                <td>Apple A15 Bionic</td>
                                            </tr>
                                            <tr>
                                                <td>CPU</td>
                                                <td>A15</td>
                                            </tr>
                                            <tr>
                                                <td>GPU</td>
                                                <td>Apple GPU (5 lõi)</td>
                                            </tr>
                                            <tr>
                                                <td>Kích thước</td>
                                                <td>131.5 x 64.2 x 7.4 mm</td>
                                            </tr>
                                            <tr>
                                                <td>Trọng lượng</td>
                                                <td>235 g</td>
                                            </tr>
                                            <tr>
                                                <td>Camera sau</td>
                                                <td>
                                                    <p>- 12 MP: Kích thước khẩu độ:&nbsp;F1.5;&nbsp;Độ dài tiêu cự:&nbsp;26 mm;&nbsp;Kích thước pixel:&nbsp;1,4 μm<br> - 12 MP (Chụp xa, OIS, PDAF): Zoom quang học: 3.0x;&nbsp;Kích thước khẩu độ: F2.0;&nbsp;Tiêu
                                                        cự: 52 mm<br> - 12 MP (Siêu rộng): Kích thước khẩu độ: F2.8; góc chụp 120 độ, Tiêu cự: 13 mm</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Camera trước</td>
                                                <td>12 MP, f/2.2, 23mm (wide), 1/3.6"<br> SL 3D, (depth/biometrics sensor)</td>
                                            </tr>
                                            <tr>
                                                <td>Quay video</td>
                                                <td>
                                                    <p>- Sau: 3840x2160 (4K UHD) (60 khung hình / giây), 1920x1080 (Full HD) (240 khung hình / giây), 1280x720 (HD) (30 khung hình / giây)<br> - Trước: 12 MP (Thời gian bay (ToF), EIS, HDR, Video chuyển
                                                        động chậm)
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Pin</td>
                                                <td>Li-Ion, sạc nhanh 20W, sạc không dây 15W, USB Power Delivery 2.0</td>
                                            </tr>
                                            <tr>
                                                <td>Cổng sạc</td>
                                                <td>Lightning, USB 2.0</td>
                                            </tr>
                                            <tr>
                                                <td>Loại SIM</td>
                                                <td>Dual SIM (nano‑SIM and eSIM)</td>
                                            </tr>
                                            <tr>
                                                <td>Hệ điều hành</td>
                                                <td>iOS</td>
                                            </tr>
                                            <tr>
                                                <td>Phiên bản hệ điều hành</td>
                                                <td>iOS 15</td>
                                            </tr>
                                            <tr>
                                                <td>Khe cắm thẻ nhớ</td>
                                                <td>Không</td>
                                            </tr>
                                            <tr>
                                                <td>3G</td>
                                                <td>HSPA 42.2/5.76 Mbps, EV-DO Rev.A 3.1 Mbps</td>
                                            </tr>
                                            <tr>
                                                <td>4G</td>
                                                <td>LTE-A (4CA) Cat16 1024/150 Mbps</td>
                                            </tr>
                                            <tr>
                                                <td>5G</td>
                                                <td>mmWave, Sub-6 GHz</td>
                                            </tr>
                                            <tr>
                                                <td>WLAN</td>
                                                <td>Wi-Fi 802.11 a/b/g/n/ac/6, dual-band, hotspot</td>
                                            </tr>
                                            <tr>
                                                <td>Bluetooth</td>
                                                <td>5.0, A2DP, LE</td>
                                            </tr>
                                            <tr>
                                                <td>GPS</td>
                                                <td>A-GPS, GLONASS, GALILEO, QZSS</td>
                                            </tr>
                                            <tr>
                                                <td>NFC</td>
                                                <td>Yes</td>
                                            </tr>
                                            <tr>
                                                <td>Cảm biến</td>
                                                <td>Face ID, cảm biến gia tốc, cảm biến tiệm cận, con quay hồi chuyển, cảm biên sáng,&nbsp;ace ID, cảm biến gia tốc, cảm biến tiệm cận, con quay hồi chuyển, cảm biên sáng</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
