@extends('frontend.layouts.master')

@section('content')
    <div class="wrapper-home-page ">
        <div class="master-wrapper-content container">
            <div class="master-column-wrapper row pt-2">
                <div class="col-lg-4 ">
                    @include('frontend.dashboard.partials.sideBar')
                </div>
                <div class="center-2 col-lg-8 mt-3">
                    @yield('dashboar-user-content')
                </div>
            </div>
        </div>
    </div>
@endsection
