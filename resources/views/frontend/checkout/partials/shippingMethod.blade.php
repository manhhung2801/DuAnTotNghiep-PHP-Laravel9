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
                    <span>Nhận tại cữa hàng</span>
                </span>
                <span class="radio__label__accessory">
                    <span class="content-box__emphasis price ">
                        <i class="fas fa-money-bill-wave fs-4 mx-3" style="color: #74C0FC;"></i>
                    </span>
                </span>
            </label>
        </div>
        <div id="pick_address_store" class="d-none mt-2">
            {{-- <label class="form-label" for="">Chọn địa chỉ cữa hàng: </label> --}}
            {{-- <select id="pick_address_store_select" class="w-100 py-2 " name="pick_address_store">
            </select> --}}
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
            <label for="ghtk" class="radio__label">
                <span class="radio__label__primary">
                    <span>Giao hàng tiết kiệm</span>
                </span>
                <span class="radio__label__accessory">
                    <span class="content-box__emphasis price ">
                        <i class="fas fa-money-bill-wave fs-4 mx-3" style="color: #74C0FC;"></i>
                    </span>
                </span>
            </label>
        </div>
    </div>
</div>
