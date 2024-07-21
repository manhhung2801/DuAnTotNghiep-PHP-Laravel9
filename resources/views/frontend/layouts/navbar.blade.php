<nav class="navbar navbar-expand-lg ">
    <div class="container">
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 mt-1">
                <li class="nav-item nav_item_cate px-2">
                    <a class="nav-link text-white" aria-current="page" href="/">Trang chủ</a>
                </li>

                <li class="nav-item nav_item_cate px-2">
                    <a class="nav-link text-white"
                        href="{{ route('showPages', ['slug1' => 'gioi-thieu', 'slug2' => 'gioi-thieu']) }}">Giới
                        thiệu</a>
                </li>
                <li class="nav-item nav_item_cate px-2 dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="javascript:;" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false" id="product-link">
                        Sản Phẩm
                    </a>
                    <ul class="dropdown-menu mt-1 nav_sub_dropdown p-0">
                        <li class="nav_sub_cate">
                            <a class="dropdown-item item_nav_name py-2" href="{{ url('/san-pham') }}">
                                Tất cả sản phẩm <span class="float-end ms-5"><i
                                        class="fa-solid fa-layer-group"></i></span>
                            </a>
                        </li>
                        @foreach ($categories as $category)
                            <li class="nav_sub_cate">
                                <a class="dropdown-item item_nav_name py-2"
                                    href="{{ url('/san-pham/' . $category->slug) }}">
                                    {{ $category->name }}
                                    @if ($category->subCategories->count() > 0)
                                        <span class="float-end ms-5"><i class="fa-solid fa-chevron-right"></i></span>
                                    @endif
                                </a>
                                @if ($category->subCategories->count() > 0)
                                    <ul class="bg-white dropdown-menu dropdown-submenu p-0">
                                        @foreach ($category->subCategories as $subCategory)
                                            <li class="list-group-item">
                                                <a class="dropdown-item py-2 item_child_nav"
                                                    href="{{ url('/san-pham/' . $category->slug . '/' . $subCategory->slug) }}">
                                                    {{ $subCategory->name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </li>

                <li class="nav-item nav_item_cate px-2">
                    <a class="nav-link text-white" href="{{ url('/tin-tuc') }}">Tin tức</a>
                </li>
                <li class="nav-item nav_item_cate px-2">
                    <a class="nav-link text-white" href="{{ route('contact') }}">Liên hệ</a>
                </li>
                <li class="nav-item nav_item_cate px-2">
                    <a class="nav-link text-white"
                        href="{{ route('showPages', ['slug1' => 'chinh-sach', 'slug2' => 'chinh-sach-mua-hang']) }}">
                        Chính Sách Mua Hàng</a>
                </li>
                <li class="nav-item nav_item_cate px-2">
                    <a class="nav-link text-white" href="{{ url('/order') }}">Đơn Hàng Của Tôi</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
    .dropdown-item.item_nav_name {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    /* Ẩn tất cả các dropdown menu con */
    .nav-item .dropdown-menu {
        display: none;
    }

    /* Hiển thị dropdown menu con khi hover vào mục cha */
    .nav-item:hover>.dropdown-menu {
        display: block;
    }

    /* Ẩn tất cả các dropdown submenu con */
    .nav_sub_cate .dropdown-submenu {
        display: none;
    }

    /* Hiển thị dropdown submenu con khi hover vào mục cha */
    .nav_sub_cate:hover>.dropdown-submenu {
        display: block;
    }

    /* Hiển thị dropdown menu con khi thêm class 'show' */
    .nav-item .dropdown-menu.show {
        display: block;
    }


    .navbar-nav {
        width: 100%;
        justify-content: center;
    }

    .navbar-nav .dropdown-submenu {
        display: none;
        position: absolute;
        top: 0;
        left: 100%;
        min-width: 200px;
        z-index: 1000;
        margin-top: 20px
    }

    .navbar-nav .dropdown-menu>li:hover>.dropdown-submenu {
        display: block;
    }

    @media (max-width: 991.98px) {
        .navbar-nav {
            justify-content: flex-start;
        }

        .ms-auto {
            margin-left: auto !important;
        }

        .dropdown-submenu {
            display: none;
        }
    }




    /* New styles for dropdown hover effect */
    .dropdown-menu .dropdown-item:hover,
    .dropdown-menu .dropdown-submenu .dropdown-item:hover {
        background-color: #000;
        color: #ffffff;
    }

    .nav_sub_cate:hover>.item_nav_name {
        background-color: #000;
        color: #ffffff;
    }

    .dropdown-menu {
        border: none;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .dropdown-menu .dropdown-submenu {
        display: none;
        position: absolute;
        left: 100%;
        top: -7px;
    }

    .dropdown-menu>li:hover>.dropdown-submenu {
        display: block;
    }

    /* Ensure submenu is on top of other elements */
    .dropdown-submenu {
        z-index: 1000;
    }
</style>
