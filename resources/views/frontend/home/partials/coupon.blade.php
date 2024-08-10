<style>
    .coupon_card {
        border-radius: 5px;
        box-shadow: 0px 0px 6px 0px rgba(50, 50, 93, 0.15), 1px 1px 5px rgba(0, 0, 0, 0.05);
        background-color: #fff;
        padding: 10px 10px;
        position: relative;
    }
    .coupon_card:hover{
        
    }

    .coupon_item,
    .copy-button {
        padding: 0 10px;
    }

    .content_coupon .coupon_low {
        font-size: 16px;
        color: #e31934;
        margin-bottom: 2px;
    }

    .content_coupon .coupon_low span {
        font-size: 14px;
        color: #333333;

    }

    .content_coupon h2 {
        font-size: 16px;
        color: #e31934;
        text-transform: uppercase;
        font-weight: 700;
        margin-bottom: 2px;
    }

    .content_coupon p {
        font-size: 12px;
        color: #333333;
        margin-bottom: 2px;
    }

    .copy-button {
        /* margin: 12px 0 -5px 0; */
        height: 35px;
        border-radius: 4px;
        padding: 0 5px;
        border: 1px solid #e1e1e1;
    }

    .copy-button input {
        width: 100%;
        height: 100%;
        border: none;
        outline: none;
        font-size: 12px;
    }

    .copy-button button {
        padding: 0px 15px;
        background-color: #dc143c;
        color: #fff;
        border: 1px solid transparent;
    }
</style>
<div class="container pt-5">
    <h1 class="visually-hidden">Danh sách phiếu giảm giá CyberMart - Hệ thống thương mại điện tử hàng đầu Việt Nam</h1>
    <div class="row">
        @forelse ($getCoupon as $coupon)
            <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-3 px-1">
                <div class="coupon_card">
                    <div class="coupon_item">
                        <div class="content_coupon text-center">
                            <h2>{{ $coupon->name }}</h2>
                            <h3 class="coupon_low"><span>Giảm</span>
                                {{ number_format($coupon->precent_amount, 0, '.', '.') }}
                                {{ $coupon->coupon_type == 'amount' ? ' VNĐ' : '%' }}
                            </h3>
                            @php
                                $dateString = $coupon->end_date; // Chuỗi ngày tháng
                                $date = \Carbon\Carbon::parse($dateString); // Chuyển chuỗi thành đối tượng Carbon
                            @endphp
                            <p>Ngày kết thúc vào {{ $date->format('d/m/Y') }}</p>
                        </div>
                    </div>
                    <div class="copy-button d-flex align-items-center justify-content-center">
                        <input id="copyvalue" type="text" readonly value="{{ $coupon->code }}" />
                        <button class="copybtn">COPY</button>
                    </div>
                </div>
            </div>
        @empty
        @endforelse
    </div>
</div>
@section('script')
    <script>
        function copyIt() {
            let copybtn = document.querySelectorAll(".copybtn");
            copybtn.forEach(button => {
                button.addEventListener('click', function() {
                    //previousElementSibling lấy input gần nhất
                    let copyInput = this.previousElementSibling;
                    copyInput.select();
                    document.execCommand("copy");
                    this.textContent = "Copied";

                    // Đặt lại nút sau 2 giây
                    setTimeout(() => {
                        this.textContent = "COPY";
                    }, 2000);
                });
            });
        }

        // Gọi hàm khi trang đã tải xong
        document.addEventListener('DOMContentLoaded', copyIt);
    </script>
@endsection
