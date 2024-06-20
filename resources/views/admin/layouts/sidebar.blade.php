<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('backend/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Rocker</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="javascript:;">
                <div class="parent-icon"><i class='bx bx-home-alt'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li class="menu-label">Quản Lý</li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="fa-solid fa-layer-group"></i>
                </div>
                <div class="menu-title">Danh Mục</div>
            </a>
            <ul>
                <li> <a href="{{ route('admin.category.index') }}"><i class='bx bx-radio-circle'></i>Danh Sách Danh Mục</a>
                </li>
                <li> <a href="{{ route('admin.sub-category.index') }}"><i class='bx bx-radio-circle'></i>Danh Sách Danh Mục Phụ</a>
                </li>
                <li> <a href="{{ route('admin.child-category.index') }}"><i class='bx bx-radio-circle'></i>Danh Sách Danh Mục Con</a>
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
                <li> <a href="{{ route('admin.slider.index') }}"><i class='bx bx-radio-circle'></i>Danh sách thanh trượt</a>
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
                <li> <a href="{{ route('admin.coupons.index') }}"><i class='bx bx-radio-circle'></i>Danh Sách Phiếu Giảm Giá</a>
                </li>
            </ul>
        </li>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="fa-solid fa-box-open"></i>
                </div>
                <div class="menu-title">Products</div>
            </a>
            <ul>
                <li>
                    <a href="{{ route('admin.product.index') }}"><i class='bx bx-radio-circle'></i>List Product</a>
                </li>
                <li>
                    <a href="{{ route('admin.variant.index') }}"><i class='bx bx-radio-circle'></i>Variants</a>
                <li>
                <li>
                    <a href="{{ route('admin.variantItem.index') }}"><i class='bx bx-radio-circle'></i>Variants Items</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="fa-solid fa-box-open"></i>
                </div>
                <div class="menu-title">Tin tức</div>
            </a>
            <ul>
                <li>
                    <a href="{{ route("admin.post-cate.index") }}"><i class='bx bx-radio-circle'></i>Loại Tin Tức</a>
                </li>
                <li>
                    <a href="{{ route('admin.post.index') }}"><i class='bx bx-radio-circle'></i>Danh Sách Tin Tức</a>
                <li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="fa-solid fa-box-open"></i>
                </div>
                <div class="menu-title">Người Dùng</div>
            </a>
            <ul>
                <li>
                    <a href="{{ route('admin.user-management.index') }}"><i class='bx bx-radio-circle'></i>Danh Sách Người Dùng</a>
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
                    <a href="{{ route('admin.storeAddress.index') }}"><i class='bx bx-radio-circle'></i>Danh sách cửa hàng</a>
                </li>
            </ul>
        </li>

    </ul>
    <!--end navigation-->
</div>
