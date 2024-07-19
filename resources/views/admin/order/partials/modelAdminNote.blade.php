<form class="formAdminNote" action="">
    @csrf @method('PATCH')
    <div class="modal fade" id="admin__note_{{ $order->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Quản trị ghi chú
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <textarea class="admin_note_text form-control" id="admin_note__input">{{ $order->admin_note }}</textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button data-url="{{ route('admin.order.update', $order->id) }}" type="button"
                        class="change-admin-note btn btn-primary">Lưu thay đổi</button>
                </div>
            </div>
        </div>
    </div>
</form>
