<!doctype html>
<html lang="en">


<!-- Mirrored from codervent.com/rocker/demo/vertical/auth-basic-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Mar 2024 09:45:11 GMT -->
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{asset('backend/assets/images/favicon-32x32.png')}}" type="image/png" />
	<!--plugins-->
	<link href="{{asset('backend/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
	<link href="{{asset('backend/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
	<link href="{{asset('backend/assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{asset('backend/assets/css/pace.min.css')}}" rel="stylesheet" />
	<script src="{{asset('backend/assets/js/pace.min.js')}}" t></script>
	<!-- Bootstrap CSS -->
	<link href="{{asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('backend/assets/css/bootstrap-extended.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="{{asset('backend/assets/css/app.css')}}" rel="stylesheet">
	<link href="{{asset('backend/assets/css/icons.css')}}" rel="stylesheet">
	<title>Login - Dashboard </title>
</head>

<body class="">
	<!--wrapper-->
	<div class="wrapper">
		<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col mx-auto">
						<div class="card mb-0">
							<div class="card-body">
								<div class="p-4">
									<div class="mb-3 text-center">
									<span class="fs-1 text-black fw-bold">CYBERMART</span>
									</div>
									<div class="text-center mb-4">
										<h5 class="">
										Admin </h5>
										<p class="mb-0">Xin hãy đăng nhập vào tài khoản của bạn</p>
									</div>
									<div class="form-body">
										<form method="POST" action="{{ route("admin.login.store") }}" class="row g-3">
                                            @csrf
                                            <input type="hidden" name="user_type" value="admin">
                                            <!-- Email Address -->
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Email</label>
												<input type="email" id="email" name="email" class="form-control" id="inputEmailAddress" value="{{old('email')}}" placeholder="Nhập email">
                                                @if($errors->has('email'))
                                                    <code>{{ $errors->first('email') }}</code>
                                                @endif
											</div>

                                             <!-- Password -->
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Mật khẩu</label>
												<div class="input-group" id="show_hide_password">
													<input type="password" id="password" name="password" class="form-control border-end-0" id="inputChoosePassword" placeholder="Nhập mật khẩu">
                                                    <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
												</div>
                                                    @if($errors->has('password'))
                                                        <code>{{ $errors->first('password') }}</code>
                                                    @endif
											</div>

											<div class="col-md-6">
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" id="remember_me" name="remember">
													<label class="form-check-label" for="flexSwitchCheckChecked">Ghi nhớ </label>
												</div>
											</div>
											<div class="col-md-6 text-end">	<a href="authentication-forgot-password.html">Quên mật khẩu ?</a>
											</div>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-primary">Đăng nhập</button>
												</div>
											</div>
											<!-- <div class="col-12">
												<div class="text-center ">
													<p class="mb-0">Don't have an account yet? <a href="authentication-signup.html">Sign up here</a>
													</p>
												</div>
											</div> -->
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
	</div>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="{{asset('backend/assets/js/bootstrap.bundle.min.js')}}"></script>
	<!--plugins-->
	<script src="{{asset('backend/assets/js/jquery.min.js')}}"></script>
	<script src="{{asset('backend/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
	<script src="{{asset('backend/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
	<script src="{{asset('backend/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
	<!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
	<!--app JS-->
	<script src="{{asset('backend/assets/js/app.js')}}"></script>
</body>


<!-- Mirrored from codervent.com/rocker/demo/vertical/auth-basic-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Mar 2024 09:45:12 GMT -->
</html>
