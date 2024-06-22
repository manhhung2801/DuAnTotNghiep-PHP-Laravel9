<div class="catalog-product-list container">
    @foreach ($getProducts as $getProduct)
        @foreach ($getProduct as $category_name => $product)
        <div class="scroll_animation section_title text-center mb-3 pt-5">
            <h4 class="text-uppercase">{{$category_name}}</h>
        </div>
        <div class="scroll_animation row">
            @foreach ($product as $pro)
            <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-6">
                <div class="item_product_main">
                    <form action="#" method="post" class="variants product-action item-product-main duration-300" data-cart-form="" data-id="product-actions-30510614" enctype="multipart/form-data">
                        <span class="flash-sale">Giảm
                            {{ number_format((($pro->price - $pro->offer_price)/ $pro->price) * 100) }}%
                        </span>
                        <div class="product-thumbnail">
                            <a class="image_thumb scale_hover" href="#" title="iPhone 13 Pro Max 1TB - Chính Hãng VN/A">
                                <img class="lazyload duration-300 loaded" src="{{ asset('uploads/products/'.$pro->image) }}">
                            </a>
                        </div>
                        <div class="product-info mt-3">
                            <h3 class="product-name line-clamp line-clamp-2 ">
                                <a href="#" title="" class="text-decoration-none ">{{ $pro->name }}</a>
                            </h3>
                            <div class="product-price-cart">
                                <div class="price-box">
                                    <span class="compare-price">{{ number_format($pro->price) }} ₫</span>
                                    <span class="price">{{ number_format($pro->offer_price) }} ₫</span>
                                </div>
                                <div class="product-button ">
                                    <button class="btn-cart btn-views rounded border-0 px-2" title="Tùy chọn" type="submit">
                                        <i class="fa-sharp fa-regular fa-cart-shopping"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="promotion-content">
                            <div class="line-clamp-2-new" title="Thu cũ đổi mới: Thu giá cao trợ giá đến 90%">
                                <p>Thu cũ đổi mới: Thu giá cao trợ giá đến 90%</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
        <div class="scroll_animation show-all text-center mt-2">
            <a class="px-5 py-2 btn btn-outline-dark " href="{{ $pro->category_id }}">Xem tất cả <i class="fa-regular fa-chevron-right"></i></a>
        </div>
        @endforeach
    @endforeach
</div>