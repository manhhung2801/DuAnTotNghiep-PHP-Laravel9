<!-- Modal -->
<div class="modal fade" id="orderDetail" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="orderDetail">Đơn hàng chi tiết #123</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <table id="example" class="table table-bordered table-responsive" style="width:100%">
                    <thead>
                        <tr>
                            <th>Sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                        </tr>
                    </thead>
                    <tbody id="tbody_model_order">

                        {{-- <tr>
                            <td class="d-flex align-items-center">
                                <div class="image_order__detail me-2">
                                    <img id="image_od" src="{{ asset('uploads/products/ipad_12.png') }}" width="60px"
                                        alt="abc">
                                </div>
                                <div class="product_info_order__detail">
                                    <div class="product_name_od">
                                        <h6 id="product_name_od" class="fw-semibold">Iphone 15 Pro Max 123GB</h6>
                                    </div>
                                    <div class="product_variant_od">
                                        <p style="font-size: 12px" id="color_od">Màu sắc: Đỏ</p>
                                    </div>
                                </div>
                            </td>
                            <td><strong id="quantity_od">x1</strong></td>
                            <td><strong id="price_od">38.900.000 VNĐ</strong></td>
                        </tr> --}}
                    </tbody>
                </table>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
