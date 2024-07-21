<div class="scroll_animation section_title  mb-3  show">
    <h4 class="text-uppercase">Sản phẩm liên quan
    </h4>
</div>
<div class="scroll_animation row show " style="overflow-y: auto;">
    @foreach ($relatedProducts as $item)
        <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-6">
            <div class="item_product_main">
                <div class="variants product-action item-product-main duration-300">
                    <span class="flash-sale">Giảm
                        {{ number_format((($item->price - $item->offer_price) / $item->price) * 100, 0) }}%
                    </span>
                    <div class="product-thumbnail">
                        <a class="image_thumb scale_hover"
                            href="/san-pham/{{ $item->category->slug }}/{{ $item->subcategory->slug }}/{{ $item->childcategory->slug }}/{{ $item->slug }}.html"
                            title="iPhone 13 Pro Max 1TB - Chính Hãng VN/A">
                            <img class="lazyload duration-300 loaded"
                                src="{{ asset('uploads/products/' . $item->image) }}">
                        </a>
                    </div>
                    <div class="product-info mt-1">
                        <h3 class="product-name line-clamp line-clamp-2 ">
                            <a href="/san-pham/{{ $item->category->slug }}/{{ $item->subcategory->slug }}/{{ $item->childcategory->slug }}/{{ $item->slug }}.html"
                                title="" class="text-decoration-none ">{{ $item->name }}</a>
                        </h3>
                        <div class="product-price-cart d-flex">
                            <div class="price-box">
                                <span class="price ">{{ number_format($item->offer_price, 0, '.', '.') }}<i
                                        class="fa-solid fa-dong-sign"></i></span>
                            </div>
                            <div class="price-box mx-1">
                                <span class="compare-price ">{{ number_format($item->price, 0, '.', '.') }}<i
                                        class="fa-regular fa-dong-sign"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="promotion-content">
                        <div class="line-clamp-2-new" title="Thu cũ đổi mới: Thu giá cao trợ giá đến 90%">
                            <p>Thu cũ đổi mới: Thu giá cao trợ giá đến 90%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
