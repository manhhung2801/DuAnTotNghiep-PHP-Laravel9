@extends('frontend.layouts.master')

@section('title', 'Sản phẩm')

@section('content')
<div class="layout-collection">
    <section class="bread-crumb">
        <div class="container">
            <ul class="breadcrumb">
                <li class="home">
                    <a href="#" title="Trang chủ"><span>Trang chủ</span></a>
                    <span class="mr_lr mx-2"><i class="fas fa-angle-right"></i></span>
                    <strong><span> iPhone</span></strong>
                </li>

            </ul>
        </div>
    </section>
    <!-- Main -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-title text-center mb-1">
                <h1 class="fs-3">iPhone</h1>
            </div>
            <div class="col-md-12 ">
                <a href="#" title="click xem ngay">
                    <img alt="Banner top" width="1300" height="300" class="img-fluid lazyload loaded rounded-4" data-src="//bizweb.dktcdn.net/100/480/632/files/iphone.jpg" src="//bizweb.dktcdn.net/100/480/632/files/iphone.jpg">
                </a>
            </div>
            <div class="col-md-12 col-list-cate mt-4 ">
                <div class="menu-list d-flex justify-content-center ">
                    <a class="cate-item text-decoration-none text-center flex-grow-0 flex-shrink-0 flex-basis-auto" href="#">
                        <div class="cate-img ">
                            <img width="100" height="100" src="//bizweb.dktcdn.net/thumb/large/100/480/632/collections/230223022516-thiet-ke-chua-co-te.png" class="  ">
                        </div>
                        <div class="cate-info-title ">iPhone 14 Series</div>
                    </a>
                    <a class="cate-item text-decoration-none text-center flex-grow-0 flex-shrink-0 flex-basis-auto" href="#">
                        <div class="cate-img ">
                            <img width="100" height="100" src="//bizweb.dktcdn.net/thumb/large/100/480/632/collections/230223022516-thiet-ke-chua-co-te.png" class="  ">
                        </div>
                        <div class="cate-info-title ">iPhone 14 Series</div>
                    </a>
                    <a class="cate-item text-decoration-none text-center flex-grow-0 flex-shrink-0 flex-basis-auto" href="#">
                        <div class="cate-img ">
                            <img width="100" height="100" src="//bizweb.dktcdn.net/thumb/large/100/480/632/collections/230223022516-thiet-ke-chua-co-te.png" class="  ">
                        </div>
                        <div class="cate-info-title ">iPhone 14 Series</div>
                    </a>
                    <a class="cate-item text-decoration-none text-center flex-grow-0 flex-shrink-0 flex-basis-auto" href="#">
                        <div class="cate-img ">
                            <img width="100" height="100" src="//bizweb.dktcdn.net/thumb/large/100/480/632/collections/230223022516-thiet-ke-chua-co-te.png" class="  ">
                        </div>
                        <div class="cate-info-title ">iPhone 14 Series</div>
                    </a>
                </div>
            </div>
            <div class="block-collection col-lg-12 col-12">
                <div class="category-products products-view products-view-grid list_hover_pro">
                    <div class="filter-containers">
                        <div class="sort-cate clearfix">
                            <div class="sort-cate-right">
                                <h3 class="active">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sort-alpha-down" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371h-1.781zm1.57-.785L11 2.687h-.047l-.652 2.157h1.351z"></path>
                                        <path d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645V14zM4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293V2.5z"></path>
                                    </svg> Xếp theo
                                </h3>
                                <ul style="margin-bottom: 0px;padding-left: 0px" class="sort-options p-2">
                                    <li class="btn-quick-sort  list-group-item p-0">
                                        <a title="Mặc định">Mặc định</a>
                                    </li>
                                    <li class="btn-quick-sort alpha-asc list-group-item p-0">
                                        <a title="Tên A-Z">Tên A-Z</a>
                                    </li>
                                    <li class="btn-quick-sort alpha-desc list-group-item p-0">
                                        <a title="Tên Z-A"><i></i>Tên Z-A</a>
                                    </li>
                                    <li class="btn-quick-sort position-desc list-group-item p-0">
                                        <a title="Hàng mới"><i></i>Hàng mới</a>
                                    </li>
                                    <li class="btn-quick-sort price-asc list-group-item p-0">
                                        <a title="Giá thấp đến cao"><i></i>Giá thấp đến cao</a>
                                    </li>
                                    <li class="btn-quick-sort price-desc list-group-item p-0">
                                        <a title="Giá cao xuống thấp"><i></i>Giá cao xuống thấp</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <script>
                            // Lấy tất cả các phần tử có class "active"
                            const activeElements = document.querySelectorAll('.active');

                            // Lắng nghe sự kiện click trên các phần tử có class "active"
                            activeElements.forEach(element => {
                                element.addEventListener('click', function() {
                                    // Lấy phần tử ul tiếp theo của phần tử được click
                                    const dropdown = this.nextElementSibling;

                                    // Kiểm tra nếu dropdown đang hiển thị thì ẩn nó, ngược lại thì hiển thị
                                    if (dropdown.style.display === 'none') {
                                        dropdown.style.display = 'block';
                                    } else {
                                        dropdown.style.display = 'none';
                                    }
                                });
                            });
                        </script>
                        <div class="products-view products-view-grid list_hover_pro mt-4">
                            <div class="row d-flex flex-lg-wrap">
                                <div class="col-6 col-md-3">
                                    <div class="item_product_main">
                                        <form action="#" method="post" class="variants product-action item-product-main duration-300" data-cart-form="" data-id="product-actions-30510614" enctype="multipart/form-data">
                                            <span class="flash-sale">
                                                Giảm 40%
                                            </span>
                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover" href="#" title="iPhone 13 Pro Max 1TB - Chính Hãng VN/A">
                                                    <img class="lazyload duration-300 loaded" src="//bizweb.dktcdn.net/thumb/large/100/480/632/products/13-pm-la-221119025651-2211191456.jpg?v=1681769956803">
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="product-name line-clamp line-clamp-2 ">
                                                    <a href="#" title="" class="text-decoration-none ">iPhone 13 Pro Max 1TB - Chính Hãng VN/A</a>
                                                </h3>
                                                <div class="product-price-cart">
                                                    <div class="price-box">
                                                        <span class="compare-price">49.990.000₫</span>

                                                        <span class="price">29.990.000₫</span>
                                                    </div>
                                                    <div class="product-button ">
                                                        <input class="hidden" type="hidden" name="variantId" value="86286440">
                                                        <button class="btn-cart btn-views rounded border-0 px-2" title="Tùy chọn" type="button">
                                                            <i class="fa-sharp fa-regular fa-cart-shopping"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="promotion-content">
                                                <div class="line-clamp-2-new" title="Thu cũ đổi mới: Thu giá cao trợ giá đến 90% ">
                                                    <p>Thu cũ đổi mới: Thu giá cao trợ giá đến 90%</p>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="item_product_main">
                                        <form action="#" method="post" class="variants product-action item-product-main duration-300" data-cart-form="" data-id="product-actions-30510614" enctype="multipart/form-data">
                                            <span class="flash-sale">
                                                Giảm 40%
                                            </span>
                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover" href="#" title="iPhone 13 Pro Max 1TB - Chính Hãng VN/A">
                                                    <img class="lazyload duration-300 loaded" src="//bizweb.dktcdn.net/thumb/large/100/480/632/products/13-pm-la-221119025651-2211191456.jpg?v=1681769956803">
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="product-name line-clamp line-clamp-2 ">
                                                    <a href="#" title="" class="text-decoration-none ">iPhone 13 Pro Max 1TB - Chính Hãng VN/A</a>
                                                </h3>
                                                <div class="product-price-cart">
                                                    <div class="price-box">
                                                        <span class="compare-price">49.990.000₫</span>

                                                        <span class="price">29.990.000₫</span>
                                                    </div>
                                                    <div class="product-button ">
                                                        <input class="hidden" type="hidden" name="variantId" value="86286440">
                                                        <button class="btn-cart btn-views rounded border-0 px-2" title="Tùy chọn" type="button">
                                                            <i class="fa-sharp fa-regular fa-cart-shopping"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="promotion-content">
                                                <div class="line-clamp-2-new" title="Thu cũ đổi mới: Thu giá cao trợ giá đến 90% ">
                                                    <p>Thu cũ đổi mới: Thu giá cao trợ giá đến 90%</p>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="item_product_main">
                                        <form action="#" method="post" class="variants product-action item-product-main duration-300" data-cart-form="" data-id="product-actions-30510614" enctype="multipart/form-data">
                                            <span class="flash-sale">
                                                Giảm 40%
                                            </span>
                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover" href="#" title="iPhone 13 Pro Max 1TB - Chính Hãng VN/A">
                                                    <img class="lazyload duration-300 loaded" src="//bizweb.dktcdn.net/thumb/large/100/480/632/products/13-pm-la-221119025651-2211191456.jpg?v=1681769956803">
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="product-name line-clamp line-clamp-2 ">
                                                    <a href="#" title="" class="text-decoration-none ">iPhone 13 Pro Max 1TB - Chính Hãng VN/A</a>
                                                </h3>
                                                <div class="product-price-cart">
                                                    <div class="price-box">
                                                        <span class="compare-price">49.990.000₫</span>

                                                        <span class="price">29.990.000₫</span>
                                                    </div>
                                                    <div class="product-button ">
                                                        <input class="hidden" type="hidden" name="variantId" value="86286440">
                                                        <button class="btn-cart btn-views rounded border-0 px-2" title="Tùy chọn" type="button">
                                                            <i class="fa-sharp fa-regular fa-cart-shopping"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="promotion-content">
                                                <div class="line-clamp-2-new" title="Thu cũ đổi mới: Thu giá cao trợ giá đến 90% ">
                                                    <p>Thu cũ đổi mới: Thu giá cao trợ giá đến 90%</p>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="item_product_main">
                                        <form action="#" method="post" class="variants product-action item-product-main duration-300" data-cart-form="" data-id="product-actions-30510614" enctype="multipart/form-data">
                                            <span class="flash-sale">
                                                Giảm 40%
                                            </span>
                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover" href="#" title="iPhone 13 Pro Max 1TB - Chính Hãng VN/A">
                                                    <img class="lazyload duration-300 loaded" src="//bizweb.dktcdn.net/thumb/large/100/480/632/products/13-pm-la-221119025651-2211191456.jpg?v=1681769956803">
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="product-name line-clamp line-clamp-2 ">
                                                    <a href="#" title="" class="text-decoration-none ">iPhone 13 Pro Max 1TB - Chính Hãng VN/A</a>
                                                </h3>
                                                <div class="product-price-cart">
                                                    <div class="price-box">
                                                        <span class="compare-price">49.990.000₫</span>

                                                        <span class="price">29.990.000₫</span>
                                                    </div>
                                                    <div class="product-button ">
                                                        <input class="hidden" type="hidden" name="variantId" value="86286440">
                                                        <button class="btn-cart btn-views rounded border-0 px-2" title="Tùy chọn" type="button">
                                                            <i class="fa-sharp fa-regular fa-cart-shopping"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="promotion-content">
                                                <div class="line-clamp-2-new" title="Thu cũ đổi mới: Thu giá cao trợ giá đến 90% ">
                                                    <p>Thu cũ đổi mới: Thu giá cao trợ giá đến 90%</p>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="item_product_main">
                                        <form action="#" method="post" class="variants product-action item-product-main duration-300" data-cart-form="" data-id="product-actions-30510614" enctype="multipart/form-data">
                                            <span class="flash-sale">
                                                Giảm 40%
                                            </span>
                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover" href="#" title="iPhone 13 Pro Max 1TB - Chính Hãng VN/A">
                                                    <img class="lazyload duration-300 loaded" src="//bizweb.dktcdn.net/thumb/large/100/480/632/products/13-pm-la-221119025651-2211191456.jpg?v=1681769956803">
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="product-name line-clamp line-clamp-2 ">
                                                    <a href="#" title="" class="text-decoration-none ">iPhone 13 Pro Max 1TB - Chính Hãng VN/A</a>
                                                </h3>
                                                <div class="product-price-cart">
                                                    <div class="price-box">
                                                        <span class="compare-price">49.990.000₫</span>

                                                        <span class="price">29.990.000₫</span>
                                                    </div>
                                                    <div class="product-button ">
                                                        <input class="hidden" type="hidden" name="variantId" value="86286440">
                                                        <button class="btn-cart btn-views rounded border-0 px-2" title="Tùy chọn" type="button">
                                                            <i class="fa-sharp fa-regular fa-cart-shopping"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="promotion-content">
                                                <div class="line-clamp-2-new" title="Thu cũ đổi mới: Thu giá cao trợ giá đến 90% ">
                                                    <p>Thu cũ đổi mới: Thu giá cao trợ giá đến 90%</p>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="item_product_main">
                                        <form action="#" method="post" class="variants product-action item-product-main duration-300" data-cart-form="" data-id="product-actions-30510614" enctype="multipart/form-data">
                                            <span class="flash-sale">
                                                Giảm 40%
                                            </span>
                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover" href="#" title="iPhone 13 Pro Max 1TB - Chính Hãng VN/A">
                                                    <img class="lazyload duration-300 loaded" src="//bizweb.dktcdn.net/thumb/large/100/480/632/products/13-pm-la-221119025651-2211191456.jpg?v=1681769956803">
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="product-name line-clamp line-clamp-2 ">
                                                    <a href="#" title="" class="text-decoration-none ">iPhone 13 Pro Max 1TB - Chính Hãng VN/A</a>
                                                </h3>
                                                <div class="product-price-cart">
                                                    <div class="price-box">
                                                        <span class="compare-price">49.990.000₫</span>

                                                        <span class="price">29.990.000₫</span>
                                                    </div>
                                                    <div class="product-button ">
                                                        <input class="hidden" type="hidden" name="variantId" value="86286440">
                                                        <button class="btn-cart btn-views rounded border-0 px-2" title="Tùy chọn" type="button">
                                                            <i class="fa-sharp fa-regular fa-cart-shopping"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="promotion-content">
                                                <div class="line-clamp-2-new" title="Thu cũ đổi mới: Thu giá cao trợ giá đến 90% ">
                                                    <p>Thu cũ đổi mới: Thu giá cao trợ giá đến 90%</p>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="item_product_main">
                                        <form action="#" method="post" class="variants product-action item-product-main duration-300" data-cart-form="" data-id="product-actions-30510614" enctype="multipart/form-data">
                                            <span class="flash-sale">
                                                Giảm 40%
                                            </span>
                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover" href="#" title="iPhone 13 Pro Max 1TB - Chính Hãng VN/A">
                                                    <img class="lazyload duration-300 loaded" src="//bizweb.dktcdn.net/thumb/large/100/480/632/products/13-pm-la-221119025651-2211191456.jpg?v=1681769956803">
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="product-name line-clamp line-clamp-2 ">
                                                    <a href="#" title="" class="text-decoration-none ">iPhone 13 Pro Max 1TB - Chính Hãng VN/A</a>
                                                </h3>
                                                <div class="product-price-cart">
                                                    <div class="price-box">
                                                        <span class="compare-price">49.990.000₫</span>

                                                        <span class="price">29.990.000₫</span>
                                                    </div>
                                                    <div class="product-button ">
                                                        <input class="hidden" type="hidden" name="variantId" value="86286440">
                                                        <button class="btn-cart btn-views rounded border-0 px-2" title="Tùy chọn" type="button">
                                                            <i class="fa-sharp fa-regular fa-cart-shopping"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="promotion-content">
                                                <div class="line-clamp-2-new" title="Thu cũ đổi mới: Thu giá cao trợ giá đến 90% ">
                                                    <p>Thu cũ đổi mới: Thu giá cao trợ giá đến 90%</p>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="item_product_main">
                                        <form action="#" method="post" class="variants product-action item-product-main duration-300" data-cart-form="" data-id="product-actions-30510614" enctype="multipart/form-data">
                                            <span class="flash-sale">
                                                Giảm 40%
                                            </span>
                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover" href="#" title="iPhone 13 Pro Max 1TB - Chính Hãng VN/A">
                                                    <img class="lazyload duration-300 loaded" src="//bizweb.dktcdn.net/thumb/large/100/480/632/products/13-pm-la-221119025651-2211191456.jpg?v=1681769956803">
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="product-name line-clamp line-clamp-2 ">
                                                    <a href="#" title="" class="text-decoration-none ">iPhone 13 Pro Max 1TB - Chính Hãng VN/A</a>
                                                </h3>
                                                <div class="product-price-cart">
                                                    <div class="price-box">
                                                        <span class="compare-price">49.990.000₫</span>

                                                        <span class="price">29.990.000₫</span>
                                                    </div>
                                                    <div class="product-button ">
                                                        <input class="hidden" type="hidden" name="variantId" value="86286440">
                                                        <button class="btn-cart btn-views rounded border-0 px-2" title="Tùy chọn" type="button">
                                                            <i class="fa-sharp fa-regular fa-cart-shopping"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="promotion-content">
                                                <div class="line-clamp-2-new" title="Thu cũ đổi mới: Thu giá cao trợ giá đến 90% ">
                                                    <p>Thu cũ đổi mới: Thu giá cao trợ giá đến 90%</p>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main -->
</div>

@endsection