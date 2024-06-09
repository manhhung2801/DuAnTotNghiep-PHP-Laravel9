<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sudes Phone Checkout</title>
    <link rel="stylesheet" href="Font-Awesome-640/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>.radio-wrapper {
        display: table;
        box-sizing: border-box;
        width: 100%;
    }
    
    .radio__input,
    .checkbox__input {
        white-space: nowrap;
        padding-right: .75em;
    }
    
    .radio__label,
    .checkbox__label {
        cursor: pointer;
        vertical-align: middle;
        display: table-cell;
        width: 100%;
    }
    
    .radio__label__primary {
        cursor: inherit;
        font-family: inherit;
        vertical-align: top;
        display: table-cell;
        width: 100%;
    }
    
    .radio__label__accessory {
        text-align: right;
        padding-left: .75em;
        white-space: nowrap;
        display: table-cell;
        vertical-align: middle;
    }
    
    .product-thumbnail {
        width: 50px;
        height: 50px;
        border-radius: 8px;
        background: #fff;
        position: relative;
    }
    
    .product-thumbnail__wrapper {
        width: 100%;
        height: 100%;
        position: relative;
        overflow: hidden;
        border-radius: 8px;
    }
    
    .product-thumbnail__image {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        max-width: 100%;
        max-height: 100%;
        margin: auto;
    }
    
    .product-thumbnail__quantity {
        font-size: .78em;
        white-space: nowrap;
        padding: 0 .62em;
        border-radius: 2em;
        background-color: #2a9dcc;
        color: #fff;
        position: absolute;
        right: -.9em;
        top: -.55em;
        z-index: 3;
        box-sizing: border-box;
        min-width: 1.75em;
        height: 1.75em;
        text-align: center;
        line-height: 1.75em;
    }
    
    .product-table tbody th {
        padding-left: 1em;
        font-weight: 500;
        color: #333;
        padding-top: 0;
        padding-bottom: 0;
    }
    
    .field__input {
        border-radius: 4px;
        width: 100%;
        display: block;
        box-sizing: border-box;
        padding: .94em .8em;
        border: 1px #d9d9d9 solid;
        height: 40px;
        background-color: #fff;
        color: #333;
    }
    
    .total-line__price {
        padding-left: 1.5em;
        text-align: right;
        white-space: nowrap;
    }
    
    .field__input-btn-wrapper {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .tenchung {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        width: 100%;
    }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row ">
            <div class="col-md-4 order-1 order-md-1 mb-3">
                <section>
                    <h4><i class="fas fa-user-alt d-md-none"></i>Thông tin nhận hàng</h4>
                    <form>
                        <div class="form-group my-3">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group my-3">
                            <input type="text" class="form-control" placeholder="Họ và tên">
                        </div>
                        <div class="input-group my-3">
                            <input type="text" class="form-control" placeholder="Số điện thoại (tùy chọn)">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="https://img.icons8.com/?size=100&id=60257&format=png&color=000000" alt="" style="width: 30px;"></button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#">Zambia (+260)</a></li>
                                <li><a class="dropdown-item" href="#">Yemen (+967)</a></li>
                                <li><a class="dropdown-item" href="#">Taiwan (+886)</a></li>
                            </ul>
                        </div>
                        <div class="form-group my-3">
                            <input type="text" class="form-control" placeholder="Địa chỉ (tùy chọn)">
                        </div>
                        <div class="form-group my-3">
                            <select class="form-control">
                            <option>Tỉnh thành</option>
                        </select>
                        </div>
                        <div class="form-group my-3">
                            <select class="form-control">
                            <option>---</option>
                        </select>
                        </div>
                        <div class="form-group my-3">
                            <select class="form-control">
                            <option>---</option>
                        </select>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="3" placeholder="Ghi chú (tùy chọn)"></textarea>
                        </div>
                    </form>
                </section>
            </div>
            <div class="col-md-4 order-2 order-md-2 mb-3">
                <section class="mt-0">
                    <h4><i class="fas fa-shuttle-van d-md-none"></i>Vận chuyển</h4>
                    <div class="content-box__row rounded-1 border p-2">
                        <div class="radio-wrapper">
                            <div class="radio__input">
                                <input type="radio" class="input-radio" checked>
                            </div>
                            <label for="shippingMethod-751031_0" class="radio__label">
                                <span class="radio__label__primary">
                                    <span >Giao hàng tận nơi</span>    
                                </span>
                                <span class="radio__label__accessory">                                            
                                    <span class="content-box__emphasis price">
                                        40.000₫
                                    </span> 
                                </span>
                            </label>
                        </div>
                    </div>
                </section>
                <section class="mt-3">
                    <h4><i class="fab fa-cc-visa d-md-none"></i>Thanh toán</h4>
                    <div class="form-group rounded-1 border p-1  align-content-center">
                        <div class="custom-control custom-radio mt-2 ms-2">
                            <div class="radio-wrapper ">
                                <div class="mt-0">
                                    <div class="radio__input">
                                            <input type="radio" class="input-radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    </div>
                                </div>
                                <label for="flexRadioDefault1" class="radio__label">
                                    <span class="radio__label__primary">
                                        <span >Thanh toán khi giao hàng (COD)</span>    
                                    </span>
                                    <span class="radio__label__accessory">                                            
                                        <span class="content-box__emphasis price ">
                                            <i class="fas fa-money-bill-wave fs-4 mx-3" style="color: #74C0FC;"></i>
                                        </span> 
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group rounded-1 border p-1 mt-2">
                        <div class="radio-wrapper  ">
                            <div class="custom-control custom-radio mt-2 ms-2 d-flex" data-bs-toggle="collapse" href="#collapseExample">
                                <div class="radio__input">
                                        <input type="radio" class="input-radio" name="flexRadioDefault" id="flexRadioDefault2" >
                                </div>
                                <label for="flexRadioDefault2" class="radio__label">
                                <span class="radio__label__primary">
                                    <span >Thanh toán qua ngân hàng</span>    
                                </span>
                                <span class="radio__label__accessory">                                            
                                    <span class="content-box__emphasis price ">
                                        <i class="fas fa-money-bill-alt fs-4 mx-3" style="color: #74C0FC;"></i>
                                    </span> 
                                </span>
                            </label>
                            </div>
                            <div class="collapse mt-2" id="collapseExample">
                                <div class="card card-body">
                                    <div class="d-flex">
                                        <div class="col-3">
                                            <button class="border-0">
                                            <img class="border" src="https://bizweb.dktcdn.net/100/480/632/themes/900313/assets/payment_1.svg?1712897547805" alt="">
                                          </button>
                                        </div>
                                        <div class="col-3">
                                            <button class="border-0">
                                            <img class="border" src="https://bizweb.dktcdn.net/100/480/632/themes/900313/assets/payment_1.svg?1712897547805" alt="">
                                          </button>
                                        </div>
                                        <div class="col-3">
                                            <button class="border-0">
                                            <img class="border" src="https://bizweb.dktcdn.net/100/480/632/themes/900313/assets/payment_1.svg?1712897547805" alt="">
                                          </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-4  order-3 order-md-3 mb-3">
                <div class="ws">
                    <div class="sidebar__header">
                        <h2 class="sidebar__title fs-4">
                            Đơn hàng (2 sản phẩm)
                        </h2>
                    </div>
                    <div class="sidebar__content">
                        <div id="order-summary" class="order-summary ">
                            <div class="order-summary__sections">
                                <div class="order-summary__section">
                                    <table class="product-table" id="product-table">
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
                                            <tr class="product ">
                                                <td class="product__image pb-2">
                                                    <div class="product-thumbnail ">
                                                        <div class="product-thumbnail__wrapper" data-tg-static="">
                                                            <img src="//bizweb.dktcdn.net/thumb/thumb/100/480/632/products/220908114903-iphone-14-pro-max-1-1-2bf608ee-efbc-4923-b0a0-d80712cecc68.jpg?v=1681686257597" alt="" class="product-thumbnail__image border rounded-1">
                                                        </div>
                                                        <span class="product-thumbnail__quantity">1</span>
                                                    </div>
                                                </td>
                                                <th class="product__description ">
                                                    <span class="product__description__name tenchung">
                                                            iPhone 14 Pro Max 512GB - Chính hãng VN

                                                    <span class="product__description__property">
                                                            Vàng
                                                        </span>
                                                </th>
                                                <td class="product__quantity visually-hidden"><em>Số lượng:</em> 1</td>
                                                <td class="product__price">
                                                    35.790.000₫
                                                </td>
                                            </tr>
                                            <tr class="product">
                                                <td class="product__image pb-2">
                                                    <div class="product-thumbnail">
                                                        <div class="product-thumbnail__wrapper" data-tg-static="">
                                                            <img src="//bizweb.dktcdn.net/thumb/thumb/100/480/632/products/221020105441-1-minhtuanmobile-ip.jpg?v=1681771577447" alt="" class="product-thumbnail__image border rounded-1">
                                                        </div>
                                                        <span class="product-thumbnail__quantity">1</span>
                                                    </div>
                                                </td>
                                                <th class="product__description">
                                                    <span class="product__description__name tenchung">
                                                            iPad Gen 10 2022 Wifi + 5G - 64GB - Chính hãng VN
                                                        </span>

                                                    <span class="product__description__property">
                                                            Xanh
                                                        </span>
                                                </th>
                                                <td class="product__quantity visually-hidden"><em>Số lượng:</em> 1</td>
                                                <td class="product__price">
                                                    14.490.000₫
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <hr>
                                <div class="order-summary__section order-summary__section--discount-code" id="discountCode">
                                    <div class="edit_checkout animate-floating-labels">
                                        <div class="fieldset">
                                            <div class="field ">
                                                <div class="field__input-btn-wrapper d-flex">
                                                    <div class="form-group col-md-9 w-75">
                                                        <input type="email" class="field__input " placeholder="Nhập mã khuyến mãi">
                                                    </div>
                                                    <button class="border rounded-1 p-2 col-md-3 mx-1 w-25" type="button">
                                                            <span class="spinner-label">Áp dụng</span>
                                                        </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="order-summary__section ">
                                    <table class=" w-100">
                                        <tbody class="total-line-table__tbody">
                                            <tr class="total-line total-line--subtotal ">
                                                <th class="total-line__name" style="font-weight: normal;">
                                                    <span>Tạm tính</span>
                                                </th>
                                                <td class="total-line__price"><span>50.280.000₫</span></td>
                                            </tr>
                                            <tr class="total-line total-line--shipping-fee">
                                                <th class="total-line__name" style="font-weight: normal;">
                                                    <span> Phí vận chuyển</span>
                                                </th>
                                                <td class="total-line__price">
                                                    <span class="origin-price"></span>
                                                    <span data-bind="getTextShippingPriceFinal()">40.000₫</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot class="total-line-table__footer">
                                            <tr class="total-line payment-due">
                                                <th class="total-line__name">
                                                    <span class="payment-due__label-total fs-5">
                                                            Tổng cộng
                                                        </span>
                                                </th>
                                                <td class="total-line__price">
                                                    <span class="payment-due__price" data-bind="getTextTotalPrice()">50.320.000₫</span>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-8 order-summary__nav field__input-btn-wrapper order-2 order-md-1 ">
                            <a href="#" class="previous-link text-decoration-none w-100  d-flex justify-content-md-start justify-content-center ">
                                <span class="previous-link__content align-center" style="color: #74C0FC;">
                                  <i class="fas fa-chevron-left" style="color: #74C0FC;"></i> Quay về giỏ hàng
                                </span>
                            </a>
                        </div>
                        <div class="col-12 col-md-4 order-1 order-md-2 mb-2">
                            <button type="submit" class=" w-100 rounded-1 p-2 border">
                                <span class="spinner-label">ĐẶT HÀNG</span>
                              </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
   <script src="js/script.js"></script>
</body>
</html>

