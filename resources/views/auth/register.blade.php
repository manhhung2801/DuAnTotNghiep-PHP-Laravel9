@extends('frontend.layouts.master')

@section('content')
<div class="wrapper-signin-page container">
    <div class="page-body">
        <div class="all_content-signin my-5">
            <div class="signin-block row px-4 pt-4 pb-5">
                <div class="signin-form-wrapper col-md-7 col-12">
                    <img src="https://shopdunk.com/images/uploaded/banner/TND_M402_010%201.jpeg" class="d-block w-100" alt="img">
                </div>
                <div class="register-block col-md-5 col-12">
                    <div class="page-title">
                        <h4>Đăng ký</h4>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Name -->

                        <div class="mb-3">
                            <label for="name" class="form-label p-0">Họ, tên:</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control" id="name">
                        </div>
                        <!-- Email Address -->
                        <div class="mb-3">
                            <label for="email" class="form-label p-0">Email:</label>
                            <input type="email" class="form-control" id="email" ng-model="email" value="{{ old('email') }}" name="email">
                            @if ($errors->any())
                                <span class="text-danger">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                            @endif
                        </div>
                         <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label p-0">Mật khẩu:</label>
                            <input type="password" class="form-control" id="password" name="password">
                            @if ($errors->any())
                                <span class="text-danger">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </span>
                            @endif
                            <div id="passwordHelpBlock" class="form-text">
                                Lưu ý: Mật khẩu phải có tối thiểu 8 ký tự bao gồm chữ, số và các ký tự đặc biệt
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label p-0">Xác nhận mật khẩu:</label>
                            <input type="password" class="form-control" id="password_confirmation" ng-model="pass2" name="password_confirmation">
                            @if ($errors->any())
                                <span class="text-danger">
                                    @error('password_confirmation')
                                        {{ $message }}
                                    @enderror
                                </span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary w-100 py-3">Đăng ký</button>
                        <div class="form-link">
                            <span>Bạn đã có tài khoảng? <a class="text-decoration-none" href="{{ route("login") }}">Đăng nhập
                                    ngay</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
