@extends('frontend.layouts.master')
@section('title', 'Phương thức thanh toán')

@section('content')
<div class="wrapper-paymentmMethod_page">
    <div class="container">
        <div class="group_news">
            <div class="page-title py-3">
                <h1 class="text-center">Phương thức thanh toán</h1>
            </div>
            <div class="page-body">
                <div class="news-items row">
                    <div class="col-md-12">
                        <h4>1. Các phương thức thanh toán</h4>
                        <ul class="mt-3">
                            <li>Thanh toán khi nhận hàng: tiền mặt</li>
                            <li>Chuyển khoản ngân hàng.</li>
                            <li>Thanh toán ATM Nội địa/ Internet Banking/ Thẻ quốc tế/ Cổng thanh toán Alepay (có mất phí theo cổng thanh toán)</li>
                            <li>Thanh toán qua Ví Moca (có mất phí theo cổng thanh toán)</li>
                            <li>Thanh toán qua ví ZaloPay (có mất phí theo cổng thanh toán)</li>
                            <li>Thanh toán qua ví Momo (có mất phí theo cổng thanh toán)</li>
                        </ul>
                        <h4 class="mt-3">2. Chi tiết các phương thức thanh toán</h4>
                        <p>2.1 Tiền mặt: Thu tiền mặt khi khách hàng nhận hàng (Tiền Việt Nam Đồng thật và đủ tiêu chuẩn lưu thông theo quy định của Ngân hàng Nhà nước Việt Nam)</p>
                        <p>2.2 Chuyển khoản Ngân hàng:</p>
                        <h4 class="text-center">THÔNG TIN TÀI KHOẢN CÔNG TY</h4>
                        <span class="pt-3 fst-italic">* Khách hàng vui lòng chuyển khoản vào tài khoản công ty sau. <br />
                            Chúng tôi không chịu trách nhiệm nếu quý khách chuyển vào bất kỳ tài khoản cá nhân nào.
                        </span>
                        <div class="d-flex bd-highlight mt-4 mb-3">
                            <div class="p-2 flex-fill bd-highlight"><img src="https://shopdunk.com/images/uploaded/Tech.png" class="shadow-sm bg-body rounded" width="416px"></div>
                            <div class="p-2 flex-fill bd-highlight"><img src="https://shopdunk.com/images/uploaded/Vietcom.png" class="shadow-sm bg-body rounded" width="416px"></div>
                            <div class="p-2 flex-fill bd-highlight"><img src="https://shopdunk.com/images/uploaded/Vietin.png" class="shadow-sm bg-body rounded" width="416px"></div>
                        </div>
                        <p>2.3. Thanh toán ATM Nội địa/ Internet Banking/ Thẻ quốc tế/ Cổng thanh toán Alepay: thông tin chi tiết tham khảo tại đây <a href="https://alepay.vn/index#/alepay">https://alepay.vn/index#/alepay</a></p>
                        <p>2.4. Thanh toán qua Ví Moca: thông tin chi tiết tham khảo tại đây <a href="https://www.grab.com/vn/pay/">https://www.grab.com/vn/pay/</a></p>
                        <p>2.5. Thanh toán qua ví ZaloPay: thông tin chi tiết tham khảo tại đây <a href="https://zalopay.vn/">https://zalopay.vn/</a></p>
                        <p>2.6. Thanh toán qua ví Momo: thông tin chi tiết tham khảo tại đây <a href="https://momo.vn/">https://momo.vn/</a></p>
                        <p></p>
                        <h5 class="mt-3">3. Quy định áp dụng thanh toán</h5>
                        <p>Có thể áp dụng cho tất cả các đơn hàng đặt hàng trên website <a href="">https://showeour.vn/</a></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection