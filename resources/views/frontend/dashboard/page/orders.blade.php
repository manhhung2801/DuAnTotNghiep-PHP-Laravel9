@extends('frontend.layouts.master')

@section('styles')
    <style>
        .gradient-custom {
            /* fallback for old browsers */
            background: #FFF6E9;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to top left, rgb(190, 219, 220), rgba(246, 243, 255, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to top left, rgb(190, 219, 220), rgba(246, 243, 255, 1))
        }
    </style>
@endsection

@section('content')
<section class="h-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <h1 class="fs-4">Đơn đặt hàng</h1>
            <div class="page account-page customer-info-page mt-3">
                    <table class="table align-middle mb-0 bg-white table-striped justify-content-center">
                        <thead class="bg-light">
                        <tr class="table-dark">
                            <th>Mã đơn hàng</th>
                            <th>Thông tin người nhận</th>
                            <th>Phương thanh toán</th>
                            <th>Ghi chú</th>
                            <th>Trạng thái</th>
                            <th>Tổng tiền</th>
                            <th>Chi tiết</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                            <p class="fw-bold mb
                            1">#123456
                            </p>
                            <td>
                            <div class="d-flex align-items-center">
                                <img
                                    src="https://mdbootstrap.com/img/new/avatars/8.jpg"
                                    alt=""
                                    style="width: 45px; height: 45px"
                                    class="rounded-circle"
                                    />
                                <div class="ms-3">
                                <p class="fw-bold mb-1">Hoang Hoa</p>
                                <p class="text-muted mb-0">SĐT: 09994492323</p>
                                <p class="text-muted mb-0">Đường 22, Tam Bình, TP.Thủ Đức,TP.Hồ Chí Minh</p>
                                </div>
                            </div>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">Đã thanh toán</p>
                            </td>
                            <td>
                            <p class="fw-normal mb-1">Đấm nhau với shipper</p>
                            </td>
                            <td>
                            <p><span class="badge bg-success">Đã hoàn thành</span></p>
                            <p><em>2024-07-22 19:23:27</em></p>
                            </td>
                            <td>20.000.000VNĐ</td>
                            <td>
                            <button type="button" class="btn btn-warning btn-sm btn-rounded">
                                Xem
                            </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p class="fw-bold mb
                            1">#123434
                            </p>
                            <td>
                            <div class="d-flex align-items-center">
                                <img
                                    src="https://mdbootstrap.com/img/new/avatars/8.jpg"
                                    alt=""
                                    style="width: 45px; height: 45px"
                                    class="rounded-circle"
                                    />
                                <div class="ms-3">
                                <p class="fw-bold mb-1">Hoang Hoa</p>
                                <p class="text-muted mb-0">SĐT: 09994492323</p>
                                <p class="text-muted mb-0">Đường 22, Tam Bình, TP.Thủ Đức,TP.Hồ Chí Minh</p>
                                </div>
                            </div>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">Thanh toán khi nhận hàng</p>
                                <p><em>(Miễn phí giao hàng)</em></p>
                            </td>
                            <td>
                            <p class="fw-normal mb-1">Đấm nhau với shipper</p>
                            </td>
                            <td>
                            <p><span class="badge bg-danger">Đã huỷ</span></p>
                            <p><em>2024-07-22 19:23:27</em></p>
                            <p><em>2024-07-22 19:23:27</em></p>
                            </td>
                            <td>20.000.000VNĐ</td>
                            <td>
                            <button type="button" class="btn btn-warning btn-sm btn-rounded">
                                Xem
                            </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p class="fw-bold mb
                            1">#123434
                            </p>
                            <td>
                            <div class="d-flex align-items-center">
                                <img
                                    src="https://mdbootstrap.com/img/new/avatars/8.jpg"
                                    alt=""
                                    style="width: 45px; height: 45px"
                                    class="rounded-circle"
                                    />
                                <div class="ms-3">
                                <p class="fw-bold mb-1">Hoang Hoa</p>
                                <p class="text-muted mb-0">SĐT: 09994492323</p>
                                <p class="text-muted mb-0">Đường 22, Tam Bình, TP.Thủ Đức,TP.Hồ Chí Minh</p>
                                </div>
                            </div>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">Thanh toán khi nhận hàng</p>
                                <p><em>(Miễn phí giao hàng)</em></p>
                            </td>
                            <td>
                            <p class="fw-normal mb-1">Đấm nhau với shipper</p>
                            </td>
                            <td>
                            <p><span class="badge bg-secondary">Chờ xác nhận</span></p>
                            <button type="button" class="btn-outline-secondary border border-2 p-1">Chờ xác nhận</button>
                            <p><em>2024-07-22 19:23:27</em></p>
                            </td>
                            <td>20.000.000VNĐ</td>
                            <td>
                            <button type="button" class="btn btn-warning btn-sm btn-rounded">
                                Xem
                            </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>

            </div>
        </div>
    </div>
</section>

@endsection
