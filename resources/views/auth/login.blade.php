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
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label p-0">Tên đăng nhập:</label>
                            <input type="email" class="form-control" type="email" name="email" value="{{ old('email') }}" maxlength="25" ng-model="user">
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
                            <input type="password" class="form-control" id="password" ng-model="pass" name="password">
                            @if ($errors->any())
                                <span class="text-danger">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </span>
                            @endif
                        </div>
                        <!-- Remember Me -->
                        <div class="mb-3 form-check d-flex justify-content-sm-between">
                            <div class="remember_me">
                                <input type="checkbox" name="remember" class="form-check-input" id="remember_me">
                                <label class="form-check-label" for="exampleCheck1">Nhớ mật khẩu</label>
                            </div>
                            <div class="link">
                                @if (Route::has('password.request'))
                                    <a class="text-decoration-none" href="{{ route('password.request') }}">Quên mật khẩu</a>
                                @endif
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 py-3">Đăng nhập</button>
                        <div class="form-link">
                            <span>Bạn chưa có tài khoảng? <a class="text-decoration-none" href="{{ route("register") }}">Tạo tài
                                    khoảng ngay</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
