<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
{{-- SEO bt sauhv --}}
<link rel="icon" href="{{ asset('favicon.ico') }}" sizes="32x32">
<link rel="icon" href="{{ asset('favicon.png') }}" type="image/png" sizes="192x192">
<meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
<title>@yield('title', 'CyberMart - Hệ thống thương mại điện tử hàng đầu Việt Nam')</title>
<meta name="description" content="@yield('description', 'CyberMart - Hệ thống cửa hàng bán lẻ điện thoại, máy tính laptop, smartwatch, gia dụng, thiết bị IT, phụ kiện chính hãng - Giá tốt, trả góp 0%, giao miễn phí.')" />
<link rel="canonical" href="{{ url()->current() }}" />
<meta property="og:locale" content="vi_VN" />
<meta property="og:type" content="website" />
<meta property="og:title" content="@yield('title', 'CyberMart - Hệ thống thương mại điện tử hàng đầu Việt Nam')" />
<meta property="og:description" content="@yield('description', 'CyberMart - Hệ thống cửa hàng bán lẻ điện thoại, máy tính laptop, smartwatch, gia dụng, thiết bị IT, phụ kiện chính hãng - Giá tốt, trả góp 0%, giao miễn phí.')" />
<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:site_name" content="CyberMart" />
<meta property="article:published_time" content="2024-07-23T16:02:33+07:00" />
<meta property="article:modified_time" content="2024-07-23T16:02:33+07:00" />
<meta property="og:image" content="{{ asset('uploads/logo/cybermart_logo_1x1.png') }}" />
<meta property="og:image:secure_url" content="{{ asset('uploads/logo/cybermart_logo_1x1.png') }}" />
<meta property="og:image:width" content="250" />
<meta property="og:image:height" content="250" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:image" content="{{ asset('uploads/logo/cybermart_logo_1x1.png') }}" />
<meta name="twitter:title" content="@yield('title', 'CyberMart - Hệ thống thương mại điện tử hàng đầu Việt Nam')" />
<meta name="twitter:description" content="@yield('description', 'CyberMart - Hệ thống cửa hàng bán lẻ điện thoại, máy tính laptop, smartwatch, gia dụng, thiết bị IT, phụ kiện chính hãng - Giá tốt, trả góp 0%, giao miễn phí.')" />
@yield('schema')
{{-- end SEO --}}

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('Font-Awesome-640/css/all.css') }}">
<link rel="icon" href="{{ asset('favicon.ico?v=2') }}" type="image/x-icon" />

<!-- Alert Sweet CDN -->
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.1/dist/sweetalert2.min.css" rel="stylesheet">
