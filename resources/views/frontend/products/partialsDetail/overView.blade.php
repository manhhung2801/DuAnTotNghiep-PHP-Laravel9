<div class="wrapper-info py-2 border-bottom">
    <div class="product-name">
        <h3 class="fw-medium">Iphone 15 ProMax</h3>
    </div>
    <div class="product-review-box d-flex align-items-center justify-content-between">
        <div class="d-flex">
            <div class="rating text-warning pe-2">
                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i>
            </div>
        </div>
        <div class="storelocation-all">
            <select class="form-select bg-light">
                <option value="1">Vui lòng chọn</option>
                <option selected>Khu vực miền Bắc</option>
                <option value="2">Khu vực miền Nam</option>
            </select>
        </div>
    </div>

</div>
<div class="prices d-flex align-items-center my-2">
    <div class="price me-3 d-flex text-primary">
        <h4 class="fw-bolder">{{ number_format($product->offer_price, 0, '', ',') }}₫</h4><i class="fa-solid fa-dong-sign"></i>
    </div>
    <div class="lowPrice text-secondary"><del class="fs-5">{{ number_format($product->price, 0, '', ',') }}₫</del> <i class="fa-light fa-dong-sign fa-xs"></i></div>
</div>
<dl class="attributes">
    <dt class="text-prompt">
        <label class="form-label fw-lighter mb-2">Dung lượng</label>
    </dt>
    <dd>
        <ul class="d-flex mb-3">
            <li class="list-group-item py-1 px-3 border border-dark-subtle me-2 rounded-2">
                <a class="nav-link text-secondary" href="#">128GB</a>
            </li>
            <li class="list-group-item py-1 px-3 border border-dark-subtle me-2 rounded-2">
                <a class="nav-link text-secondary" href="#">256GB</a>
            </li>
            <li class="list-group-item py-1 px-3 border border-dark-subtle me-2 rounded-2">
                <a class="nav-link text-secondary" href="#">512GB</a>
            </li>
        </ul>
    </dd>
    <dt class="text-prompt">
        <label class="form-label fw-lighter mb-2">Màu sắc</label>
    </dt>
    <dd>
        <ul class="d-flex mb-3">
            <li class="list-group-item " ng-show="">

                <span class="me-3 rounded-circle d-inline-block" style="width: 30px; height: 30px; background: #4c4b49;">&nbsp;
                </span>
            </li>
            <li class="list-group-item "><span class="me-3 rounded-circle d-inline-block" style="width: 30px; height: 30px; background: #e3e5e3;">&nbsp;</span>
            </li>
            <li class="list-group-item "><span class="me-3 rounded-circle d-inline-block" style="width: 30px; height: 30px; background: #fcebd3;">&nbsp;</span>
            </li>
            <li class="list-group-item "><span class="me-3 rounded-circle d-inline-block" style="width: 30px; height: 30px; background: #61586b;">&nbsp;</span>
            </li>
        </ul>
    </dd>
</dl>

<div class="call-action">
    <div class="btn-buy my-3">
        <button class="btn text-bg-primary w-100 py-3 fw-bold text-uppercase" ng-click="addCart(product)">Mua
            ngay</button>
    </div>
    <div class="btn-all row">
        <div class="col-6">
            <button class="btn btn-outline-primary w-100 py-3 fw-bold text-uppercase">Trả
                góp</button>
        </div>
        <div class="col-6">
            <button class="btn btn-outline-primary w-100 py-3 fw-bold text-uppercase"><i class="fa-solid fa-rotate"></i> Thu cũ đổi mới</button>
        </div>
    </div>
</div>
<div class="service py-2 border border-dark-subtle rounded-2 mt-3">
    <ul>
        <li class="list-group-item"><i class="fa-solid fa-circle-check" style="color: #0066cc;"></i> Bộ sản phẩm gồm: Hộp, Sách hướng
            dẫn, Cây lấy sim, Cáp Lightning - Type C</li>
        <li class="list-group-item"><i class="fa-solid fa-circle-check" style="color: #0066cc;"></i> Bảo hành chính hãng 1 năm <a href="#">(Chi
                tiết)</a></li>
        <li class="list-group-item"><i class="fa-solid fa-circle-check" style="color: #0066cc;"></i> Giao hàng nhanh toàn quốc <a href="#">(Chi
                tiết)</a></li>
        <li class="list-group-item"><i class="fa-solid fa-circle-check" style="color: #0066cc;"></i> Hoàn thuế cho người nước ngoài <a href="#">(Chi
                tiết)</a></li>
        <li class="list-group-item"><i class="fa-solid fa-circle-check" style="color: #0066cc;"></i> Gọi đặt mua <strong class="text-primary">19006626</strong> (7:30 - 22:00)
        </li>
    </ul>
</div>
