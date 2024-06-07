@extends('admin.layouts.master')

@section('title', 'List Categories')

@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Users</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">List Users</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-header">
                <div class="action_start float-start d-flex">
                    <h6 class="mt-2 mb-0 text-uppercase float-start">Category Listing</h6>
                    <div class="form-search ms-2">
                        <form action="" method="get">
                            <div class="input-group">
                                <input type="text" value="{{ Request::get('keyword') }}" name="keyword" class="form-control rounded-start-5 focus-ring focus-ring-light" placeholder="Tìm kiếm">
                                <button class="btn btn-outline-primary rounded-end-5" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                        </form>
                    </div>
                    <a href="{{ route("admin.user-management.index") }}" class="me-2 btn btn-success float-end ms-2"><i class="fa-solid fa-rotate-left fs-6"></i>Reset</a>
                </div>
             
            </div>
            <div class="card-header">
                <h6 class="mt-2 mb-0 text-uppercase float-start">List Users</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Role Admin</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>
                                        <img src="{{asset('uploads/'. ($user->image == "") ? "uploads/avatar-user.jpeg" : $user->image )}}" alt="" width="50px" height="50px">
                                    </td>
                                    <td>
                                        <div class="form-check form-switch form-check-success">
                                            @if($user->role == "admin")
                                                <input class="form-check-input change-role" type="checkbox" role="switch" data-idrole="{{ $user->id }}" id="flexSwitchCheckSuccess" checked>
                                            @elseif($user->role == "user")
                                                <input class="form-check-input change-role" type="checkbox" role="switch" data-idrole="{{ $user->id }}" id="flexSwitchCheckSuccess">
                                        @endif
                                        </div>
                                    </td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <div class="form-check form-switch form-check-success">
                                            @if($user->status == "active")
                                                <input class="form-check-input change-status" type="checkbox" role="switch" data-id="{{ $user->id }}" id="flexSwitchCheckSuccess" checked>
                                            @elseif($user->status == "inactive")
                                                <input class="form-check-input change-status" type="checkbox" role="switch" data-id="{{ $user->id }}" id="flexSwitchCheckSuccess">
                                            @endif
                                        </div>
                                    </td>
                                    <td>
                                        <a class="btn btn-primary" href=""><i class="fa-solid fa-pen fs-6 text-light"></i>Detail</a>
                                        <a class="btn btn-danger delete-item" href="{{ route("admin.user-management.destroy", $user->id) }}"><i class="fa-solid fa-trash fs-6"></i>Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            
                        </tfoot>
                    </table>
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        // change role account user
        $('body').off('click', '.change-role').on('click', '.change-role', function() {
            let isChecked = $(this).is(':checked');
            let id = $(this).data('idrole');

            $.ajax({
                method: "PUT",
                url: "{{route('admin.user-management.change-role')}}",
                data: {
                    role: isChecked,
                    id: id
                },
                success: function (data) {
                    toastr.success(data.message);
                },
                error: function (xhr, status, error) {
                    console.log(error);
                }
            });
        })
        // change status account user
        $('body').off('click', '.change-status').on('click', '.change-status', function() {
            let isChecked = $(this).is(':checked');
            let id = $(this).data('id');

            $.ajax({
                method: "PUT",
                url: "{{route('admin.user-management.change-status')}}",
                data: {
                    status: isChecked,
                    id: id
                },
                success: function (data) {
                    toastr.success(data.message);
                },
                error: function (xhr, status, error) {
                    console.log(error);
                }
            });
        })
    });
</script>
@endpush
