<thead>
    <tr>
        <th>Thông tin sản phẩm</th>
        <th>Đơn giá</th>
        <th class="ps-5">Số lượng</th>
        <th>Thành tiền</th>
        <th></th>
    </tr>
</thead>
<tbody>
    {{-- @dd($getCart) --}}
    @foreach ($getCart as $item)
        <tr class="cart-item">
            <td class="d-flex">
                <img class="object-fit-contain" width="100px" height="100px" src="{{ asset('uploads/products/') . '/' . $item->associatedModel->image }}"
                    alt="{{ $item->associatedModel->image }}">
                <div class="ml-3">
                    <h5 class="ps-2 fw-normal">{{ $item->name }}</h5>
                    {{-- Lấy ra các attrbute và color --}}
                    @if (!$item->attributes->isEmpty())
                        @foreach ($item->attributes as $attr => $value)
                            <p class="ps-2 fw-light m-0 variant__cart text-capitalize">{{ $attr }}: {{ $value }}</p>
                        @endforeach
                    @endif

                    <span data-url="{{ route('cart.destroy', $item->id) }}"
                        class="btn-delete btn_delete_cart ms-2 my-3">Xóa</span>
                </div>
            </td>
            <td class="pt-5 text-danger fw-bold">{{ number_format($item->price, 0, '', '.') }}₫</td>
            <td class="text-center">
                <form method="post" data-url="{{ route('cart.update', $item->id) }}">
                    @csrf @method('PUT')
                    <div class="input-group mb-3" style="width:150px;padding-top:30px">
                        <button class="btn-minus_product btn btn-outline-secondary"><i class="fa-solid fa-minus"></i></button>
                        <input id="qtyProduct" type="number" class="qtyProduct form-control text-center"
                            maxlength="100" value="{{ $item->quantity }}">
                        <button class="btn-plus_product btn btn-outline-secondary"><i class="fa-solid fa-plus"></i></button>

                        @if ($item->associatedModel->qty > 0)
                            <span id="productInStock" data-qty="{{ $item->associatedModel->qty }}">Còn
                                {{ $item->associatedModel->qty }} sản phẩm</span>
                        @else
                            <span class="text-danger text-center fw-bolder" id="productInStock"
                                data-qty="{{ $item->associatedModel->qty }}">Hết hàng</span>
                        @endif

                    </div>
                </form>
            </td>
            <td id="priceItemCart" class="pt-5 text-danger fw-bold">
                {{ number_format($item->price * $item->quantity, 0, '', '.') }}₫</td>
        </tr>
    @endforeach
</tbody>
