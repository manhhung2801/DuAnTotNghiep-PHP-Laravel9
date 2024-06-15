@extends('frontend.dashboard.layout')

@section('dashboar-user-content')
<div class="page account-page customer-info-page">
    <div class="page-title d-block text-center">
        <h1 class="fs-4">Đổi mật khẩu</h1>
    </div>
    @if (session('status') === 'password-updated')
    <p class="alert alert-success">
        {{ session('status') }}
    </p>
    @endif

    <div class="page-body border px-4 pt-2">
        <form method="post" action="{{ route('password.update') }}">
            @csrf
            @method('put')
            <div class="fieldset">
                <label class="luu_y mb-3"> Lưu ý: Mật khẩu phải có tối thiểu 8 ký tự bao gồm chữ, số và
                    các ký tự đặc biệt </label>
                <div class="col mb-3">
                    <label for="current_password" class="">Mật khẩu cũ:</label>
                    <input id="current_password" name="current_password" type="password" class="form-control">
                    <span class="text-danger">{{ $errors->updatePassword->first('current_password') }}</span>
                </div>
                <div class="col mb-3">
                    <label for="password">Mật khẩu mới:</label>
                    <input id="password" name="password" type="password" class="form-control">
                    <span class="text-danger">{{ $errors->updatePassword->first('password') }}</span>
                </div>
                <div class="col mb-3">
                    <label for="password_confirmation">Xác nhận mật khẩu:</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" class="form-control">
                    <span class="text-danger">{{ $errors->updatePassword->first('password_confirmation') }}</span>
                </div>
                <div class="buttons mb-3">
                    <button type="submit">Đổi mật khẩu</button>
                </div>
            </div>
        </form>
    </div>

    <div class="page-title d-block text-center mt-4">
        <h1 class="fs-4">Xoá tài khoản</h1>
    </div>

    <div class="page-body border px-4 pt-2 mt-4">
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                Are you sure you want to delete your account?
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.
            </p>
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="password" class="sr-only">{{ __('Password') }}</label>
                    <input id="password" name="password" type="password" class="form-control" placeholder="{{ __('Password') }}">
                    <span class="text-danger">{{ $errors->userDeletion->first('password') }}</span>
                </div>

                <div class="col-md-12 mb-3">
                    <button type="submit" class="btn btn-danger">Xoá tài khoản</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
