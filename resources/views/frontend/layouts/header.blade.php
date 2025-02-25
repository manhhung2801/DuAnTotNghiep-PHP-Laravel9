<header class="header-bg-101">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <button class="navbar-toggler icon-menu border-0 border-white" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fa-regular fa-bars fa-lg" style="color: #ffffff;"></i>
            </button>

            <a class="navbar-brand" href="{{ route('home') }}">
                {{-- <span class="fs-1 text-white fw-bold">CYBERMART</span> --}}
                <img src="{{ asset('uploads/logo/filelogotext_white.png') }}" width="200px" alt="logo">
            </a>
            <a href="{{ route('cart.index') }}" class="navbar-toggler border-0 ps-2 icon-cart">
                <i class="fa-solid fa-cart-shopping fa-lg mt-3" style="color: #ffffff;"></i>
                <span class="cart-count-mobile">{{ $qtyCart ?? '0' }}</span>
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-lg-0">
                    <li class="nav-item ms-5">
                        <style>
                            #search-result {
                                position: absolute;
                                z-index: 9999;
                                background: #1b2d3c;
                                width: 420px;
                                top: 55px;
                                box-shadow: 0 1px 8px rgba(0, 0, 0, .3);
                            }

                            .autocomplete-item {
                                display: flex;
                                align-items: center;
                                padding: 10px;
                                overflow: hidden;
                                white-space: nowrap;
                                text-overflow: ellipsis;
                            }

                            .autocomplete-item img {
                                width: 30px;
                                height: 30px;
                                margin-right: 10px;
                                flex-shrink: 0;
                            }

                            .autocomplete-item div {
                                overflow: hidden;
                            }

                            .autocomplete-item:hover {
                                background-color: #f0f0f0;
                            }

                            .header-search .header-search-wrapper.show {
                                display: flex;
                                width: 410px;
                            }

                            .viewed {
                                background: #f5f5f5;
                                font-size: 13px;
                                color: #666;
                                padding: 5px;
                            }
                        </style>
                        <div class="d-flex mt-1">
                            <form action="{{ route('search') }}" method="GET" class="d-flex">
                                <input type="text"
                                    class="form-control text-secondary text-opacity-50 input-search me-2"
                                    id="product-search" placeholder="Tìm kiếm sản phẩm..." required name="query">
                                <button class="btn" style="margin-left: -50px" type="submit">
                                    <i class="fa-light fa-magnifying-glass fa-lg text-secondary text-opacity-75"></i>
                                </button>
                            </form>
                        </div>
                        <div id="search-result">
                            <ul class="list-group list-group-flush " id="result">
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item ms-5 shadow bg-body bg-secondary bg-opacity-25 rounded-1" style="height: 50px;">
                        <a href="{{route('address')}}">
                            <p class="float-start pb-5 px-1">
                                <i class="float-start fa-light fa-location-dot fa-2xl mt-4" style="color: #ffffff;"></i>
                                <span class="text-white ps-2 pt-1 fs-navbar-1">Hệ thống cửa hàng</span><br />
                                <span class="text-white ps-2 fs-navbar-2 fs-navbar-2">{{ $countAddress }} cửa
                                    hàng</span>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item ms-3" style="height: 50px;">
                        <p class="float-start pb-5 px-1">
                            <i class="float-start fa-solid fa-phone-volume fa-2xl mt-4" style="color: #ffffff;"></i>
                            <span class="text-white ps-2 pt-1 fs-navbar-1">Gọi mua hàng</span><br />
                            <span class="text-white ps-2 fs-navbar-2">1900 6750</span>
                        </p>
                    </li>
                    <li class="nav-item ms-3" style="height: 50px;">
                        <div class="float-start pb-5 px-1" style="width: 110px;">
                            <i class="float-start fa-regular fa-user fa-2xl mt-4" style="color: #ffffff;"></i>
                            <span class="text-white ps-2 pt-1 fs-navbar-1">Thông tin</span><br />
                            <div class="dropdown" style="margin-left: 36px;">
                                <span class="dropdown-toggle text-white fs-navbar-2" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Tài khoản
                                </span>
                                <ul class="dropdown-menu p-0" aria-labelledby="dropdownMenuButton1">
                                    @if (!empty(Auth::check()))
                                        <li><a class="dropdown-item" href="{{ route('dashboard') }}">Tài khoản của
                                                tôi</a></li>
                                        <li>
                                            <!-- Authentication -->
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">Đăng
                                                    xuất
                                                </a>
                                            </form>
                                        </li>
                                    @else
                                        <li><a class="dropdown-item" href="{{ route('login') }}">Đăng nhập</a></li>
                                        <li><a class="dropdown-item" href="{{ route('register') }}">Đăng ký</a></li>
                                    @endif

                                    <li><a class="dropdown-item" href="{{ url('/order') }}">Đơn
                                            hàng của tôi</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item ms-2 list-group-item d-flex justify-content-between align-items-start"
                        style="height: 50px;">
                        <div class="ms-2 me-auto">
                            <a href="{{ route('cart.index') }}" class="list-group-item">
                                <i class="fa-solid fa-cart-shopping fa-2xl mt-4" style="color: #ffffff;"></i>
                                <span class="cart-count">{{ $qtyCart ?? '0' }}</span>

                                <span class="text-white ps-2 fs-navbar-2">Giỏ hàng</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <hr class="m-0 text-white hr-line">
    @include('frontend.layouts.navbar')

</header>
