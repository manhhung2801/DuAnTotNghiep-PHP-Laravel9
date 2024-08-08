@extends('frontend.layouts.master')
@section('title', 'Giới thiệu về Cybermart')
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [
            {
                "@type": "WebSite",
                "@id": "{{ url('/') }}/#website",
                "url": "{{ url('/') }}",
                "name": "{{ config('app.name') ?? 'Cybermart' }}",
                "alternateName": "CyberMart - Hệ thống cửa hàng bán lẻ điện thoại, máy tính laptop.",
                "publisher": {
                    "@id": "{{ url('/') }}/#organization"
                },
                "inLanguage": "vi"
            },
            {
                "@type": "ImageObject",
                "@id": "{{ asset('uploads/logo/cybermart7x4.png') }}",
                "url": "{{ asset('uploads/logo/cybermart7x4.png') }}",
                "width": "700",
                "height": "400",
                "caption": "Logo của CyberMart",
                "inLanguage": "vi"
            },
            {
                "@type": "BreadcrumbList",
                "@id": "{{ url()->current() }}/#breadcrumb",
                "itemListElement": [
                    {
                        "@type": "ListItem",
                        "position": 1,
                        "item": {
                            "@id": "{{ url('/') }}",
                            "name": "Trang chủ"
                        }
                    },
                    {
                        "@type": "ListItem",
                        "position": 2,
                        "item": {
                            "@id": "{{ url()->current() }}",
                            "name": "Giới thiệu"
                        }
                    }
                ]
            },
            {
                "@type": "WebPage",
                "@id": "{{ url()->current() }}/#webpage",
                "url": "{{ url()->current() }}",
                "name": "Giới thiệu về CyberMart",
                "datePublished": "2024-08-05T12:01:44+00:00",
                "dateModified": "2024-08-04T12:01:44+00:00",
                "isPartOf": {
                    "@id": "{{ url('/') }}/#website"
                },
                "primaryImageOfPage": {
                    "@id": "{{ asset('uploads/logo/cybermart7x4.png') }}"
                },
                "inLanguage": "vi",
                "breadcrumb": {
                    "@id": "{{ url()->current() }}/#breadcrumb"
                }
            },
            {
                "@type": "Article",
                "headline": "Chào mừng đến với CyberMart - Điểm đến hàng đầu cho các sản phẩm công nghệ và điện tử!",
                "datePublished": "2024-08-05T12:01:44+00:00",
                "dateModified": "2024-08-04T12:01:44+00:00",
                "publisher": {
                    "@id": "{{ url('/') }}/#organization"
                },
                "description": "Tại CyberMart, chúng tôi cam kết mang đến cho bạn những sản phẩm công nghệ tiên tiến nhất với chất lượng dịch vụ tốt nhất. Với một đội ngũ chuyên gia dày dạn kinh nghiệm và sự am hiểu sâu rộng về thị trường công nghệ, chúng tôi tự hào cung cấp cho bạn một trải nghiệm mua sắm trực tuyến tuyệt vời.",
                "name": "",
                "@id": "{{ url()->current() }}/#richSnippet",
                "isPartOf": {
                    "@id": "{{ url()->current() }}/#webpage"
                },
                "image": "{{ asset('uploads/logo/cybermart7x4.png') }}",
                "inLanguage": "vi",
                "mainEntityOfPage": {
                    "@id": "{{ url()->current() }}/#webpage"
                }
            },
            {
                "@type": "Organization",
                "@id": "{{ url('/') }}/#organization",
                "name": "{{ config('app.name') ?? 'Cybermart' }}",
                "url": "{{ url('/') }}",
                "logo": {
                    "@id": "{{ asset('uploads/logo/cybermart7x4.png') }}",
                    "url": "{{ asset('uploads/logo/cybermart7x4.png') }}",
                    "width": "700",
                    "height": "400",
                    "caption": "Logo của CyberMart"
                }
            }
        ]
    }
    </script>

