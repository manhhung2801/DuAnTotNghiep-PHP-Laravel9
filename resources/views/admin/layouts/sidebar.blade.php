<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <!-- <img src="{{ asset('backend/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon"> -->
            <!-- <span class="fs-1 text-black fw-bold"><h2>CYBERMART</h2></span> -->
        </div>
        <div>
            <p class="logo-text text-black fw-bold">CYBERMART</p>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ route('dashboard') }}">
                <div class="parent-icon"><i class='bx bx-home-alt'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li class="menu-label">Quản Lý</li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="fa-solid fa-cart-plus"></i>
                </div>
                <div class="menu-title">Đơn hàng</div>
            </a>
            <ul>
                <li>
                    <a href="{{ route('admin.order.index') }}"><i class='bx bx-radio-circle'></i>Danh sách đơn hàng</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="fa-solid fa-box-open"></i>
                </div>
                <div class="menu-title">Sản phẩm</div>
            </a>
            <ul>
                <li>
                    <a href="{{ route('admin.product.index') }}"><i class='bx bx-radio-circle'></i>Danh sách sản
                        phẩm</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="fa-solid fa-layer-group"></i>
                </div>
                <div class="menu-title">Danh Mục</div>
            </a>
            <ul>
                <li> <a href="{{ route('admin.category.index') }}"><i class='bx bx-radio-circle'></i>Danh Sách Danh
                        Mục</a>
                </li>
                <li> <a href="{{ route('admin.sub-category.index') }}"><i class='bx bx-radio-circle'></i>Danh Sách Danh
                        Mục Phụ</a>
                </li>
                <li> <a href="{{ route('admin.child-category.index') }}"><i class='bx bx-radio-circle'></i>Danh Sách
                        Danh Mục Con</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="fas fa-pager"></i>
                </div>
                <div class="menu-title">Danh Mục Trang</div>
            </a>
            <ul>
                <li> <a href="{{ route('admin.page-category.index') }}"><i class='bx bx-radio-circle'></i>Danh Sách
                        Trang</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="fa-solid fa-sliders"></i>
                </div>
                <div class="menu-title">Thanh trượt</div>
            </a>
            <ul>
                <li> <a href="{{ route('admin.slider.index') }}"><i class='bx bx-radio-circle'></i>Danh sách thanh
                        trượt</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="lni lni-sprout"></i>
                </div>
                <div class="menu-title">Phiếu giảm giá</div>
            </a>
            <ul>
                <li> <a href="{{ route('admin.coupons.index') }}"><i class='bx bx-radio-circle'></i>Danh Sách Phiếu Giảm
                        Giá</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="fas fa-columns"></i>
                </div>
                <div class="menu-title">Trang</div>
            </a>
            <ul>
                <li>
                    <a href="{{ route('admin.pages.index') }}"><i class='bx bx-radio-circle'></i>Danh sách trang</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="fa-solid fa-newspaper"></i>
                </div>
                <div class="menu-title">Bài viết</div>
            </a>
            <ul>
                <li>
                    <a href="{{ route('admin.post-category.index') }}"><i class='bx bx-radio-circle'></i>Loại bài
                        viết</a>
                </li>
                <li>
                    <a href="{{ route('admin.post.index') }}"><i class='bx bx-radio-circle'></i>Danh sách bài viết</a>
                <li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="fa-solid fa-box-open"></i>
                </div>
                <div class="menu-title">Tài khoản</div>
            </a>
            <ul>
                <li>
                    <a href="{{ route('admin.user-management.index') }}"><i class='bx bx-radio-circle'></i>Danh Sách
                        Tài khoản</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="fa-solid fa-location-dot"></i>
                </div>
                <div class="menu-title">Địa chỉ cửa hàng</div>
            </a>
            <ul>
                <li>
                    <a href="{{ route('admin.storeAddress.index') }}"><i class='bx bx-radio-circle'></i>Danh sách cửa
                        hàng</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="fa-solid fa-comment"></i>
                </div>
                <div class="menu-title">Bình luận</div>
            </a>
            <ul>
                <li>
                    <a href="{{ route('admin.comment.index') }}"><i class='bx bx-radio-circle'></i>Danh sách bình
                        luận</a>
                </li>
            </ul>
        </li>

        {{-- <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="fa-regular fa-address-book"></i>
                </div>
                <div class="menu-title">Liên Hệ</div>
            </a>
            <ul>
                <li>
                    <a href="{{ route('admin.AdminContact') }}"><i class='bx bx-radio-circle'></i>Danh sách Khách
                        hàng liên hệ</a>
                </li>
            </ul>
        </li> --}}


    </ul>
    <!--end navigation-->
</div>
