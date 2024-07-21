<div class="products-view products-view-grid list_hover_pro mt-4">
    <div class="row d-flex flex-lg-wrap">
        @if ($products->count() > 0)

            @foreach ($products as $pro)
                <div class="col-6 col-md-3">
                    <div class="item_product_main">
                        <div class="variants product-action item-product-main duration-300" data-cart-form=""
                            data-id="product-actions-30510614" enctype="multipart/form-data">
                            <span class="flash-sale">
                                Giảm {{ $pro->percent }}%
                            </span>
                            <div class="product-thumbnail">
                                <a class="image_thumb scale_hover"
                                    href="/san-pham/{{ $pro->category->slug }}/{{ $pro->subcategory->slug }}/{{ $pro->childcategory->slug }}/{{ $pro->slug }}.html"
                                    title="{{ $pro->name }}">
                                    <img class="lazyload duration-300 loaded"
                                        src="{{ asset('uploads/products/' . $pro->image) }}">
                                </a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-name line-clamp line-clamp-2 ">
                                    <a href="#" title=""
                                        class="text-decoration-none ">{{ $pro->name }}</a>
                                </h3>
                                <div class="product-price-cart">
                                    <div class="price-box">
                                        <span class="compare-price">{{ number_format($pro->price, 0, '', ',') }}₫</span>

                                        <span class="price">{{ number_format($pro->offer_price, 0, '', ',') }}₫</span>
                                    </div>
                                    <form class="formCart" method="post">
                                        <div class="product-button ">
                                            <input class="hidden" type="hidden" name="variantId" value="86286440">
                                            <input type="hidden" class="productId" value="{{ $pro->id }}">
                                            <button class="btn-addToCart btn-cart btn-views rounded border-0 px-2"
                                                title="Mua ngay" type="button">
                                                <i class="fa-sharp fa-regular fa-cart-shopping"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="promotion-content">
                                <div class="line-clamp-2-new" title="Thu cũ đổi mới: Thu giá cao trợ giá đến 90% ">
                                    <p>Thu cũ đổi mới: Thu giá cao trợ giá đến 90%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
                <h5 class="col-12 text-center py-4 fw-bold">Sản phẩm đang cập nhật. Vui lòng quay lại sau</h1>
        @endif



    </div>
</div>
