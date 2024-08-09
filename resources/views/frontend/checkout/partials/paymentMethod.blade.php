<div class="form-group rounded-1 border p-1 align-content-center mt-3">
    <div class="custom-control custom-radio mt-2 ms-2">
        <div class="radio-wrapper ">
            <div class="mt-0">
                <div class="radio__input">
                    <input type="radio" name="payment_method" value="0" class="input-radio" id="flexRadioDefault1" checked>
                </div>
            </div>
            <label for="flexRadioDefault1" class="radio__label">
                <span class="radio__label__primary">
                    <span>Thanh toán khi nhận hàng</span>
                </span>
                <span class="radio__label__accessory">
                    <span class="content-box__emphasis price ">
                        <i class="fas fa-money-bill-wave fs-4 mx-3" style="color: #000;"></i>
                    </span>
                </span>
            </label>
        </div>
    </div>
</div>
<div class="form-group rounded-1 border p-1 mt-2">
    <div class="radio-wrapper  ">
        <div class="custom-control custom-radio mt-2 ms-2 d-flex" data-bs-toggle="collapse" href="#collapseExample">
            <div class="radio__input">
                <input type="radio" class="input-radio" value="1" name="payment_method" id="method_bank">
            </div>
            <label for="method_bank" class="radio__label">
                <span class="radio__label__primary">
                    <span>VNPAY</span>
                </span>
                <span class="radio__label__accessory">
                    <span class="content-box__emphasis price ">
                        <img src="{{asset("uploads/vnpay.png")}}" class="me-3" style="margin-top: -2px;height: 13px; width: 60px"/>
                    </span>
                </span>
            </label>
        </div>
    </div>
</div>

