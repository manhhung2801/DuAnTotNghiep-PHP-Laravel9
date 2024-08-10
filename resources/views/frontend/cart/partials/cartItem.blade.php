<div class="container h-100 py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12">
            @foreach ($getCart as $item)
                <div class="card rounded-3 mb-4 shadow-lg bg-body-tertiary border border-1">
                    <div class="card-body p-3">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="col-4 col-md-2 col-lg-2 col-xl-2 text-center p-0 mb-2">
                                <img width="50%"
                                    src="{{ asset('uploads/products/') . '/' . $item->associatedModel->image }}"
                                    class="rounded-3 image_product_cart" alt="{{ $item->associatedModel->image }}">
                            </div>
                            <div class="col-8 col-md-4 col-lg-4 col-xl-4 p-0">
                                <p class="lead fw-normal mb-2 mt-2">{{ $item->name }}</p>

                                {{-- Vartiant --}}
                                @if (!$item->attributes->isEmpty())
                                    <p class="m-0 text-capitalize .text-variant__cart">
                                        @foreach ($item->attributes as $attr => $value)
                                            @if (strtolower($attr) == 'ram')
                                                <span class="text-muted">{{ $attr }}:
                                                </span>{{ $value }}
                                            @else
                                                <span class="text-muted text-capitalize">{{ $attr }}: </span><i
                                                    class="fas fa-circle me-2" style="color: {{ $value }}"></i>
                                                {{ $value }}
                                            @endif
                                        @endforeach

                                    </p>
                                @endif

                                <p><span class="text-muted text-price__cart">Đơn giá:
                                    </span>{{ number_format($item->price, 0, '', '.') }}₫ </p>
                            </div>
                            <div class="col-12 col-md-3 col-lg-3 col-xl-2">
                                <form method="post" data-url="{{ route('cart.update', $item->id) }}">
                                    <div class="d-flex justify-content-center">
                                        @csrf @method('PUT')
                                        <button class="btn-minus_product btn btn-outline-secondary me-2"><i
                                                class="fa-solid fa-minus"></i></button>
                                        <input id="qtyProduct" type="number"
                                            class="qtyProduct form-control text-center w-50" maxlength="100"
                                            value="{{ $item->quantity }}">
                                        <button class="btn-plus_product btn btn-outline-secondary ms-2"><i
                                                class="fa-solid fa-plus"></i></button>
                                    </div>

                                    @if ($item->associatedModel->qty > 0)
                                        <span id="productInStock" data-qty="{{ $item->associatedModel->qty }}">Còn
                                            {{ $item->associatedModel->qty }} sản phẩm</span>
                                    @else
                                        <span class="text-danger text-center fw-bolder" id="productInStock"
                                            data-qty="{{ $item->associatedModel->qty }}">Hết hàng</span>
                                    @endif

                                </form>
                            </div>
                            <div id="priceItem_cart" class="col-8 col-md-2 col-lg-1 col-xl-2 offset-lg-1 px-3">
                                <h5 class="m-0" id="priceItemCart" class="">
                                    {{ number_format($item->price * $item->quantity, 0, '', '.') }}₫</h5>
                            </div>
                            <div class="col-4 col-md-1 col-lg-1 col-xl-1 text-center ">
                                <span data-url="{{ route('cart.destroy', $item->id) }}"
                                    class="btn-delete btn_delete_cart ms-2 my-3"><i
                                        class="fas fa-trash fa-lg"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
