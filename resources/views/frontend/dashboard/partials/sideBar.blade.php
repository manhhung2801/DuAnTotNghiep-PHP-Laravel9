<nav class="navbar navbar-expand-lg">
    <div class="container-fluid p-0">
        <button class="d-lg-none border-0 button-navbar-mobie ms-3 py-2 fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="side-2 collapse navbar-collapse " id="navbarNavDropdown">
            <div class="list-group listbox">
                <div class="slidebar_list-tem ">
                    <a href="{{ route("dashboard") }}" class="active list-group-item list-group-item-action border-0 fw-semibold"><i class="me-2 fa-solid fa-user "></i> Thông tin tài khoản</a>
                </div>
                <div class="slidebar_list-tem">
                    <a href="{{ route("order.index") }}" class="inactive list-group-item list-group-item-action border-0 fw-semibold"><i class="me-2 fa-sharp fa-solid fa-ballot-check"></i> Đơn đặt hàng</a>
                </div>
                <div class="slidebar_list-tem">
                    <a href="{{ route('form.password.update') }}" class="inactive list-group-item list-group-item-action border-0 fw-semibold"><i class="me-2 fa-solid fa-lock"></i> Đổi mật khẩu - Delete Accout</a>
                </div>
                <div class="slidebar_list-tem">
                    <a href="{{ route("profile.update.image.show") }}" class="inactive list-group-item list-group-item-action border-0 fw-semibold"><i class="me-2 fa-solid fa-image"></i> Ảnh đại diện</a>
                </div>
                {{-- <div class="slidebar_list-tem">
                    <a href="#" class="inactive list-group-item list-group-item-action border-0 fw-semibold"><i class="me-2 fa-solid fa-clock-rotate-left"></i> Lịch sử đánh giá sản
                        phẩm</a>
                </div> --}}
            </div>
        </div>
    </div>
</nav>
