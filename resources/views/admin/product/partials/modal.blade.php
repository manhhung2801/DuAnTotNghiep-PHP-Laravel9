<!-- Modal -->
<div class="modal fade" id="productDetails" tabindex="-1" aria-labelledby="productDetails" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="productDetails">Chi tiết sản phẩm</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="modal-product-img">
                                <img id="modal_img" alt="modal-img">
                            </div>
                            <div class="modal-img-gallery d-flex justify-content-center">
                                <div id="modal_gallery">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <h2>Thông số </h2>
                            <div class="product-info">
                                <table class="table table table-striped table-bordered">
                                    <tbody>
                                        <tr>
                                            <th scope="row">ID</th>
                                            <td id="modal_id"></td>
                                            <th scope="row">SKU</th>
                                            <td>SP145</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Tên Sản phẩm</th>
                                            <td id="modal_name"></td>
                                            <th scope="row">Slug</th>
                                            <td id="modal_slug"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Số lượng</th>
                                            <td id="modal_quantity"></td>
                                            <th scope="row">Cân nặng</th>
                                            <td id="modal_weight"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Giá</th>
                                            <td id="modal_price"></td>
                                            <th scope="row">Giảm giá</th>
                                            <td id="modal_offer_price"></td>
                                        </tr>
                                        <tr id="variant_item">
                                        </tr>
                                        <tr>
                                            <th scope="row">Ngày bắt đầu giảm</th>
                                            <td id="modal_offer_start_date"></td>
                                            <th scope="row">Ngày kết thúc giảm</th>
                                            <td id="modal_offer_end_date"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Kiểu sản phẩm</th>
                                            <td id="modal_product_type"></td>
                                            <th scope="row">Lượt xem</th>
                                            <td id="modal_views"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Danh mục</th>
                                            <td id="modal_category"></td>
                                            <th scope="row">Danh mục phụ</th>
                                            <td id="modal_sub_category"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Danh mục con</th>
                                            <td id="modal_child_category"></td>
                                            <th scope="row">Trạng thái</th>
                                            <td id="modal_status"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Video Link</th>
                                            <td id="modal_video_link"></td>
                                            <th scope="row">SEO title</th>
                                            <td id="modal_seo_title" colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">SEO meta</th>
                                            <td class="text_description" id="modal_seo_description" colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Mô tả ngắn</th>
                                            <td class="text_description" id="modal_short_description" colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Mô tả</th>
                                            <td class="text_description" id="modal_long_description" colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Ngày tạo</th>
                                            <td id="modal_created_date" colspan="3"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>