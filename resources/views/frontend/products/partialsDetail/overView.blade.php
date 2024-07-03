<h1 class="title-product fs-4 mt-3">{{ $product->name }}</h1>
<div class="inventory_quantity">
    <span class="mb-break">
        <span class="stock-brand-title">Thương hiệu:</span>
        <span class="a-vendor">
            Apple
        </span>
    </span>
    <span class="line">&nbsp;&nbsp;|&nbsp;&nbsp;</span>
    <span class="mb-break">
        <span class="stock-brand-title">Tình trạng:</span>
        <span class="a-stock"><span class="a-stock">Còn hàng</span></span>
    </span>
</div>
<hr>
<div class="price-box ">
    <span class="special-price">
        <span class="price product-price fs-4 text-danger">19.490.000₫</span>
    </span>
    <!-- Giá Khuyến mại -->
    <span class="old-price">
        <del class="price product-price-old mx-1">21.990.000₫</del>
    </span>
    <!-- Giá gốca -->
</div>

<div class="form-product ">
    <div class="select-swatch mb-3 ">
        <div class="header">Màu sắc: <span class="value-properties">Xám</span></div>
        <div class="swatch d-flex">
            <div data-value="Đỏ" title="Đỏ" class="swatch-element color " onclick="changeColor(this)">
                <div class="tooltip">Đỏ</div>
                <input id="swatch-0-den" type="radio" name="option" class="d-none" value="red" checked="">
                <label for="swatch-0-den" style="background-color: red"></label>
            </div>
            <div data-value="Xanh" title="Xanh" class="swatch-element color " onclick="changeColor(this)">
                <div class="tooltip">Xanh</div>
                <input id="swatch-0-xanh" type="radio" name="option" class="d-none" value="xanh">
                <label for="swatch-0-xanh" style="background-color: blue">
                </label>
            </div>
            <div data-value="Vàng" title="Vàng" class="swatch-element color " onclick="changeColor(this)">
                <div class="tooltip">Vàng</div>
                <input id="swatch-0-vang" type="radio" name="option" class="d-none" value="vàng">
                <label for="swatch-0-vang" style="background-color: yellow">
                </label>
            </div>
        </div>
    </div>
    <div class="product-summary">
        <div class="rte">
            <p>✔️Máy mới Fullbox 100% - Chưa Active - Chính Hãng Apple<br> ✔️Được hỗ trợ 1 đổi 1 trong 30 ngày nếu có
                lỗi từ nhà sản xuất<br> ✔️Bảo hành chính hãng Apple 12 tháng</p>
        </div>
    </div>
    <div class="boz-form mb-3">
        <div class="flex-quantity">
            <div class="custom custom-btn-number  ">
                <span>Số lượng: </span>
                <div class="input_number_product ">
                    <button class="btn_num num_1 button button_qty"><span>-</span></button>
                    <input type="text" id="qtym" name="quantity" value="1" maxlength="3"
                        class="form-control prd_quantity">
                    <button class="btn_num num_2 button button_qty"><span>+</span></button>
                </div>
            </div>
            <form class="formCart" method="post">
                <input class="productId" type="hidden" value="{{ $product->id }}">
                <div class="btn-mua button_actions col-md-12 col">
                    <button type="button" class="btn-buyNow btn col-12 btn-addToCart">
                        <span class="txt-main text-white">Mua ngay</span>
                        <span class="text-white">Giao tận nơi hoặc nhận tại cửa hàng</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
