<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ Hàng</title>
    <link rel="stylesheet" href="Font-Awesome-640/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .cart-page .cart-header-info {
            display: flex;
            display: flex;
            padding: 7px 0;
            border: solid 1px #ebebeb;
            border-bottom: none;
            font-weight: bold;
            text-transform: uppercase;
            border-radius: 10px 10px 0px 0px;
            background: #f8f8f8
        }
        
        .cart-page .cart-header-info div:nth-child(1) {
            width: 51%;
            text-align: left;
            padding-left: 10px;
        }
        
        .cart-page .cart-header-info div:nth-child(2) {
            width: 16%;
            text-align: center
        }
        
        .cart-page .cart-header-info div:nth-child(3) {
            width: 16%;
            text-align: center
        }
        
        .cart-page .cart-header-info div:nth-child(4) {
            width: 16%;
            text-align: right
        }
        
        .cart-page .cart_body {
            border: solid 1px #ebebeb;
            border-radius: 0px 0px 10px 10px
        }
        
        .cart-page .cart_body .ajaxcart__row .cart_product {
            width: 100%;
            height: 120px;
            display: flex;
            align-items: center
        }
        
        .cart-page .cart_body .ajaxcart__row:first-child {
            border-top: none
        }
        
        .cart-page .cart_body .cart_image {
            width: 110px;
            height: 110px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 10px
        }
        
        .cart-page .cart_body .cart_image img {
            max-width: 100%;
            max-height: 100%
        }
        
        .cart-page .cart_body .cart_info {
            padding-left: 15px;
            vertical-align: top;
            padding-right: 15px;
            display: flex;
            width: calc(100% - 110px);
        }
        
        .cart-page .cart_body .cart_info .cart_name {
            width: 50%;
            margin-bottom: 5px
        }
        
        .cart-page .cart_body .cart_info .cart_name a {
            margin-bottom: 4px;
            font-size: 1.4rem;
            font-weight: 500;
            line-height: 18px;
            color: black;
        }
        
        .cart-page .cart_body .cart_info .cart_name a:hover {
            color: #bf1e2e
        }
        
        .cart-page .cart_body .cart_info .cart_name .remove-item-cart {
            display: block;
            color: black;
            font-weight: 400;
            font-size: 14px;
            cursor: pointer;
        }
        
        .cart-page .cart_body .cart_info .cart_name p {
            margin: 0;
            font-style: italic;
            color: #9e9e9e
        }
        
        .cart-page .cart_body .cart_info .variant-title {
            display: block;
            font-size: 12px
        }
        
        .cart-page .cart_body .cart_item_name {
            width: 60%
        }
        
        .cart-page .cart_body .grid {
            width: 20%;
            display: flex;
            align-items: center;
            justify-content: center
        }
        
        .cart-page .cart_body .grid.justify-right {
            justify-content: end
        }
        
        .cart-page .cart_body .grid .cart_prices .cart-price,
        .cart-total {
            font-weight: bold;
            display: block;
            font-size: 14px;
            color: #bf1e2e
        }
        
        .cart-page .cart_body .grid .cart__btn-remove {
            font-size: 13px;
            color: #30656b
        }
        
        .cart-page .cart_body .grid .cart_quantity {
            font-size: 12px;
            margin-bottom: 5px;
            display: block;
            font-weight: normal;
            color: #333
        }
        
        .cart-page .cart_body .cart_select input {
            display: inline-block;
            padding: 0;
            text-align: center;
            border-radius: 0;
            width: 35px;
            min-height: 28px;
            border: 1px solid #e5e5e5;
            color: #222;
            height: 28px;
            font-size: 14px;
            margin: 0;
            float: left;
            border-left: none;
            border-right: none
        }
        
        .cart-page .cart_body .cart_select button {
            border-radius: 0;
            border: 1px solid #e5e5e5;
            border-color: #e5e5e5;
            color: #222;
            line-height: 26px;
            padding: 0;
            margin: 0;
            width: 28px;
            background-color: #fff;
            height: 28px;
            float: left
        }
        
        .cart-page .ajaxcart__footer {
            margin-top: 20px
        }
        
        .cart-page .ajaxcart__footer .cart__subtotal {
            font-size: 15px;
            font-weight: 500;
            margin-bottom: 12px;
            display: flex;
            text-transform: uppercase
        }
        
        .cart-page .ajaxcart__footer .cart__subtotal .cart__col-6 {
            width: 50%;
            float: left;
            display: flex;
            align-items: center
        }
        
        .cart-page .ajaxcart__footer .cart__subtotal .cart__totle {
            width: 50%;
            float: left;
            text-align: right
        }
        
        .cart-page .ajaxcart__footer .cart__subtotal .cart__totle .total-price {
            color: #bf1e2e;
            font-weight: bold;
            font-size: 1.8rem
        }
        
        .cart-page .ajaxcart__footer .cart__btn-proceed-checkout-dt {
            display: block;
            position: relative
        }
        
        .cart-page .ajaxcart__footer .cart__btn-proceed-checkout-dt button {
            width: 100%;
            background: #141414;
            color: #fff;
            padding: 0px 10px;
            border-radius: 4px;
            transition: .3s;
            -webkit-transition: .3s;
            -moz-transition: .3s;
            -ms-transition: .3s;
            -o-transition: .3s;
            text-transform: uppercase;
            border: 1px solid #141414;
            height: 40px;
            line-height: 40px;
            font-weight: 600
        }
        
        .cart-page .ajaxcart__footer .cart__btn-proceed-checkout-dt button:hover {
            background: #bf1e2e;
            border-color: #bf1e2e
        }
        
        .cart-page .ajaxcart__footer .cart__btn-proceed-checkout-dt button.btn[disabled] {
            margin-top: 5px;
            opacity: 0.6
        }
        
        .cart-page .ajaxcart__footer .btn-proceed-checkout {
            width: auto;
            background: #ededed;
            color: #333;
            font-weight: 600;
            padding: 0px 10px;
            border-radius: 4px;
            text-transform: uppercase;
            height: 40px;
            font-size: 1.4rem;
            line-height: 40px;
            font-weight: 600;
            padding: 0 20px;
            border-radius: 5px;
            display: inline-block
        }
        
        .cart-page .ajaxcart__footer .btn-proceed-checkout:hover {
            background: #ddd
        }
        
        @media (max-width: 767px) {
            .cart-page .cart-header-info {
                display: none;
                border: none;
            }
            .cart-page .cart_body {
                border: none;
            }
            .cart-page .cart_body .cart_info {
                display: block;
                position: relative;
                width: 100%;
                margin-top: -60px;
            }
            .cart-page .cart_body .cart_info .cart_name {
                width: 100%;
            }
            .cart-page .cart_body .cart_info .cart_name a {
                -webkit-line-clamp: 2;
                overflow: hidden;
                display: -webkit-box;
                -webkit-box-orient: vertical;
            }
            .cart-page .cart_body .grid .cart_prices .cart-total {
                display: none;
            }
            .cart-page .cart_body .grid .cart_select {
                position: absolute;
                left: 15px;
                top: 60px;
            }
            .cart-page .cart_body .cart_info .cart_name .remove-item-cart {
                position: absolute;
                right: 0;
                top: 80px;
            }
            .cart-page .cart_body .grid .cart_prices .cart-price {
                position: absolute;
                right: 0;
                top: 60px;
            }
            .cart-page .cart_body .cart_info .variant-title {
                position: absolute;
                top: 40px;
                left: 15px;
            }
            .cart-page .ajaxcart__footer .btn-proceed-checkout {
                width: 100%;
                text-align: center;
                float: left;
            }
            .cart-page .ajaxcart__footer .cart__subtotal {
                font-size: 15px;
                font-weight: 500;
                margin-bottom: 12px;
                display: flex;
                text-transform: uppercase
            }
        }
    </style>
