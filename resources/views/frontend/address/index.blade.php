@extends('frontend.layouts.master')
@section('title', 'Địa chỉ cửa hàng - Hệ thống thương mại điện tử hàng đầu Việt Nam')
@section('description', 'Danh sách các địa chỉ cửa hàng. Hệ thống thương mại điện tử hàng đầu Việt Nam liên hệ ngay để
    đặt hàng!!!.')
@section('schema')
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@graph": [{
                    "@type": "WebPage",
                    "@id": "{{ url('/') }}",
                    "url": "{{ url('/') }}",
                    "name": "Thương Mại Điện Tử CyberMart",
                    "isPartOf": {
                        "@id": "{{ url('/') }}#website"
                    },
                    "about": {
                        "@id": "{{ url('/') }}#organization"
                    },
                    "primaryImageOfPage": {
                        "@id": "{{ url('/') }}#primaryimage"
                    },
                    "thumbnailUrl": "{{ asset('uploads/logo/cybermart7x4.png') }}",
                    "datePublished": "2024-08-05T12:01:44+00:00",
                    "dateModified": "2024-08-06T16:54:25+00:00",
                    "description": "CyberMart - Hệ thống cửa hàng bán lẻ điện thoại, máy tính laptop, smartwatch, gia dụng, thiết bị IT, phụ kiện chính hãng - Giá tốt, trả góp 0%, giao miễn phí.",
                    "breadcrumb": {
                        "@id": "{{ url('/') }}#breadcrumb"
                    },
                    "inLanguage": "vi",
                    "potentialAction": [{
                        "@type": "ReadAction",
                        "target": [
                            "{{ url('/') }}"
                        ]
                    }]
                },
                {
                    "@type": "ImageObject",
                    "inLanguage": "vi",
                    "@id": "{{ url('/') }}#primaryimage",
                    "url": "{{ asset('uploads/logo/cybermart7x4.png') }}",
                    "width": 700,
                    "height": 400
                },
                {
                    "@type": "BreadcrumbList",
                    "@id": "{{ url('/') }}#breadcrumb",
                    "itemListElement": [
                    {
                        "@type": "ListItem",
                        "position": "1",
                        "item": {
                            "@id": "{{ url('/') }}",
                            "name": "Trang chủ"
                        }
                    },
                    {
                        "@type": "ListItem",
                        "position": "2",
                        "item": {
                            "@id": "{{ url('/address') }}",
                            "name": "Đia chỉ"
                        }
                    }]
                },
                {
                    "@type": "WebSite",
                    "@id": "{{ url('/') }}#website",
                    "url": "{{ url('/') }}",
                    "name": "Thương Mại Điện Tử CyberMart",
                    "description": "Hệ thống thương mại điện tử CyberMart Việt Nam",
                    "publisher": {
                        "@id": "{{ url('/') }}#organization"
                    },
                    "potentialAction": [{
                        "@type": "SearchAction",
                        "target": {
                            "@type": "EntryPoint",
                            "urlTemplate": "{{ url('/') }}/search?search={search_term_string}"
                        },
                        "query-input": {
                            "@type": "PropertyValueSpecification",
                            "valueRequired": "http://schema.org/True",
                            "valueName": "search_term_string"
                        }
                    }],
                    "inLanguage": "vi"
                },
                {
                    "@type": "Organization",
                    "@id": "{{ url('/') }}#organization",
                    "name": "Thương Mại Điện Tử CyberMart",
                    "url": "{{ url('/') }}",
                    "logo": {
                        "@type": "ImageObject",
                        "inLanguage": "vi",
                        "@id": "{{ url('/') }}#logo",
                        "url": "{{ asset('uploads/logo/cybermart7x4.png') }}",
                        "contentUrl": "{{ asset('uploads/logo/cybermart7x4.png') }}",
                        "width": 700,
                        "height": 400,
                        "caption": "Thương Mại Điện Tử CyberMart"
                    }
                }
            ]
        }
    </script>
@endsection

@section('content')
    <section class="bread-crumb">
        <section class="bread-crumb ">
            <div class="container ">
                <ul class="breadcrumb d-flex ">
                    <li class="home">
                        <a href="#" title="Trang chủ"><span>Trang chủ</span></a>
                        <span class="mr_lr mx-1"><i class="fas fa-angle-right"></i></span>
                        <strong>
                            <span> @yield('title')</span>
                        </strong>
                    </li>
                </ul>
            </div>
        </section>
        <main>
            <div class="layout-contact">
                <div class="container">
                    <h1 class="d-none">Địa chỉ cửa hàng - Hệ thống thương mại điện tử hàng đầu Việt Nam</h1>
                    @foreach ($storeAddress as $item)
                        <div class="row">
                            <div class="col-lg-5 col-12 col-md-5">
                                <div class="contact">
                                    <div class="name_address">
                                        <h4 class="d-none d-md-block  ">{{ $item->store_name }}</h4>
                                        <h4 class="d-md-none text-center mb-2 ">{{ $item->store_name }}</h4>
                                    </div>
                                    <div class="des_foo mb-3">
                                        Hệ thống cửa hàng <b>CYBERMART</b> chuyên bán lẻ điện thoại, máy tính laptop,
                                        smartwatch, smarthome, phụ kiện chính hãng - Giá tốt, giao miễn phí.
                                    </div>
                                    <div class="address fw-bold">
                                        {{ $item->province }}
                                    </div>
                                    <div class="time_work">
                                        <div class=" mb-1 ">
                                            <div><b class="font-weight-light">Địa chỉ:</b> {{ $item->address }},
                                                {{ $item->ward }}, {{ $item->district }}, {{ $item->province }}</div>
                                        </div>
                                        <div class=" mb-1">
                                            <div><b>Hotline:</b>
                                                <a class="fone text-decoration-none text-danger hover-text-dark"
                                                    href="tel:{{ $item->province }}">{{ $item->phone }}</a>
                                            </div>
                                        </div>
                                        <div class=" mb-1">
                                            <div> <b>Email:</b> <a href="mailto:{{ $item->email }}"
                                                    title="{{ $item->email }}"
                                                    class="text-decoration-none  text-danger font-weight-light">{{ $item->email }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-12 col-md-7 mt-2">
                                <h4 class="d-md-none text-center mb-2">Google map</h4>
                                <div id="contact_map" class="map">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.518104241413!2d106.650981814287!3d10.771573662229935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ec073c87139%3A0x10ef6fd79e84aa6f!2zNzAgTOG7ryBHaWEsIFBoxrDhu51uZyAxNSwgUXXhuq1uIDExLCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1647783383128!5m2!1svi!2s"
                                        width="100%" height="300" style="border:0;" allowfullscreen=""
                                        loading="img-fluid" class="border-0 rounded-3"></iframe>
                                </div>
                            </div>
                        </div>
                        <hr>
                    @endforeach
                </div>
            </div>
        </main>
    </section>
@endsection
