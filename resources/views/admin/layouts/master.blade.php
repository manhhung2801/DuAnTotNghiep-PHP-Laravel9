<!-- Start Header -->
@include('admin.layouts.header')
<!-- End Header -->

<!-- start wrapper-->
<div class="wrapper">
    <!--sidebar wrapper -->
    @include('admin.layouts.sidebar')
    <!--end sidebar wrapper -->

    <!--start navbar -->
    @include('admin.layouts.navbar')
    <!--end navbar -->

    <!-- Start Main wrapper -->
    <div class="page-wrapper">
        @yield('content')
    </div>
    <!-- End Main wrapper -->

    <!--start overlay-->
    <div class="overlay toggle-icon"></div>
    <!--end overlay-->
    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->
    <footer class="page-footer">
        <p class="mb-0">CyberMart</p>
    </footer>
</div>
<!-- end wrapper-->

<!-- Start Footer wrapper-->
@include('admin.layouts.footer')
<!-- End Footer wrapper-->
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('body').on('click', '.delete-item', function() {
            event.preventDefault();

            let deleteUrl = $(this).attr('href');
            let row = $(this).closest('tr');
            console.log(deleteUrl);
            Swal.fire({
                title: "Bạn có chắc không?",
                text: "Bạn sẽ không thể hoàn nguyên điều này!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Có, xóa nó đi!"
            }).then((result) => {
                if (result.isConfirmed) {

                    $.ajax({
                        type: "DELETE",
                        url: deleteUrl,
                        success: function(data) {
                            if (data.status == 'success') {
                                Swal.fire(
                                    "Xoá!",
                                    data.message,
                                    'success'
                                );

                                row.remove();

                            } else if (data.status == 'error') {
                                Swal.fire(
                                    "Không thể xóa",
                                    data.message,
                                    'error'
                                );
                            }

                        },
                        error: function(xhr, status, error) {
                            console.log(error);
                        }
                    });



                }
            });
        });
        $('body').on('click', '.restoreTrash-item', function() {
            event.preventDefault();
            let url = $(this).attr('href');
            // $(this) là thẻ con td closest('tr') có nhiệm vụ lấy thẻ cha gần nhất điều kiện là thẻ tr
            let row = $(this).closest('tr');
            Swal.fire({
                title: "Bạn có chắc không?",
                text: "Bạn sẽ không thể hoàn nguyên điều này!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Có xoá nó đi!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "PATCH",
                        url: url,
                        success: function(data) {
                            if (data.status == 'success') {
                                Swal.fire(
                                    "Khôi phục thành công!",
                                    data.message,
                                    'success'
                                );
                                row.remove();
                            } else if (data.status == 'error') {
                                Swal.fire(
                                    "Không thể xóa",
                                    data.message,
                                    'error'
                                );
                            }
                        },
                        error: function(xhr, status, error) {
                            console.log(error);
                        }
                    });
                }
            });
        });
        $('body').off('click', '.buttonSearch').on('click', '.buttonSearch', function(e) {
            var querySearch = $('.querySearch').val()
            if (querySearch === null || querySearch === '') {
                e.preventDefault()
                alert('Vui lòng nhập kí tự tìm kiếm!')
            }
        })
    });
</script>
@stack('scripts')

