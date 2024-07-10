
<h1 class="title-product fs-4 mt-3">{{ $product->name }}</h1>
<div class="inventory_quantity">
    <span class="mb-break">
        <span class="stock-brand-title">Thương hiệu:</span>
        <span class="a-vendor">
            {{ $product->subCategory->name }}
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
        <span class="price product-price fs-4 text-danger">{{ number_format($product->offer_price, 0, '', ',') }}</span>
    </span>
    <!-- Giá Khuyến mại -->
    <span class="old-price">
        <del class="price product-price-old mx-1">{{ number_format($product->price, 0, '', ',') }}</del>
    </span>
    
    <!-- Giá gốca -->
</div>

<div class="form-product ">
    <div class="select-swatch ">
        @if (!empty($product->variant))
            @foreach ($product->variant as $variant)
                <div class="header">Màu sắc: <span class="value-properties">{{$variant->name}}</span>
                </div>
                <div class="swatch d-flex mt-2">
                    @foreach ($variant->variantItem as $i)
                        <div data-value="{{ $i->name }}" title="{{ $i->name }}" class="swatch-element color"
                            onclick="changeColor(this)">
                            <div class="tooltip d-none">{{ $i->name }}</div>
                            <input id="{{ $i->name }}" data-id="{{$i->id}}" id="selectInputColor" type="radio" name="selectInputColor" class="d-none"
                                value="{{ $i->name }}">
                            <label class=" me-2" for="{{ $i->name }}" style="background-color: {{ $i->name }}"></label>
                        </div>
                    @endforeach
                </div>
            @endforeach
        @endif
    </div>
    <div class="product-summary mt-3">
        <div class="rte ">
            {!! $product->short_description !!}
        </div>
    </div>
    <div class="boz-form mb-3">
        <div class="flex-quantity">

            <form class="formCart" method="post">
                <input class="productId" type="hidden" value="{{ $product->id }}">
                <div class="custom custom-btn-number  ">
                    <span>Số lượng: </span>
                    <span class="quantity-controls">
                        <span class="btn_num num_1 decrease-btn">-</span>
                        <input type="number" id="qtym" class="qtym form-control prd_quantity" name="qtym" value="1" min="1" max="{{ $product->qty }}">
                        <span class="btn_num btn-plus increase-btn">+</span>
                    </span>                    
                </div>
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
