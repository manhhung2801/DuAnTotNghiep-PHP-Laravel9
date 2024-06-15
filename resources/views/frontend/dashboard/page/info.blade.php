@extends('frontend.dashboard.layout')

@section('dashboar-user-content')
<div class="page account-page customer-info-page">
    <div class="page-title d-block text-center">
        <h1 class="fs-4">Tài khoản của tôi</h1>
    </div>
    @if (session('status') === 'password-updated')
    <p class="alert alert-success">
        {{ session('status') }}
    </p>
    @endif

    <div class="page-body border px-4 pt-2">
        <form method="post" action="{{ route('profile.update') }}">
            @csrf
            @method('patch')
            <div class="fieldset">

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="name">Tên:</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}">
                        <span class="text-danger">{{ $errors->first("name") }}</span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email"  value="{{ Auth::user()->email }}">
                        <span class="text-danger">{{ $errors->first("email") }}</span>
                    </div>
                </div>
                <hr>
                <div class="buttons mb-3">
                    <button type="submit">Update</button>
                </div>
            </div>
        </form>
    </div>
    <div class="page-body border px-4 pt-2 mt-5">
        <form method="post" action="#">
            <div class="fieldset">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="phone">Số điện thoại:</label>
                        <input type="number" class="form-control form-control-lg" id="phone" name="phone_number">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="Address_CountryId">Quốc gia:</label>
                        <select class="form-select">
                            <option value="0">Chọn quốc gia</option>
                            <option value="242">Vietnam</option>
                            <option value="39">Cambodia</option>
                            <option value="221">Thailand</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="Address_StateProvinceId">Tỉnh, thành phố:</label>
                        <select class="form-select">
                            <option value="0">Chọn tỉnh, thành phố</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="Address_County">Quận, huyện:</label>
                        <input type="text" id="Address_County" name="Address.County" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="Address_City">Phường, xã:</label>
                        <input type="text" id="Address_City" name="Address.City" class="form-control">
                    </div>
                </div>
                <div class="col mb-3">
                    <label for="Address_Address1">Địa chỉ cụ thể:</label>
                    <input type="text" id="Address_Address1" name="Address.Address1" class="form-control">
                </div>
                <hr>
                <div class="buttons mb-3">
                    <button type="submit">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
