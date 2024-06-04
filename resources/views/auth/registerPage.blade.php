@extends('frontend.layouts.master')

@section('content')
<div class="wrapper-signin-page container">
    <div class="page-body">
        <div class="all_content-signin my-5">
            <div class="signin-block row px-4 pt-4 pb-5">
                <div class="signin-form-wrapper col-7">
                    <img src="https://shopdunk.com/images/uploaded/banner/TND_M402_010%201.jpeg" class="d-block w-100" alt="img">
                </div>
                <div class="register-block col-5">
                    <div class="page-title">
                        <h4>Đăng ký</h4>
                    </div>
                    <form name="frmSign">
                        <div class="mb-3">
                            <label for="magioithieu" class="form-label p-0">Mã giới thiệu</label>
                            <input type="text" class="form-control" id="magioithieu">
                        </div>
                        <div class="mb-3">
                            <label for="hoten" class="form-label p-0">Họ, tên:</label>
                            <input type="text" class="form-control" id="hoten">
                        </div>
                        <div class="mb-3">
                            <label class="form-label me-4">Giới tính:</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="gentle" type="radio" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">Nam</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="gentle" type="radio" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2">Nữ</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label p-0">Ngày sinh</label>
                            <input type="date" class="form-control" id="date">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label p-0">Email:</label>
                            <input type="email" class="form-control" id="email" ng-model="email" name="txtemail" required>
                            <span class="text-danger" ng-show="frmSign.txtemail.$invalid">Vui lòng nhập email đúng định dạng</span>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label p-0">Điện thoại:</label>
                            <input type="number" class="form-control" id="phone" ng-model="phone" name="txtPhone" required>
                            <span class="text-danger" ng-show="frmSign.txtPhone.$invalid">Vui lòng nhập số điện thoại</span>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label p-0">Tên đăng nhập:</label>
                            <input type="text" class="form-control" id="phone" ng-model="User" name="txtUser" required>
                            <span class="text-danger" ng-show="frmSign.txtUser.$invalid">Vui lòng nhập Tên đăng nhập</span>
                        </div>
                        <div class="mb-3">
                            <label for="matkhau" class="form-label p-0">Mật khẩu:</label>
                            <input type="password" class="form-control" id="matkhau" ng-model="pass1" name="txtPass1" required>
                            <span class="text-danger" ng-show="frmSign.txtPass1.$invalid">Vui lòng nhập mật khẩu</span>

                            <div id="passwordHelpBlock" class="form-text">
                                Lưu ý: Mật khẩu phải có tối thiểu 8 ký tự bao gồm chữ, số và các ký tự đặc biệt
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="rematkhau" class="form-label p-0">Xác nhận mật khẩu:</label>
                            <input type="password" class="form-control" id="rematkhau" ng-model="pass2" name="txtPass2" required>
                            <span class="text-danger" ng-show="frmSign.txtPass2.$invalid">Vui lòng nhập mật khẩu</span>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 py-3">Đăng ký</button>
                        <div class="form-link">
                            <span>Bạn đã có tài khoảng? <a class="text-decoration-none" href="#">Đăng nhập
                                    ngay</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection