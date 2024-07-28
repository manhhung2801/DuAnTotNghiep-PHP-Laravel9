<div class="products-view products-view-grid list_hover_pro mt-4">
    <div class="row d-flex flex-lg-wrap">
        @if ($products->count() > 0)
            @foreach ($products as $pro)
                <div class="col-6 col-md-3">
                    <div class="item_product_main">
                        <div class="variants product-action item-product-main duration-300">
                            {{-- {{ Helper::sale($pro->offer_start_date, $pro->offer_end_date, $pro->price, $pro->offer_price) }} --}}
                            <div class="product-thumbnail">
                                <a class="image_thumb scale_hover"
                                    href="/san-pham/{{ $pro->category->slug }}/{{ $pro->subcategory->slug }}/{{ $pro->childcategory->slug }}/{{ $pro->slug }}.html"
                                    title="{{ $pro->name }}">
                                    <img class="lazyload duration-300 loaded"
                                        src="{{ asset('uploads/products/' . $pro->image) }}">
                                </a>
                            </div>
                            <div class="product-info mt-2">
                                <h3 class="product-name line-clamp line-clamp-2 ">
                                    <a href="/san-pham/{{ $pro->category->slug }}/{{ $pro->subcategory->slug }}/{{ $pro->childcategory->slug }}/{{ $pro->slug }}.html"
                                        title="" class="text-decoration-none ">{{ $pro->name }}</a>
                                </h3>
                                <div class="product-price-cart d-flex">
                                    {{-- {{ Helper::CouponsPrice($pro->offer_start_date, $pro->offer_end_date, $pro->price, $pro->offer_price) }} --}}
                                </div>
                            </div>
                            <div class="promotion-content">
                                <div class="line-clamp-2-new" title="{!! $pro->promotion !!}">
                                    <p> {!! $pro->promotion !!}</p>
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
