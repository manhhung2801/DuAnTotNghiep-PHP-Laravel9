<nav class="navbar navbar-expand-lg menu-mobile">
    <!-- navbar show web  -->
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-collapse navbar-nav mb-2 mb-lg-0 justify-content-center">
                <li class="navbar-toggler nav-item border-0">
                    <div class="d-flex mt-1 input-search-mobile">
                        <input class="form-control text-secondary text-opacity-50" type="text"
                            placeholder="Tìm Sản Phẩm..." aria-label="Search">
                        <button class="btn"style="margin-left: -40px" type="submit"><i
                                class="fa-light fa-magnifying-glass fa-lg text-secondary text-opacity-75"></i></button>
                    </div>
                </li>
                <li class="nav-item mxc">
                    <a class="nav-link text-white" aria-current="page" href="#">Trang chủ</a>
                </li>
                <li class="nav-item mxc">
                    <a class="nav-link text-white" aria-current="page" href="#">Giới thiệu</a>
                </li>
                <li class="navbar-toggler nav-item mxc border-0">
                    <div class="dropdown">
                        <span class="dropdown-toggle text-white fs-6" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Tài khoản
                        </span>
                        <ul class="dropdown-menu dropdown-menu-end rounded-0 p-0" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item border border-top-1 border-bottom-1" href="#">Đăng
                                    nhập</a></li>
                            <li><a class="dropdown-item border border-top-1 border-bottom-1" href="#">Đăng ký</a>
                            </li>
                            <li><a class="dropdown-item border border-top-1 border-bottom-1" href="#">Dang sách
                                    yêu thích (0)</a></li>
                            <li><a class="dropdown-item border border-top-1 border-bottom-1" href="#">So sánh sản
                                    phẩm (0)</a></li>
                        </ul>
                    </div>
                </li>

                @foreach ($categories as $category)
                    <li class="nav-item mxc ct-hover">
                        <div class="dropdown-center rounded-0">
                            <span class="text-white fs-6 dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                {{ $category->name }}
                            </span>
                            @if ($category->subCategories->count() > 0)
                                <ul class="dropdown-menu dropdown-menu-end rounded-0 p-0">
                                    @foreach ($category->subCategories as $subCategory)
                                        <li class="m-0"><a class="dropdown-item border border-bottom-1"
                                                href="/product/{{ $category->slug }}/{{ $subCategory->slug }}">{{ $subCategory->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    </li>
                @endforeach
                <li class="nav-item mxc">
                    <a class="nav-link text-white" aria-current="page" href="#">Chính sách</a>
                </li>
                <li class="nav-item mxc">
                    <a class="nav-link text-white" aria-current="page" href="#">Tin tức</a>
                </li>
                <li class="nav-item mxc">
                    <a class="nav-link text-white" aria-current="page" href="#">Liên hệ</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- navbar show web  -->
</nav>
