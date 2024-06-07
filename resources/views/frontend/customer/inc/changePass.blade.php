@extends('frontend.customer.index')

@section('customer')
<div class="page account-page customer-info-page">
    <div class="page-title d-block d-md-none text-center">
        <h1 class="fs-4">Đổi mật khẩu</h1>
    </div>
    <div class="page-body border px-4 pt-2">
        <form method="post" action="#">
            <div class="fieldset">
                <label class="luu_y mb-3"> Lưu ý: Mật khẩu phải có tối thiểu 8 ký tự bao gồm chữ, số và
                    các ký tự đặc biệt </label>
                <div class="col mb-3">
                    <label for="OldPassword" class="">Mật khẩu cũ:</label>
                    <input type="password" class="form-control">
                </div>
                <div class="col mb-3">
                    <label for="NewPassword">Mật khẩu mới:</label>
                    <input type="password" class="form-control">
                </div>
                <div class="col mb-3">
                    <label for="ConfirmNewPassword">Xác nhận mật khẩu:</label>
                    <input type="password" class="form-control">
                </div>
                <div class="buttons mb-3">
                    <button type="submit">Đổi mật khẩu</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection