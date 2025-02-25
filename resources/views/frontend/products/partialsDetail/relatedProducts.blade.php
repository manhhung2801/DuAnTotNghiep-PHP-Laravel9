<div class="scroll_animation section_title  mb-3  show">
    <h4 class="text-uppercase">Sản phẩm liên quan
    </h4>
</div>
<div class="scroll_animation row show " style="overflow-y: auto;">
    @foreach ($relatedProducts as $pro)
        <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-6">
            <div class="item_product_main">
                <div class="variants product-action item-product-main duration-300">
                    <span class="flash-sale">Giảm
                        <span
                            class="flash-sales text-white">{{ Helper::discount($pro->offer_start_date, $pro->offer_end_date, $pro->price, $pro->offer_price) }}</span>%
                    </span>


                    <div class="product-thumbnail">
                        <a class="image_thumb scale_hover"
                            href="/san-pham/{{ $pro->category->slug }}/{{ $pro->subcategory->slug }}/{{ $pro->childcategory->slug }}/{{ $pro->slug }}.html"
                            title="iPhone 13 Pro Max 1TB - Chính Hãng VN/A">
                            <img class="lazyload duration-300 loaded"
                                src="{{ asset('uploads/products/' . $pro->image) }}">
                        </a>
                    </div>
                    <div class="product-info mt-1">
                        <h3 class="product-name line-clamp line-clamp-2 ">
                            <a href="/san-pham/{{ $pro->category->slug }}/{{ $pro->subcategory->slug }}/{{ $pro->childcategory->slug }}/{{ $pro->slug }}.html"
                                title="" class="text-decoration-none ">{{ $pro->name }}</a>
                        </h3>
                        <div class="product-price-cart d-flex">
                            <div class="price-box">
                                @php
                                    $prices = Helper::CouponsPrice(
                                        $pro->offer_start_date,
                                        $pro->offer_end_date,
                                        $pro->price,
                                        $pro->offer_price,
                                    );
                                @endphp
                                <div class="price-box">
                                    <span class="price CouponsPrice_new2 ">{{ $prices['price_new'] }} <i
                                        class='fa-solid fa-dong-sign'></i> </span>
                                    <div class="d-flex align-items-center" style="gap: 4px">
                                        <span class=" price CouponsPrice_new1"> {{ $prices['price_old'] }} <i
                                                class="fa-regular fa-dong-sign "></i></span>
                                        <span class="compare-price  CouponsPrice_old">{{ $prices['price_new'] }} <i
                                                class='fa-solid fa-dong-sign'></i> </span>
                                    </div>       
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="promotion-content">
                        <div class="line-clamp-2-new" title="{{ $pro->promotion }}">
                            <p>{{ $pro->promotion }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
