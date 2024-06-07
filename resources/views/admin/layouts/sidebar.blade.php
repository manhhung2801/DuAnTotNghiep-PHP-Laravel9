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
        <li class="menu-label">UI Elements</li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="fa-solid fa-layer-group"></i>
                </div>
                <div class="menu-title">Category</div>
            </a>
            <ul>
                <li> <a href="{{ route('admin.category.index') }}"><i class='bx bx-radio-circle'></i>List Categories</a>
                </li>
                <li> <a href="{{ route('admin.sub-category.index') }}"><i class='bx bx-radio-circle'></i>Sub
                        Categories</a>
                </li>
                <li> <a href="{{ route('admin.child-category.index') }}"><i class='bx bx-radio-circle'></i>Child
                        Category</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="fa-solid fa-sliders"></i>
                </div>
                <div class="menu-title">Slider</div>
            </a>
            <ul>
                <li> <a href="{{ route('admin.slider.index') }}"><i class='bx bx-radio-circle'></i>List Sliders</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="lni lni-sprout"></i>
                </div>
                <div class="menu-title">Coupons</div>
            </a>
            <ul>
                <li> <a href="{{ route('admin.coupons.index') }}"><i class='bx bx-radio-circle'></i>List Coupons</a>
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
                <div class="menu-title">Post All</div>
            </a>
            <ul>
                <li>
                    <a href="{{ route("admin.post-cate.index") }}"><i class='bx bx-radio-circle'></i>Post Category</a>
                </li>
                <li>
                    <a href="{{ route('admin.post.index') }}"><i class='bx bx-radio-circle'></i>Post List</a>
                <li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="fa-solid fa-box-open"></i>
                </div>
                <div class="menu-title">Users</div>
            </a>
            <ul>
                <li>
                    <a href="{{ route('admin.user-management.index') }}"><i class='bx bx-radio-circle'></i>List Users</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="fa-solid fa-location-dot"></i>
                </div>
                <div class="menu-title">StoreAddress</div>
            </a>
            <ul>
                <li>
                    <a href="{{ route('admin.storeAddress.index') }}"><i class='bx bx-radio-circle'></i>List StoreAddress</a>
                </li>
            </ul>
        </li>
        <li class="menu-label">Info</li>
        <li class="">
            <a href="{{ route('admin.profile') }}" aria-expanded="false">
                <div class="parent-icon"><i class="bx bx-user-circle"></i>
                </div>
                <div class="menu-title">User Profile</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</div>
