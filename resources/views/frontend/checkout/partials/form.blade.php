
<div class="form-group my-3">
    <input id="email_checkout" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>
    <div class="invalid-feedback invalid-email">* Email không hợp lệ!</div>
</div>
<div class="form-group my-3">
    <input type="text" class="form-control" placeholder="Họ và tên" name="name" value="{{ old('name') }}"
        required>
    <div class="invalid-feedback">* Bạn chưa nhập tên !!!</div>
</div>
<div class="input-group my-3">
    <input id="phone_checkout" type="text" class="form-control" placeholder="Số điện thoại (tùy chọn)" name="phone"
        value="{{ old('phone') }}" required>
    <div class="invalid-feedback invalid-phone">* Bạn chưa nhập số điện thoại!!! </div>
</div>
<div class="form-group my-3">
    <input id="address" type="text" class="form-control" placeholder="Địa chỉ (tùy chọn)" name="address"
        value="{{ old('address') }}">
</div>
<div class="form-group my-3">
    <select id="provinces" name="provinces" class="form-control" required>
        <option value="">Chọn tỉnh thành</option>
    </select>
    <div class="invalid-feedback">* Vui lòng chọn Tỉnh thành</div>
</div>
<div class="form-group my-3">
    <select id="districts" name="districts" class="form-control" required>
        <option value="">Chọn quận huyện</option>
    </select>
    <div class="invalid-feedback">* Vui lòng chọn Quận huyện</div>
</div>
<div class="form-group my-3">
    <select id="wards" name="wards" class="form-control" required>
        <option value="">Chọn xã phường</option>
    </select>
    <div class="invalid-feedback">* Vui lòng chọn xã phường</div>
</div>
<div class="form-group">
    <textarea class="form-control" name="user_note" value="{{ old('note_user') }}" rows="3"
        placeholder="Ghi chú (tùy chọn)" formnovalidate></textarea>
</div>
