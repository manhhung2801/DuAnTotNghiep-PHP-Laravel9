<header class="header-bg-101">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
                <button class="navbar-toggler icon-menu border-0 border-white"  type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-regular fa-bars fa-lg" style="color: #ffffff;"></i>
                </button>

                <a class="navbar-brand ps-md-5" href="#">
                    <span class="fs-1 text-white fw-bold ps-md-4">CYBERMART</span>
                </a>
                <p class="navbar-toggler border-0 ps-2 icon-cart">
                    <i class="fa-solid fa-cart-shopping fa-lg mt-4" style="color: #ffffff;"></i>
                    <span class="cart-count-mobile">12</span>
                </p>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-lg-0">
                    <li class="nav-item ms-5">
                        <div class="d-flex mt-1">
                            <input class="form-control text-secondary text-opacity-50 input-search" type="search" placeholder="Tìm Sản Phẩm..." aria-label="Search">
                            <button class="btn"style="margin-left: -40px"  type="submit"><i class="fa-light fa-magnifying-glass fa-lg text-secondary text-opacity-75"></i></button>
                        </div>
                    </li>
                    <li class="nav-item ms-5 shadow bg-body bg-secondary bg-opacity-25 rounded-1" style="height: 50px;">
                        <p class="float-start pb-5 px-1">
                            <i class="float-start fa-light fa-location-dot fa-2xl mt-4" style="color: #ffffff;"></i>
                            <span class="text-white ps-2 pt-1 fs-navbar-1">Hệ thống cửa hàng</span><br/>
                            <span class="text-white ps-2 fs-navbar-2 fs-navbar-2">7 cửa hàng</span>
                        </p>
                    </li>
                    <li class="nav-item ms-3" style="height: 50px;">
                        <p class="float-start pb-5 px-1">
                            <i class="float-start fa-solid fa-phone-volume fa-2xl mt-4" style="color: #ffffff;"></i>
                            <span class="text-white ps-2 pt-1 fs-navbar-1">Gọi mua hàng</span><br/>
                            <span class="text-white ps-2 fs-navbar-2">1900 6750</span>
                        </p>
                    </li>
                    <li class="nav-item ms-3" style="height: 50px;">
                        <div class="float-start pb-5 px-1" style="width: 110px;">
                            <i class="float-start fa-regular fa-user fa-2xl mt-4" style="color: #ffffff;"></i>
                            <span class="text-white ps-2 pt-1 fs-navbar-1">Thông tin</span><br/>
                            <div class="dropdown" style="margin-left: 36px;">
                                <span class="dropdown-toggle text-white fs-navbar-2" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    Tài khoản
                                </span>
                                <ul class="dropdown-menu rounded-0 p-0" aria-labelledby="dropdownMenuButton1">
                                  <li><a class="dropdown-item border border-top-1 border-bottom-1" href="{{ route("login") }}">Đăng nhập</a></li>
                                  <li><a class="dropdown-item border border-top-1 border-bottom-1" href="{{ route("register") }}">Đăng ký</a></li>
                                  <li><a class="dropdown-item border border-top-1 border-bottom-1" href="#">Dang sách yêu thích (0)</a></li>
                                  <li><a class="dropdown-item border border-top-1 border-bottom-1" href="#">So sánh sản phẩm (0)</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item ms-2 list-group-item d-flex justify-content-between align-items-start" style="height: 50px;">
                        <div class="ms-2 me-auto">
                            <i class="fa-solid fa-cart-shopping fa-2xl mt-4" style="color: #ffffff;"></i>
                            <span class="cart-count">12</span>
                            <span class="text-white ps-2 fs-navbar-2">Giỏ hàng</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <hr class="m-0 text-white hr-line">
    @include('frontend.layouts.navbar')
</header>
