<div class="product-image">
    <div class="big-img">
        {{-- @dd($product) --}}
        <img src="{{ asset('uploads/products/' . $product->image) }}">
    </div>
    <div class="images d-flex mt-3">
        <div class="small-img overflow-auto text-nowrap">
            <img src="{{ asset('uploads/products/' . $product->image) }}" class="img-thumbnail img-fluid"
                onclick="showImg(this.src)" width="58" height="58">
            @foreach ($ProductImageGalleries as $item)
                <img src="{{ asset('uploads/gallery/' . $item->image) }}" class="img-thumbnail img-fluid"
                    onclick="showImg(this.src)" width="58" height="58">
            @endforeach
        </div>
    </div>
</div>
