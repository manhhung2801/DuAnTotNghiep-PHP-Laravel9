<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.layouts.head')
    @yield('styles')
</head>

<body>

    <div class="wrapper-page">
        <div class="loader-container">
            <div class="loader">
                <i class="fa-duotone fa-solid fa-loader fa-spin-pulse"></i>
            </div>
        </div>
        @include('frontend.layouts.header')

        <!-- Main content -->
        <main>
            @yield('content')
        </main>
        <!-- End main content -->
        @include('frontend.layouts.contact')
        @include('frontend.layouts.footer')
    </div>
    @include('frontend.layouts.scripts')
</body>

</html>
