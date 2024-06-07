<div class="category-list_hot">
    <div class="categoty-item pt-4">
        <h2 class="mb-2 fw-bold"><a class="list-group-item" href="#">Gợi ý phụ kiện
                đi kèm </a></h2>
        <!-- Start slider -->
        <div class="wrapper-slider">

            <div class="direction">
                <button id="prev">
                    < </button>
                        <button id="next">
                            >
                        </button>
            </div>
            <div id="formList">
                <div id="list">


                    @foreach ($products as $pro)
                        <div class="item item_product_main">
                            <form action="#" method="post"
                                class="variants product-action item-product-main duration-300" data-cart-form=""
                                data-id="product-actions-30510614" enctype="multipart/form-data">
                                <span class="flash-sale">Giảm {{ $pro->percent }}%
                                </span>
                                <div class="product-thumbnail">
                                    <a class="image_thumb scale_hover" href="/product/{{ $pro->slug }}.html"
                                        title="{{ $pro->name }}">
                                        <img class="lazyload duration-300 loaded"
                                            src="//bizweb.dktcdn.net/thumb/large/100/480/632/products/13-pm-la-221119025651-2211191456.jpg?v=1681769956803">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name line-clamp line-clamp-2 ">
                                        <a href="#" title=""
                                            class="text-decoration-none ">{{ $pro->name }}</a>
                                    </h3>
                                    <div class="product-price-cart">
                                        <div class="price-box">
                                            <span
                                                class="compare-price">{{ number_format($pro->price, 0, '', ',') }}₫</span>

                                            <span
                                                class="price">{{ number_format($pro->offer_price, 0, '', ',') }}₫</span>
                                        </div>
                                        <div class="product-button ">
                                            <input class="hidden" type="hidden" name="variantId" value="86286440">
                                            <button class="btn-cart btn-views rounded border-0 px-2" title="Tùy chọn"
                                                type="button">
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
                    @endforeach







                </div>
            </div>
        </div>
        <!-- End slider -->
    </div>
</div>
