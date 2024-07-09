@if (!empty($product->specifications))
<div class="specifications">
    <div class="title">Thông số kỹ thuật</div>
   {!!$product->specifications!!}
</div>
<div class="mb-3 mt-2">
    <div class="text-center specifications-button-show ">
        <button type="button" class="btn text-white rounded-3 border specifications-button"
            data-bs-toggle="modal" data-bs-target="#exampleModal">
            Xem cấu hình chi tiết <i class="fas fa-cogs mx-2"></i>
        </button>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Thông số kỹ thuật</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                   {!!$product->specifications!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endif