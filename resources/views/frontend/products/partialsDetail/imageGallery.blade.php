<div class="picture p-3 rounded-1" style="background: #ebebefb3">
    <img src="{{ asset('/images/product/' . $product->image) }}" class="w-100 d-block m-0" alt="ảnh iphone">
</div>
<div class="picture-slideshow mt-3">
    <ul class="p-0 d-flex">

        @foreach($product_image_galleries as $item)
            <li class="w-25 list-group-item p-3 border border-dark-subtle rounded-2 me-1">
                <img src="{{ asset('public/images/product/' . $item->image) }}" class="w-100 d-block" alt="thums">
            </li>
        @endforeach
        {{-- <li class="w-25 list-group-item p-3 border border-dark-subtle rounded-2 me-1">
            <img src="public/images/product/iphone_01.png" class="w-100 d-block" alt="thums">
        </li>
        <li class="w-25 list-group-item p-3 border border-dark-subtle rounded-2 me-1">
            <img src="public/images/product/iphone_01.png" class="w-100 d-block" alt="thums">
        </li>
        <li class="w-25 list-group-item p-3 border border-dark-subtle rounded-2 me-1">
            <img src="public/images/product/iphone_01.png" class="w-100 d-block" alt="thums">
        </li> --}}
    </ul>
</div>
