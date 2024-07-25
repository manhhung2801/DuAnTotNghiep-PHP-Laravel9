@extends('frontend.dashboard.layout')

@section('dashboar-user-content')
<div class="page account-page customer-info-page">
    <div class="page-title d-block text-center">
        <img src="{{ asset(!empty($user_image) ? "uploads/users/" . $user_image : "uploads/avatar-user.jpeg") }}" class="rounded mx-auto d-block mb-3" alt="...">
        <h1 class="fs-4">Ảnh đại diện</h1>
    </div>

    <div class="page-body border px-2 pt-2 pb-2">
        <form method="post" action="{{ route('profile.update.image') }}" enctype="multipart/form-data">
            @csrf
            <div class="all_avatar_content row">
                <div class="fieldset col-md-4 text-center text-lg-start pb-2">
                    <input name="image" type="file">
                </div>
                <div class="no-data col-md-4 ">Hình đại diện phải ở định dạng GIF hoặc JPEG có kích thước tối đa là 20 KB</div>
                <div class="buttons col-md-3">
                    <button type="submit">Tải lên</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
