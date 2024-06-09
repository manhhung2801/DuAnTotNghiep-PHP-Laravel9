<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>


{{-- @extends('frontend.layouts.master')

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
                        <p>Quên mật khẩu? Không có gì. Chỉ cần cho chúng tôi biết địa chỉ email của bạn và chúng tôi sẽ gửi cho bạn liên kết đặt lại mật khẩu qua email để cho phép bạn chọn địa chỉ mới.</p>
                    </div>
                    @if(session('status'))
                        <p class="alert alert-success">
                            {{ session('status') }}
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
@endsection --}}
