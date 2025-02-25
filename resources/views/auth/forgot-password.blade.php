
@extends('frontend.layouts.master')

@section('content')
<div class="wrapper-login-page container">
    <div class="page-body">
        <div class="all_content-login my-5">
            <div class="login-block row px-4 pt-4 pb-5">
                <div class="login-form-wrapper col-md-7 col-12">
                    <img src="https://shopdunk.com/images/uploaded/banner/TND_M402_010%201.jpeg" class="d-block w-100" alt="img">
                </div>
                <div class="register-block col-md-5 col-12">
                    <div class="page-title">
                        <p>Quên mật khẩu? Không có gì. Chỉ cần cho chúng tôi biết địa chỉ email của bạn và chúng tôi sẽ gửi cho bạn liên kết đặt lại mật khẩu qua email để cho phép bạn chọn địa chỉ mới.</p>
                    </div>
                    @if (session('status') == 'reset-password')
                        <p class="alert alert-success">
                            Chúng tôi đã gửi email liên kết đặt lại mật khẩu của bạn!
                        </p>
                    @endif
                    <form method="POST" action="{{  route('password.email') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label p-0">Email:</label>
                            <!-- Email Address -->
                            <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" />
                            <span class="text-danger">{{ $errors->first("email") }}</span>

                        </div>
                        <button type="submit" class="btn btn-primary w-100 py-3">Email Liên kết đặt lại mật khẩu</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
