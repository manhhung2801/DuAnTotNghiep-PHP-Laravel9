<div class="product-image">
    <div class="big-img">
        <img src="{{ asset('uploads/products/' . $product->image) }}">
    </div>
    <div class="images d-flex mt-3">
        @foreach ($product_image_galleries as $item)
            <div class="small-img ">
                <img src="{{ asset('uploads/gallery/' . $item->image) }}" class="img-thumbnail img-fluid"
                    onclick="showImg(this.src)" width="58" height="58">
            </div>
        @endforeach
    </div>
</div>

