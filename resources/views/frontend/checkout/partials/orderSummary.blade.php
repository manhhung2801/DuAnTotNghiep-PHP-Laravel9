<div class="sidebar__header">
    <h2 class="sidebar__title fs-4">
        Đơn hàng ({{ $getTotalQuantity }} sản phẩm)
    </h2>
</div>
<div class="sidebar__content">
    <div id="order-summary" class="order-summary ">
        <div class="order-summary__sections">
            <div class="order-summary__section">
                <table class="product-table w-100" id="product-table">
                    <caption class="visually-hidden">Chi tiết đơn hàng</caption>
                    <thead class="product-table__header">
                        <tr>
                            <th>
                                <span class="visually-hidden">Ảnh sản phẩm</span>
                            </th>
                            <th>
                                <span class="visually-hidden">Mô tả</span>
                            </th>
                            <th>
                                <span class="visually-hidden">Sổ lượng</span>
                            </th>
                            <th>
                                <span class="visually-hidden">Đơn giá</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($getCart as $cart)
                            <tr class="product ">
                                <td class="product__image pb-2">
                                    <div class="product-thumbnail ">
                                        <div class="product-thumbnail__wrapper" data-tg-static="">
                                            <img src="{{ asset('uploads/products/' . $cart->associatedModel->image) }}"
                                                alt="{{ $cart->associatedModel->image }}"
                                                class="product-thumbnail__image border rounded-1 img-thumbnail object-fit-contain">
                                        </div>
                                        <span class="product-thumbnail__quantity">{{ $cart->quantity }}</span>
                                    </div>
                                </td>
                                <th class="product__description ">
                                    <p class="product__description__name tenchung mb-0">{{ $cart->name }}
                                    </p>
                                    @if (!$cart->attributes->isEmpty())
                                        @foreach ($cart->attributes as $key => $value)
                                            <span
                                                class="product__description__property variant__cart text-capitalize m-0"><strong>{{ $key }}:</strong>
                                                {{ $value }}</span>
                                        @endforeach
                                    @endif
                                </th>
                                <td class="product__quantity visually-hidden"><em>Số lượng:</em>{{ $cart->quantity }}
                                </td>
                                <td class="product__price">{{ number_format($cart->price, 0, '', '.') }} VNĐ</td>
                            </tr>
                        @empty
                        @endforelse
                        
                    </tbody>
                </table>
            </div>
            <hr>
            <div class="order-summary__section">
                <div class="edit_checkout animate-floating-labels d-flex">
                    <div class="form-group col-md-9 w-75">
                        <input id="coupon_code_input" type="text" class="field__input"
                            placeholder="Nhập mã khuyến mãi">
                        <input id="coupon_code_value" type="hidden" name="coupon_value" value="0">
                    </div>
                    <button id="apply_coupon_code" class="btn btn-primary ms-2" type="button">
                        Áp dụng
                    </button>
                </div>
                <div id="tag_coupon" class="mt-2">
                   
                </div>
                <span id="message_coupon" class="text-danger"></span>
            </div>
            <hr>
            <div class="order-summary__section ">
                <table class=" w-100">
                    <tbody class="total-line">
                        <tr>
                            <th style="font-weight: normal;">Tạm tính</th>
                            <td class="total-line__price">{{ $getSubTotal }} VNĐ</td>
                        </tr>
                        <tr class="total_coupon">
                            <th style="font-weight: normal;">Giảm giá: </th>
                            <td class="total-line__coupon">0 VNĐ</td>
                        </tr>
                        <tr>
                            <th style="font-weight: normal;">Phí vận chuyển</th>
                            <td id="total_line_shipping" class="total-line__price">----</td>
                            <input id="shipping_value" type="hidden" value="0" name="shipping_money">
                        </tr>
                    </tbody>
                   
                    <tfoot class="total-line">
                        <tr>
                            <th>Tổng cộng</th>
                            <td class="total-line__price" id="total_price_summary">
                                {{ number_format($getTotal, 0, ',', '.') }} VNĐ</td>
                            <input type="hidden" id="total_price_hidden" name="total_price_hidden"
                                value="{{ $getTotal }}">
                        </tr>
                    </tfoot>
                </table>
            </div>
            <hr>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-md-6 order-summary__nav field__input-btn-wrapper order-2 order-md-1 ">
        <a href="/cart" class="text-decoration-none w-100 text-black"><i class="fas fa-chevron-left"></i> Trở về giỏ
            hàng</a>
    </div>
    <div class="col-12 col-md-6 order-1 order-md-2 mb-2">
        <button type="submit" class="btn btn-dark w-100 rounded-1 p-2 border">Tiến hành đặt hàng</button>
    </div>
</div>
