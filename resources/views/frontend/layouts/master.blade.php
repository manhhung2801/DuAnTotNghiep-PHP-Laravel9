<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.layouts.head')
</head>
<style>
    /*------------------------ Home Page ---------------------------*/
    .services-info h3 {
        font-size: 0.9rem;
        font-weight: 600;
        margin: 2px;
    }

    .services-item {
        transition-duration: .8s;
    }

    .services-item:hover {
        box-shadow: 1px 4px 5px #b1b1b1;
    }
</style>
<body>
    <div class="wrapper-page">
            @include('frontend.layouts.header')

        <!-- Main content -->
        <main>
            @yield('content')
        </main>
        <!-- End main content -->

        @include('frontend.layouts.footer')
    </div>


    @include('frontend.layouts.scripts')
</body>
</html>