</head>
<body>
    <section class="main-cart-page main-container col1-layout">
        <div class="main container cartpcstyle">
            <div class="wrap_background_aside margin-bottom-40">
                <div class="header-cart">
                    <div class="title-block-page">
                        <h1 class="title_cart fs-4 mb-3">
                            Giỏ hàng của bạn
                        </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 ">
                        <div class="cart-page ">
                            <div class="drawer__inner">
                                <div class="CartPageContainer">
                                    <div class="cart-header-info">
                                        <div>Thông tin sản phẩm</div>
                                        <div>Đơn giá</div>
                                        <div>Số lượng</div>
                                        <div>Thành tiền</div>
                                    </div>
                                    <div class="cart_body items">
                                        <div class="ajaxcart__row">
                                            <div class=" cart_product border-bottom">
                                                <a href="#" class="cart_image" title="iPhone 14 Pro Max 512GB - Chính hãng VN/A"><img src="https://bizweb.dktcdn.net/thumb/compact/100/480/632/products/220908114903-iphone-14-pro-max-1-1-2bf608ee-efbc-4923-b0a0-d80712cecc68.jpg" alt="iPhone 14 Pro Max 512GB - Chính hãng VN/A"></a>
                                                <div class="cart_info">
                                                    <div class="cart_name ">
                                                        <a href="#" class="text-decoration-none fs-6 " title="iPhone 14 Pro Max 512GB - Chính hãng VN/A">iPhone 14 Pro Max 512GB - Chính hãng</a>
                                                        <span class="variant-title">Vàng</span>
                                                        <a title="Xóa" class="remove-item-cart text-decoration-none ">Xóa</a>
                                                    </div>
                                                    <div class="grid">
                                                        <div class="grid__item one-half text-right cart_prices">
                                                            <span class="cart-price">35.790.000₫</span>
                                                        </div>
                                                    </div>
                                                    <div class="grid">
                                                        <div class="cart_select">
                                                            <div class=" input-group-btn">
                                                                <button type="button" id="minus-btn">
                                                                               -
                                                                     </button>
                                                                <input type="text" id="qty-input" class=" number-sidebar" maxlength="3" value="1" min="0">
                                                                <button type="button" id="plus-btn">
                                                                                +							
                                                                  </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="grid justify-right ">
                                                        <div class="grid__item one-half text-right cart_prices">
                                                            <span class="cart-total">35.790.000₫</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
    
                                        </div>
                                        <div class="ajaxcart__row">
                                            <div class=" cart_product border-bottom">
                                                <a href="#" class="cart_image" title="iPhone 14 Pro Max 512GB - Chính hãng VN/A"><img src="https://bizweb.dktcdn.net/thumb/compact/100/480/632/products/220908114903-iphone-14-pro-max-1-1-2bf608ee-efbc-4923-b0a0-d80712cecc68.jpg" alt="iPhone 14 Pro Max 512GB - Chính hãng VN/A"></a>
                                                <div class="cart_info">
                                                    <div class="cart_name ">
                                                        <a href="#" class="text-decoration-none fs-6 " title="iPhone 14 Pro Max 512GB - Chính hãng VN/A">iPhone 14 Pro Max 512GB - Chính hãng</a>
                                                        <span class="variant-title">Vàng</span>
                                                        <a title="Xóa" class="remove-item-cart text-decoration-none ">Xóa</a>
                                                    </div>
                                                    <div class="grid">
                                                        <div class="grid__item one-half text-right cart_prices">
                                                            <span class="cart-price">35.790.000₫</span>
                                                        </div>
                                                    </div>
                                                    <div class="grid">
                                                        <div class="cart_select">
                                                            <div class=" input-group-btn">
                                                                <button type="button" id="minus-btn">
                                                                               -
                                                                     </button>
                                                                <input type="text" id="qty-input" class=" number-sidebar" maxlength="3" value="1" min="0">
                                                                <button type="button" id="plus-btn">
                                                                                +							
                                                                  </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="grid justify-right ">
                                                        <div class="grid__item one-half text-right cart_prices">
                                                            <span class="cart-total">35.790.000₫</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
    
                                        </div>
                                    </div>
                                    <div class="ajaxcart__footer cart-footer">
                                        <div class="flex-wrap-reverse d-flex">
                                            <div class="col-lg-8 col-12 mt-2 ">
                                                <a class="btn-proceed-checkout btn-checkouts text-decoration-none fs-6" title="Tiếp tục mua hàng" href="#">Tiếp tục mua hàng</a>
                                            </div>
                                            <div class="col-lg-4 col-12  ">
                                                <div class="ajaxcart__subtotal ">
                                                    <div class="cart__subtotal ">
                                                        <div class="cart__col-6">Tổng tiền:</div>
                                                        <div class="text-right cart__totle"><span class="total-price fs-5">35.790.000₫</span></div>
                                                    </div>
                                                </div>
                                                <div class="cart__btn-proceed-checkout-dt ">
                                                    <button type="button" class="button btn btn-default cart__btn-proceed-checkout">Thanh toán</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
   <script src="js/script.js"></script>
</body>
</html>
