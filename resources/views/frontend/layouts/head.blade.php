<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
{{-- SEO by sauhv --}}
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="{{ url('/') }}/xmlrpc.php" />
<link rel="icon" href="{{ asset('favicon.ico') }}" sizes="32x32">
<link rel="icon" href="{{ asset('favicon.png') }}" type="image/png" sizes="192x192">
<meta name='robots' content='nofollow, noindex, max-snippet:-1, max-video-preview:-1, max-image-preview:large' />
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
<meta property="og:image" content="{{ asset('uploads/logo/cybermart7x4.png') }}" />
<meta property="og:image:secure_url" content="{{ asset('uploads/logo/cybermart7x4.png') }}" />
<meta property="og:image:width" content="700" />
<meta property="og:image:height" content="400" />
<meta property="og:image:alt" content="logocybermart" />
<meta property="og:image:type" content="image/webp" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:image" content="{{ asset('uploads/logo/cybermart7x4.png') }}" />
<meta name="twitter:title" content="@yield('title', 'CyberMart - Hệ thống thương mại điện tử hàng đầu Việt Nam')" />
<meta name="twitter:description" content="@yield('description', 'CyberMart - Hệ thống cửa hàng bán lẻ điện thoại, máy tính laptop, smartwatch, gia dụng, thiết bị IT, phụ kiện chính hãng - Giá tốt, trả góp 0%, giao miễn phí.')" />
@yield('schema')
{{-- end SEO --}}

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('Font-Awesome-640/css/all.css') }}">
<link rel="icon" href="{{ asset('favicon.ico?v=2') }}" type="image/x-icon" />

<!-- Alert Sweet CDN -->
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.1/dist/sweetalert2.min.css" rel="stylesheet">

<!--Google console-->
<meta name="google-site-verification" content="e-6p4AzRMui1XPqm2pUBi9NBQl9SkwsHLryEPmY10uA" />

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-ENLB7VQ8WJ"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-ENLB7VQ8WJ');
</script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-ENLB7VQ8WJ"></script>

<!--- Bing --->
<meta name="msvalidate.01" content="B7D892E9ED4DEFB49A871C34160F7278" />
