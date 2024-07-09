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
    @foreach ($getCart as $item)
    <tr class="cart-item">
        <td class="d-flex">
            <img class="img-thumbnail" src="{{ asset('uploads/products/'). '/'. $item->associatedModel->image }}" alt="{{ $item->associatedModel->image }}">
            <div class="ml-3">
                <h6 class="ps-2 fw-normal">{{ $item->name }}</h6>
                <p class="ps-2 fw-light">{{$item->attributes->color ?? '' }}</p>
                <span data-url="{{ route('cart.destroy', $item->id) }}" class="btn-delete btn_delete_cart ps-2 py-3">Xóa</span>
            </div>
        </td>
        <td class="pt-5 text-danger fw-bold">{{ number_format($item->price,0,'', '.') }}₫</td>
        <td class="text-center">
            <form method="post" data-url="{{ route('cart.update', $item->id) }}">
                @csrf @method('PUT')
                <div class="input-group mb-3" style="width:150px;padding-top:30px">
                    <button class="btn-minus btn btn-outline-secondary"><i class="fa-solid fa-minus"></i></button>
                    <input id="qtyProduct" type="number" class="qtyProduct form-control text-center" maxlength="100" value="{{ $item->quantity }}">
                    <button class="btn-plus btn btn-outline-secondary"><i class="fa-solid fa-plus"></i></button>
                </div>
            </form>
        </td>
        <td id="priceItemCart" class="pt-5 text-danger fw-bold">{{ number_format($item->price * $item->quantity, 0, '', '.') }}₫</td>
    </tr>
    @endforeach
</tbody>