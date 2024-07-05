@extends('admin.layouts.master')

@section('title', 'Dashboard Profile')

@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Hồ sơ</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{Auth::user()->name}}</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="container">
            <div class="main-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="{{asset('uploads/'.Auth::user()->image)}}" alt="Admin" class="rounded-circle p-1 bg-primary" width="200" height="200">
                                    <div class="mt-3">
                                        <h4>{{Auth::user()->name}}</h4>
                                        <p class="text-secondary mb-1">{{Auth::user()->email}}</p>
                                        <p class="text-muted font-size-sm">Quận 12, Thành Phố Hồ chí Minh</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{route('admin.profile.update')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <h5 class="d-flex align-items-center mb-4">Cập nhật hồ sơ</h5>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Hình ảnh</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="file" class="form-control" name="image" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Họa và tên</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" class="form-control" name="name" value="{{Auth::user()->name}}" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Email</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" class="form-control" name="email" value="{{Auth::user()->email}}" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9 text-secondary">
                                            <button type="submit" class="btn btn-primary px-4">Cập nhật</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-sm-12">
                                <div class="card">

                                    <form action="{{route('admin.password.update')}}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="card-body">
                                            <h5 class="d-flex align-items-center mb-4">Cập nhật lại mật khẩu</h5>
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Mật khẩu hiện tại</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <input type="password" class="form-control" name="current_password" placeholder="Mật khẩu hiện tại" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Mật khẩu mới</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <input type="password" class="form-control" name="password"  placeholder="Mật khẩu mới"/>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Xác nhận mật khẩu </h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <input type="password" class="form-control" name="password_confirmation" placeholder="Xác nhận mật khẩu" />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-3"></div>
                                                <div class="col-sm-9 text-secondary">
                                                    <button type="submit" class="btn btn-primary px-4">cập nhật</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

