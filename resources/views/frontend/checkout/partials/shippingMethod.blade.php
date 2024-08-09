<div class="form-group rounded-1 border p-1 align-content-center mt-3">
    <div class="custom-control custom-radio mt-2 ms-2">
        <div class="radio-wrapper ">
            <div class="mt-0">
                <div class="radio__input">
                    <input type="radio" name="shipping_method" value="0" class="input-radio" id="receiveStore">
                </div>
            </div>
            <label for="receiveStore" class="radio__label">
                <span class="radio__label__primary">
                    <span>Nhận tại cửa hàng</span>
                </span>
                <span class="radio__label__accessory">
                    <span class="content-box__emphasis price me-2">
                        <img src="{{ asset('uploads/logo/cybermart_logo_text.png') }}" alt="cybermart" width="80px">
                    </span>
                </span>
            </label>
        </div>
        <div  class=" mt-2">
            <ul id="pick_address_store" class="d-none">

            </ul>
        </div>
    </div>
</div>
<div class="form-group rounded-1 border p-1 align-content-center mt-2">
    <div class="custom-control custom-radio mt-2 ms-2">
        <div class="radio-wrapper ">
            <div class="mt-0">
                <div class="radio__input">
                    <input type="radio" name="shipping_method" value="1" class="input-radio" id="ghtk"
                        checked>
                </div>
            </div>
            <label for="ghtk" class="radio__label pb-2">
                <span class="radio__label__primary">
                    <span>Giao hàng tiết kiệm</span>
                </span>
                <span class="radio__label__accessory">
                    <span class="content-box__emphasis price me-2">
                        <img src="{{ asset('uploads/072024/Logo-GHTK-H.webp') }}" alt="GHTK_icon" width="80px">
                    </span>
                </span>
            </label>
        </div>
    </div>
</div>
