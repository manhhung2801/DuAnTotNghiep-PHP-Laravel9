@extends('frontend.layouts.master')
@section('title', 'Chính sách giao hàng')

@section('content')
<div class="layout-collection">
    <section class="bread-crumb">
        <div class="container">
            <ul class="breadcrumb">
                <li class="home">
                    <a href="#" title="Trang chủ"><span>Trang chủ</span></a>
                    <span class="mr_lr mx-2"><i class="fas fa-angle-right"></i></span>
                    <strong><span>Giao hàng</span></strong>
                </li>

            </ul>
        </div>
    </section>
</div>
<!-- Main content -->
<div class="container">
    <div class="row">
        <h2 class="text-center my-4">Giao hàng </h2>
        <p>
            Mong muốn mang lại dịch vụ tốt nhất cho khách hàng, ShopDunk hợp tác cùng Viettel Post triển khai dịch vụ ship COD <br> toàn quốc. Dù ở bất kỳ tỉnh thành nào trên toàn quốc, bạn vẫn có thể mua hàng tại ShopDunk – Đại lý uỷ quyền Apple
        </p>
        <h3>
            A. Ship COD phù hợp với ai?
        </h3>
        <div class="container">
            <ul>
                <li>Áp dụng cho khách hàng trên 63 tỉnh thành.</li>
                <li>Áp dụng cho khách hàng không đến mua hàng trực tiếp tại cửa hàng chi nhánh.</li>
                <li>Áp dụng cho khách hàng thanh toán trả thẳng với tất cả những sản phẩm tại ShopDunk.</li>
            </ul>
        </div>

        <h3>
            B. 4 bước nhanh chóng để mua hàng Ship COD
        </h3>
        <div class="container">
            <ul>
                <li><b>Bước 1: Khách hàng đặt hàng.</b></li>
                <li style="list-style: none;">Sau khi chọn được sản phẩm ưng ý, khách hàng để lại thông tin cụ thể của mình, nhân viên tư vấn xin thông tin khách hàng (xác nhận chính xác):</li>
                <li style="list-style: none;">
                    <ol type="1">
                        <li>Họ và tên đầy đủ</li>
                        <li>Số điện thoại của khách hàng</li>
                        <li>Địa chỉ giao hàng: Chi tiết và chính xác</li>
                    </ol>
                </li>

                <li style="list-style: none;">Trường hợp không nhận trực tiếp, khách hàng cần cung cấp đầy đủ thông tin người đặt hàng và người nhận:</li>
                <li style="list-style: none;">
                    <ol type="1">
                        <li>Họ và tên đầy đủ người đặt & người nhận</li>
                        <li>Số điện thoại của người đặt & người nhận</li>
                        <li>Địa chỉ giao hàng: Chi tiết và chính xác</li>
                    </ol>
                </li>
                <li style="list-style: none;"><i>Miễn phí giao hàng cho đơn hàng từ 1 triệu đồng (không áp dụng cho
                        phụ kiện thường)</i></li>
                <li><b>Bước 2: Khách hàng đặt hàng.</b></li>
                <li style="list-style: none;">Quy định đặt hàng</li>
            </ul>
        </div>
        <p>Với sản phẩm có giá trị cao, ShopDunk luôn gửi đi kèm bảo hiểm giá trị hàng hoá. Khách hàng cọc tiền để được đảm bảo về chất lượng vận chuyển luôn được tốt nhất.Quy định giá trị đặt cọc như sau: </p>

        <div class="col-lg-12 ">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th scope="col">Giá trị sản phẩm</th>
                        <th scope="col">Giá trị cọc</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <10.000.000đ </td>
                        <td>Từ 500.000đ trở lên</td>
                    </tr>
                    <tr>
                        <td>10.000.000 - 20.000.000 đ</td>
                        <td>từ 2.000.000 đ trở lên</td>
                    </tr>
                    <tr>
                        <td>20.000.000 - 25.000.000 đ</td>
                        <td>50% giá trị đơn hàng</td>
                    </tr>
                    <tr>
                        <td>> 25.000.000 đ</td>
                        <td>> 25.000.000 đ</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <p><b>Thông tin tài khoản công ty:</b></p>
        <p><i>* Khách hàng vui lòng chuyển khoản vào tài khoản công ty sau. Sau đó chụp lại màn hình chuyển khoản
                thành
                công và liên hệ với ShopDunk để xác nhận.Chúng tôi không chịu trách nhiệm nếu quý khách chuyển vào
                bất
                kỳ tài khoản cá nhân nào.</i></p>
        <div class="col-lg-4">
            <img src="/public/images/uploaded/Tech.png" alt="" class="w-100">
        </div>
        <div class="col-lg-4">
            <img src="/public/images/uploaded/Vietcom.png" alt="" class="w-100">
        </div>
        <div class="col-lg-4">
            <img src="/public/images/uploaded/Vietin.png" alt="" class="w-100">
        </div>
        <p><b>Quý khách hàng chuyển khoản với nội dung: COD + Tên khách hàng + Tên sản phẩm</b></p>

        <div class="container">
            <ul>
                <li class="my-2"><b>Bước 3: Quý khách hàng chuyển khoản với nội dung: COD + Tên khách hàng + Tên sản
                        phẩm</b>
                </li>
                <li style="list-style: none;">
                    <ol type="1">
                        <li>Họ và tên</li>
                        <li>Số điện thoại của khách hàng</li>
                        <li>Địa chỉ nhận hàng</li>
                        <li>Tên đầy đủ chỉ tiết sản phẩm kèm giá niêm yết (mức giảm giá nếu có)</li>
                        <li>Quà khuyến mại (nếu có)</li>
                        <li>Tổng giá trị đơn hàng, số tiền đã cọc, số tiền thanh toán còn lại</li>
                    </ol>
                </li>

                <li class="my-2">Khách hàng sẽ được nhận các thông tin về đơn hàng trước khi kiện hàng được ShopDunk gửi đi:</li>
                <li style="list-style: none;">
                    <ol type="1">
                        <li>Ảnh thông số imei/serial, thông số dung lượng và màu sắc trên vỏ hộp</li>
                        <li>Ảnh mặt trước, mặt sau, ảnh sản phẩm Fullbox</li>
                        <li>ĐẢnh phiếu bán hàng</li>
                        <li>File hoá đơn giá trị gia tăng (khách hàng lưu trữ để bảo hành máy tại Apple)</li>
                        <li>Ảnh đóng hộp có dán băng dính đỏ logo ShopDunk</li>
                        <li>Mã vận đơn <br>
                            <i>Sau khi xác nhận đơn hàng, khách hàng vui lòng chờ thời gian vận chuyển từ 3 - 5 ngày
                                (không tính chủ nhật và ngày lễ)</i>
                        </li>
                    </ol>
                </li>
                <li class="my-2">Bước 4. Khách hàng kiểm tra khi nhận hàng</li>
                <li style="list-style: none;">
                    <ol type="1">
                        <li>Băng dính đỏ logo ShopDunk không có dấu hiệu bị rạch</li>
                        <li>Phiếu bán hàng đúng thông tin</li>
                        <li>Hoá đơn giá trị gia tăng đúng thông tin đã đăng kí</li>
                        <li>Seal hộp và máy không có dấu hiệu bị rạch</li>
                        <li>Thông số imei/serial, màu sắc, dung lượng trên box đúng với hàng đã đặt</li>
                        <li>Các quà tặng kèm theo (nếu có) </li>
                    </ol>
                </li>
                <li>Sau đó khi thanh toán hết số tiền còn lại, khách hàng có thể sử dụng.</li>
            </ul>
            <p><b>Để đảm bảo quyền lợi của khách hàng, ShopDunk khuyến khích khách hàng quay và lưu lại video bóc
                    seal và active máy.</b></p>
            <p><b>
                    Quý khách hàng cần hỗ trợ vui lòng liên hệ: Tư vấn viên Phương Thảo - 0911.939.888 <br>
                    www.shopdunk.com - 1900.6626
                </b></p>
        </div>
    </div>

</div>
@endsection