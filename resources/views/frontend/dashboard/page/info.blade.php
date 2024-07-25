@extends('frontend.dashboard.layout')

@section('dashboar-user-content')
<div class="page account-page customer-info-page">
    <div class="page-title d-block text-center">
        <h1 class="fs-4">Tài khoản của tôi</h1>
    </div>
    @if (session('status') === 'password-updated')
    <p class="alert alert-success">
        {{ session('status') }}
    </p>
    @endif

    <div class="page-body border px-4 pt-2">
        <form method="post" action="{{ route('profile.update') }}">
            @csrf
            <div class="fieldset">

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <label for="name">Tên:</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}">
                        <span class="text-danger">{{ $errors->first("name") }}</span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="text">Phone:</label>
                        <input type="text" class="form-control" id="phone" name="phone"  value="{{ Auth::user()->phone }}">
                        <span class="text-danger">{{ $errors->first("phone") }}</span>
                    </div>
                </div>
                <hr>
                <div class="buttons mb-3">
                    <button type="submit">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
