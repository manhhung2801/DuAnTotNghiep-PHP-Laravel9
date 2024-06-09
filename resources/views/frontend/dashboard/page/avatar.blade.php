@extends('frontend.customer.index')

@section('customer')
<div class="page account-page avatar-page mt-3">
    <div class="page-title d-block d-md-none text-center">
        <h1 class="fs-4">Ảnh đại diện</h1>
    </div>
    <div class="page-body border px-2 pt-2 pb-2">
        <div class="all_avatar_content row">
            <div class="fieldset col-md-4 text-center text-lg-start pb-2">
                <input name="uploadedFile" accept="image/jpeg, image/gif" type="file">
            </div>
            <div class="no-data col-md-4 ">Hình đại diện phải ở định dạng GIF hoặc JPEG có kích thước tối đa là 20 KB</div>
            <div class="buttons col-md-3">
                <button type="submit">Tải lên</button>
            </div>
        </div>
    </div>
</div>
@endsection