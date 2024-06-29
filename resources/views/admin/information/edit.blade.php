@extends('admin.layouts.master')

@section('title', 'Cập nhật danh sách trang')

@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Danh sách trang</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
		<div class="card">
			<div class="card-header">
				<h6 class="mt-2 mb-0 text-uppercase float-start">Cập Nhật</h6>
				<a href="{{ route("admin.information.index") }}" class="btn btn-primary float-end">Quay Lại</a>
			</div>
			<div class="card-body">
				<form class="row g-3" action="{{ route("admin.information.update", $information->id) }}" method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<div class="col-md-4">
						<label for="input1" class="form-label">Tên trang</label>
						<input type="text" class="form-control" id="input1" name="name" value="{{ $information->name }}" placeholder="Nhập tên trang">
					</div>

					<div class="col-md-4">
						<label for="input1" class="form-label">Thứ hạng</label>
						<input type="number" class="form-control" name="rank" placeholder="Nhập Thứ Hạng" value="{{ $information->rank }}">
					</div>
					<div class="col-md-4">
						<label for="input9" class="form-label">Trạng thái</label>
						<select id="input9" class="form-select" name="status">
							<option {{ $information->status == 1 ? "selected" : ""  }} value="1">Hoạt động</option>
							<option {{ $information->status == 0 ? "selected" : ""  }} value="0">Không hoạt động</option>
						</select>
					</div>
					<div class="col-md-2">
						<div class="d-grid align-items-center gap-3">
							<button type="submit" class="btn btn-primary px-4">Cập Nhật</button>
						</div>
					</div>
				</form>
			</div>
		</div>
    </div>
    </div>

@endsection



