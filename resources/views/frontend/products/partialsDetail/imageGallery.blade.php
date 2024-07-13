<div class="product-image">
    <div class="big-img">
        {{-- @dd($product) --}}
        <img src="{{ asset('uploads/products/' . $product->image) }}">
    </div>
    <div class="images d-flex">
        @foreach($product_image_galleries as $item)
        <div class="small-img mx-2">
            <img src="{{ asset('uploads/gallery/' . $item->image) }}" class="img-thumbnail" onclick="showImg(this.src)">
        </div>
        @endforeach

    </div>
</div>
