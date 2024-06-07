@extends('frontend.customer.index')

@section('customer')
<div class="page account-page customer-info-page">
    <div class="page-title d-block d-md-none text-center pb-2">
        <h1 class="fs-4 ">Tài khoản của tôi - Thêm địa chỉ mới</h1>
    </div>
    <div class="page-body border px-4 pt-2">
        <form method="post" action="#">
            <div class="fieldset">
                <div class="col mb-3">
                    <label for="hoten">Tên:</label>
                    <input type="text" class="form-control" id="hoten" name="fullname">
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="phone">Số điện thoại:</label>
                        <input type="number" class="form-control form-control-lg" id="phone" name="phone_number">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email">
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
                    <button type="submit">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>


<!-- Trường hợp không có địa chỉ -->
<!-- <div class="page account-page address-list-page">
    <div class="page-body">
        <div class="no-data text-center text-lg-start">Không có địa chỉ</div>
        <div class="add-button">
            <button type="button" class="button-1 add-address-button">Thêm mới</button>
        </div>
    </div>
</div> -->
@endsection