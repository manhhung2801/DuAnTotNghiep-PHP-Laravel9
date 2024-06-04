@extends('frontend.layouts.master')

@section('content')
<div class="wrapper-login-page container">
    <div class="page-body">
        <div class="all_content-login my-5">
            <div class="login-block row px-4 pt-4 pb-5">
                <div class="login-form-wrapper col-7">
                    <img src="https://shopdunk.com/images/uploaded/banner/TND_M402_010%201.jpeg" class="d-block w-100" alt="img">
                </div>
                <div class="register-block col-5">
                    <div class="page-title">
                        <h4>Đăng nhập</h4>
                    </div>
                    <form name="frmLogin">
                        <div class="mb-3">
                            <label for="tendangnhap" class="form-label p-0">Tên đăng nhập:</label>
                            <input type="text" class="form-control" id="tendangnhap" maxlength="25" ng-model="user" name="txtUser" required>
                            <span class="text-danger" ng-show="frmLogin.txtUser.$invalid">Vui lòng nhập họ tên</span>
                        </div>
                        <div class="mb-3">
                            <label for="matkhau" class="form-label p-0">Mật khẩu:</label>
                            <input type="password" class="form-control" id="matkhau" ng-model="pass" name="txtPass" required>
                            <span class="text-danger" ng-show="frmLogin.txtPass.$invalid">Nhập mật khẩu</span>
                        </div>
                        <div class="mb-3 form-check d-flex justify-content-sm-between">
                            <div class="checkbox">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Nhớ mật khẩu</label>
                            </div>
                            <div class="link">
                                <a class="text-decoration-none" href="#">Quên mật khẩu</a>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 py-3">Đăng nhập</button>
                        <div class="form-link">
                            <span>Bạn chưa có tài khoảng? <a class="text-decoration-none" href="#!sign-in">Tạo tài
                                    khoảng ngay</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection