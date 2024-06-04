@extends('frontend.customer.index')

@section('customer')
<div class="page account-page cl-your-referral-info mt-3">
    <div class="page-body border px-3 pt-2">
        <div class="copy-link">
            <h3>Mã giới thiệu của bạn:</h3>
            <p class="no-data">Mã giới thiệu của bạn có thể là Email, Số điện thoại hoặc User name. Bạn có thể xem danh sách người đã giới thiệu theo các cấp bên dưới đây.</p>
            <div class="referral-info col-md-6">
                <div class="input-group mb-3 d-flex">
                    <input type="text" class="form-control no-data copy-link-input " value="phamduykhang11a2@gmail.com" readonly>
                    <button type="button" class="input-group-text copy-link-button" onclick="copyToClipboard(this)"><i class="fa-solid fa-copy"></i></button>
                </div>
            </div>
            <div class="referral-info col-md-6">
                <div class="input-group mb-3  d-flex">
                    <input type="text" class="form-control no-data copy-link-input" value="0905263041" readonly>
                    <button type="button" class="input-group-text copy-link-button" onclick="copyToClipboard(this)"><i class="fa-solid fa-copy"></i></button>
                </div>
            </div>
            <div class="referral-info col-md-6">
                <div class="input-group mb-3  d-flex">
                    <input type="text" class="form-control no-data copy-link-input" value="khangpham" readonly>
                    <button type="button" class="input-group-text copy-link-button" onclick="copyToClipboard(this)"><i class="fa-solid fa-copy"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('script')
<script type="text/javascript">
    function copyToClipboard(button) {
        const inputField = button.previousElementSibling;
        const text = inputField.value;
        navigator.clipboard.writeText(text);
        // 
        button.textContent = 'Copied';
        button.classList.add('copied');

    }
</script>
@endpush