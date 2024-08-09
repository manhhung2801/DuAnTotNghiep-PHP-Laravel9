@if (!empty($product->long_description))
    <div class="product-content block-content">
        <h1 class="title">Thông tin sản phẩm</h1>
        <div class="product-review-content">
            <div class="ba-text-fpt has-height">
                {!! $product->long_description !!}
            </div>
            <div class="show-more hidden-lg ">
                <div class="btn btn-default btn--view-more duration-300 mt-3">
                    <span class="more-text text-white">Xem thêm <i class="fa-solid fa-caret-down"></i></span>
                    <span class="less-text d-none text-white">Thu gọn <i class="fa-solid fa-gears"></i></span>
                </div>
            </div>
        </div>
    </div>
@endif
