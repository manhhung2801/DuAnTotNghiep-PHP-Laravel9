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
			<p class="mb-0">Copyright © 2024. All right reserved.</p>
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
            console.log(deleteUrl);
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                if (result.isConfirmed) {

                    $.ajax({
                        type: "DELETE",
                        url: deleteUrl,
                        success: function (data) {
                            if(data.status == 'success'){
                                Swal.fire(
                                    "Deleted!",
                                    data.message,
                                    'success'
                                );

                                window.setTimeout(() => {
                                    window.location.reload();
                                }, 1500);

                            }else if(data.status == 'error'){
                                Swal.fire(
                                    "Can't Delete",
                                    data.message,
                                    'error'
                                );
                            }

                        },
                        error: function(xhr, status, error){
                            console.log(error);
                        }
                    });



                }
            });
        });
    });
</script>
@stack('scripts')
