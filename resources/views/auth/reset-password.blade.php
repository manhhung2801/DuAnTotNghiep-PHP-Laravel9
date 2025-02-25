
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
                        <h4>Đặt lại mật khẩu</h4>
                    </div>
                    <form method="POST" action="{{ route('password.store') }}">
                        @csrf
                        <!-- Password Reset Token -->
                        <input type="hidden" name="token" value="{{ $request->route('token') }}" action="{{ route('password.store') }}">
                        <!-- Name -->

                        <!-- Email Address -->
                        <div class="mb-3">
                            <label for="email" class="form-label p-0">Email:</label>
                            <input type="email" class="form-control" id="email" value="{{ old('email', $request->email) }}" name="email">
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
                        <!-- Confirm Password -->
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
                        <button type="submit" class="btn btn-primary w-100 py-3">Đặt lại mật khẩu</button>
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
