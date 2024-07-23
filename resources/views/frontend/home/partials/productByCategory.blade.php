<div class="catalog-product-list container">
    @foreach ($getProducts as $getProduct)
        @foreach ($getProduct as $category_name => $product)
            <div class="scroll_animation section_title text-center mb-3 pt-5">
                <h4 class="text-uppercase">{{ $category_name }}</h>
            </div>
            <div class="scroll_animation row">
                @foreach ($product as $pro)
                    <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-6">
                        <div class="item_product_main">
                            <div class="variants product-action item-product-main duration-300">
                            {{Helper::sale($pro->offer_start_date,$pro->offer_end_date,$pro->price, $pro->offer_price)}}

                                <div class="product-thumbnail">
                                    <a class="image_thumb scale_hover"
                                        href="/san-pham/{{ $pro->category->slug }}/{{ $pro->subcategory->slug }}/{{ $pro->childcategory->slug }}/{{ $pro->slug }}.html"
                                        title="iPhone 13 Pro Max 1TB - Chính Hãng VN/A">
                                        <img class="lazyload duration-300 loaded"
                                            src="{{ asset('uploads/products/' . $pro->image) }}" alt="{{ $pro->image }}">
                                    </a>
                                </div>
                                <div class="product-info mt-2">
                                    <h3 class="product-name line-clamp line-clamp-2 ">
                                        <a href="/san-pham/{{ $pro->category->slug }}/{{ $pro->subcategory->slug }}/{{ $pro->childcategory->slug }}/{{ $pro->slug }}.html"
                                            title="" class="text-decoration-none ">{{ $pro->name }}</a>
                                    </h3>
                                    <div class="product-price-cart">
                                        <div class="price-box">
                                        {{Helper::CouponsPrice($pro->offer_start_date,$pro->offer_end_date,$pro->price, $pro->offer_price)}}

                                        </div>
                                        {{-- <form class="formCart" method="post">
                                            <input class="productId" type="hidden" value="{{ $pro->id }}">
                                            <div class="product-button ">
                                                <button class="btn-addToCart btn-cart btn-views rounded border-0 px-2"
                                                    title="Mua ngay" type="button">
                                                    <i class="fa-sharp fa-regular fa-cart-shopping"></i>
                                                </button>
                                            </div>
                                        </form> --}}
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
            <div class="scroll_animation show-all text-center mt-2">
                <a class="px-5 py-2 btn btn-outline-dark " href="/san-pham/{{ $pro->category->slug }}">Xem tất cả
                    <i class="fa-regular fa-chevron-right"></i></a>
            </div>
        @endforeach
    @endforeach
</div>