@section('content')
    <div class="wrapper_introduce_page container">
        <div class="page_body mt-3">
            <div class="page_introduce m-auto text-center">
                <div class="introduce-1 mb-5">
                    <p>
                        <img src="/public/images/uploaded/banner/introduce/Logo.png" alt="">
                    </p>
                    <p class="page_introduce-content">
                        Cyber Mart Group là đơn vị số 1 tạo nên những trải nghiệm tuyệt vời cho quá trình mua sắm sản phẩm
                        công nghệ tại Việt Nam. Chúng tôi là đối tác ủy quyền tin cậy của các hãng công nghệ uy tín hàng đầu
                        trên thế giới như Apple, Samsung trong lĩnh vực thương
                        mại và dịch vụ. Điều tuyệt vời nhất ở Cyber Mart chính là, khi chúng ta trở thành đồng nghiệp, đối
                        tác hay khách hàng của nhau, chúng ta đã trở thành người một nhà. Ở mỗi điểm chạm, chúng ta luôn kết
                        nối, bàn bạc và trao đổi
                        để cùng thống nhất mục tiêu chung, bởi chúng ta không có khoảng cách.
                    </p>
                </div>
                <div class="introduce-streer mb-5">
                    <img src="/public/images/uploaded/banner/introduce/LSPT_(3)_1000.png" alt="">
                </div>
                <div class="introduce-banner_store mb-5">
                    <p><img src="/public/images/uploaded/banner/introduce/Image_(6)_1000.png" alt="store"></p>
                    <em>Hình ảnh 1 store CyberMart tại TP. Hồ Chí Minh</em>
                </div>
                <div class="introduce-title_value mb-5">
                    <h2>Giá trị cốt lõi của người Cyber Mart</h2>
                    <p>HESMAN Group đã tạo nên một lịch sử mới cho thương hiệu ShopDunk, xóa nhòa đi mọi định kiến và khái
                        niệm về thương hiệu ShopDunk cũ ở những năm 2012-2016. Hiện ShopDunk đang mạnh mẽ dấn thân, trở
                        thành đối tác uy tín của những
                        hãng công nghệ hàng đầu thế giới.</p>
                    <p>
                        <img src="/public/images/uploaded/banner/introduce/4_gia_tri_1000.png" alt="">
                    </p>
                </div>
                <div class="introduce-tamnhin mb-5">
                    <h2>Tầm nhìn, sứ mệnh & định hướng phát triển</h2>
                    <ul>
                        <li>
                            Tầm nhìn tương lai, HESMAN Group sẽ là đơn vị tiên phong số 1 trong lĩnh vực cung cấp các sản
                            phẩm công nghệ cao cấp mới nhất tới tay người tiêu dùng Việt Nam. Nâng cao giá trị trải nghiệm
                            mua sắm cho khách hàng từ những nhu cầu nhỏ nhất với hệ thống
                            stores rộng khắp trên toàn quốc.
                        </li>
                        <li>
                            HESMAN đặt ra sứ mệnh phát triển vượt bậc, mang những sản phẩm công nghệ độc đáo tới tay người
                            tiêu dùng nhanh nhất, giúp tạo ra cuộc sống hiện đại, nơi con người kết nối với công nghệ và
                            công nghệ phục vụ con người.
                        </li>
                        <li>
                            Lấy con người và công nghệ làm cốt lõi cho định hướng phát triển doanh nghiệp, xoay quanh khách
                            hàng làm trung tâm, HESMAN xây dựng hệ sinh thái cung cấp sản phẩm, dịch vụ công nghệ cao, định
                            hướng mở rộng chi nhánh ở tất cả các tỉnh trên toàn quốc.
                        </li>
                    </ul>
                </div>
                <div class="introduce-store_banner mb-5">
                    <h2 class="my-2">Những hình ảnh hoạt động nổi bật của HESMAN</h2>
                    <div class="store-banner row">
                        <div class="col-6">
                            <img src="/public/images/uploaded/banner/introduce/Image_(8).png" width="100%" alt="store">
                        </div>
                        <div class="col-6">
                            <img src="/public/images/uploaded/banner/introduce/baneer1.png" width="100%" alt="store">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
