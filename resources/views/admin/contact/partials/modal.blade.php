<!-- Modal -->
<div class="modal fade" id="contactDetails" tabindex="-1" aria-labelledby="contactDetails" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="contactDetails">Chi tiết liên hệ</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="contact" method="post">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h2>Liên Hệ</h2>
                                <div class="product-info">
                                    <table class="table table table-striped table-bordered">
                                        <tbody>
                                            <tr class="">
                                                <th scope="row">Tên người liên hệ</th>
                                                <td id="id-user" class="id"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Tên người liên hệ</th>
                                                <td id="modal_name"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Id user</th>
                                                <td id="user_id"></td>

                                            </tr>
                                            <tr>
                                                <th scope="row">Điện thoại</th>
                                                <td id="phone"></td>

                                            </tr>

                                            <tr>
                                                <th scope="row">Email</th>
                                                <td id="email"></td>

                                            </tr>
                                            <tr>
                                                <th scope="row">Nội dung</th>
                                                <td id="content"></td>

                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="m-5">
                    <button type="submit" class="btn btn-danger capnhat-lienhen" data-bs-dismiss="modal">Dã đọc</button>
                </div>
            </form>
        </div>
    </div>
</div>

