<div class="row mb-3">
    <div class="col-1 mt-1 ">
        <label for="" class="bg-primary p-1 border rounded-1"><span class="text-white">Bộ
                lọc</span> </label>
    </div>
    <div class="col">
        <select class="form-select" name="sort_price">
            <option value>Tổng tiền</option>
            <option {{ Request::get('sort_price') == 'asc' ? 'selected' : '' }} value="asc">Tăng dần
            </option>
            <option {{ Request::get('sort_price') == 'desc' ? 'selected' : '' }} value="desc">Giảm dần
            </option>
        </select>
    </div>
    <div class="col">
        <select class="form-select" name="order_status">
            <option value>Trạng thái đơn hàng</option>
            <option {{ Request::get('order_status') == '0' ? 'selected' : '' }} value="0">Chờ Xác
                nhận</option>
            <option {{ Request::get('order_status') == '91' ? 'selected' : '' }} value="91">Đã tiếp
                nhận</option>
            <option {{ Request::get('order_status') == '92' ? 'selected' : '' }} value="92">Đã hoàn
                thành</option>
            <option {{ Request::get('order_status') == '-1' ? 'selected' : '' }} value="-1">Đã hủy
            </option>
        </select>
    </div>
    <div class="col">
        <select class="form-select" name="sort_payment">
            <option value>Thanh toán</option>
            <option {{ Request::get('sort_payment') == 0 ? 'selected' : '' }} value="0">Chưa thanh
                toán</option>
            <option {{ Request::get('sort_payment') == 1 ? 'selected' : '' }} value="1">Đã thanh
                toán</option>
        </select>
    </div>
    <div class="col">
        <select class="form-select" name="sort_date">
            <option value>Ngày tạo</option>
            <option {{ Request::get('sort_date') == 'desc' ? 'selected' : '' }} value="desc">Mới nhất
            </option>
            <option {{ Request::get('sort_date') == 'asc' ? 'selected' : '' }} value="asc">Cũ nhất
            </option>
        </select>
    </div>
    <div class="col-1">
        <button class="btn btn-primary">Lọc</button>
    </div>
</div>
