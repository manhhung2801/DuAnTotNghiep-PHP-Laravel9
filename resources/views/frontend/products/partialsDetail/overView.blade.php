<h1 class="title-product fs-4 mt-3">{{ $product->name }}</h1>
<div class="inventory_quantity">
    <span class="mb-break">
        <span class="stock-brand-title">Mã sản phẩm:</span>
        <span class="a-vendor">
            {{ $product->sku }}
        </span>
    </span>
    <span class="line">&nbsp;&nbsp;|&nbsp;&nbsp;</span>
    <span class="mb-break">
        <span class="stock-brand-title">Tình trạng:</span>
        <?php if ($product->qty > 0) : ?>
        <span class="a-stock">Còn {{ $product->qty }} sản phẩm</span>
        <?php else : ?>
        <span class="a-stock">Hết hàng</span>
        <?php endif; ?>
    </span>
</div>
<hr>
<div class="price-box ">
    <span class="flash-saless"
        style="display: none;">{{ Helper::discount($product->offer_start_date, $product->offer_end_date, $product->price, $product->offer_price) }}
    </span>

    @php
        $prices = Helper::CouponsPrice(
            $product->offer_start_date,
            $product->offer_end_date,
            $product->price,
            $product->offer_price,
        );
    @endphp
    <div class="price-box">
        <span class="compare-price CouponsPrice_olds">{{ $prices['price_old'] }} <i
                class="fa-regular fa-dong-sign"></i></span>
        <span class="price  CouponsPrice_news3">{{ $prices['price_new'] }} <i class='fa-solid fa-dong-sign'></i> </span>
        <div class="d-flex align-items-center" style="gap: 4px">
            <span class="price CouponsPrice_news1">
                {{ $prices['price_old'] }} <i class='fa-solid fa-dong-sign'></i>
            </span>
            <span class="compare-price CouponsPrice_news2">{{ $prices['price_new'] }} <i
                    class="fa-regular fa-dong-sign"></i></span>
        </div>
    </div>
</div>

<div class="form-product ">
    <div class="select-swatch ">
        @foreach ($product->variant as $variant)
            @if ($variant->type == 1)
                <div class="header">Màu sắc: <span class="value-properties">{{ $variant->name }}</span></div>
                <div class="swatch d-flex mt-2">
                    @foreach ($variant->variantItem as $i)
                        <div data-value="{{ $i->name }}" title="{{ $i->name }}" class="swatch-element color"
                            onclick="changeColor(this)">
                            <div class="tooltip d-none">{{ $i->name }}</div>
                            <input id="{{ $i->name }}" data-id="{{ $i->id }}" type="radio"
                                name="selectInputColor" class="d-none" value="{{ $i->name }}">
                            <label class="me-2" for="{{ $i->name }}"
                                style="background-color: {{ $i->name }}"></label>
                        </div>
                    @endforeach
                </div>
            @endif
        @endforeach

        @foreach ($product->variant as $variant)
            @if ($variant->type == 0)
                <div class="header">Dung lượng: <span class="value-ram"></span></div>
                <div class="swatch d-flex mt-2">
                    @foreach ($variant->variantItem as $i)
                        <div id="ram-options">
                            <input id="{{ $i->name }}" type="radio" class="d-none button_ram"
                                name="selectInputRam" data-id="{{ $i->id }}" value="{{ $i->name }}"
                                checked>
                            <label for="{{ $i->name }}" class="me-2 bg__ram">{{ $i->name }}</label>
                        </div>
                    @endforeach
                </div>
            @endif
        @endforeach
    </div>
    <div class="product-summary mt-3">
        <h2 class="rte fs-6">
            {!! $product->short_description !!}
        </h2>
    </div>
    <div class="boz-form mb-3">
        <div class="flex-quantity">
            <form class="formCart" method="post">
                <input class="productId" type="hidden" value="{{ $product->id }}">
                <div class="custom custom-btn-number  ">
                    <span>Số lượng: </span>
                    <span class="quantity-controls">
                        <span class="btn_num num_1 decrease-btn">-</span>
                        <input type="number" id="qtym" class="qtym form-control prd_quantity" name="qtym"
                            value="1" min="1" max="{{ $product->qty }}">
                        <span class="btn_num btn-plus increase-btn">+</span>
                    </span>
                </div>
                {{-- input để nhận giá trị quatity hiện có trong cart --}}
                <input id="getQtyCart" type="hidden" value="{{ $getQtyCart->quantity ?? 0 }}">
                @if ($product->qty > 0)
                    <div class="btn-mua button_actions col-md-12 col">
                        <button type="button" class="btn-buyNow btn col-12 btn-addToCart">
                            <span class="txt-main text-white">Mua ngay</span>
                            <span class="text-white">Giao tận nơi hoặc nhận tại cửa hàng</span>
                        </button>
                    </div>
                @else
                    <div class="btn-mua button_actions col-md-12 col ">
                        <button type="button" class="btn-buyNow btn col-12 ">
                            <span class="txt-main text-white">Sắp về hàng</span>
                            <span class="text-white">( Vui lòng liên hệ trực tiếp )</span>
                        </button>
                    </div>
                @endif
            </form>
        </div>
    </div>

    <script>
        var flash_sale = document.querySelector(".flash-saless");
        var compare_price = document.querySelector(".CouponsPrice_olds");
        var compare_price_new2 = document.querySelector(".CouponsPrice_news2");
        var compare_price_new1 = document.querySelector(".CouponsPrice_news1");
        var CouponsPrice_news3 = document.querySelector(".CouponsPrice_news3");
        if (flash_sale.textContent.trim() == "0") {
            flash_sale.style.display = "none";
            compare_price.style.display = "none";
            compare_price_new1.style.display = "none";
            compare_price_new2.style.display = "none";

        } else {
            compare_price.style.display = "none";
            CouponsPrice_news3.style.display = "none";
            compare_price_new2.style.display = "block";
            compare_price_new1.style.display = "block";
        }
    </script>
</div>
