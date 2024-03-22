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

