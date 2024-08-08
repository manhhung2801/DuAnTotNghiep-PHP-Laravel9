@extends('frontend.layouts.master')

@section('title', 'Liên Hệ CyberMart - Hệ thống thương mại điện tử hàng đầu Việt Nam')
@section('description',
    'Liên hệ ngay để được tư vấn mua điện thoại, máy tính laptop, smartwatch, gia dụng, thiết
    bị IT, phụ kiện chính hãng - Giá tốt, trả góp 0%, giao miễn phí ngay!!!.')
@section('schema')
<script type="application/ld+json">{"@context":"https://schema.org","@graph":[{"@type":"WebPage","@id":"{{ url('/') }}","url":"{{ url('/') }}","name":"Thương Mại Điện Tử CyberMart","isPartOf":{"@id":"{{ url('/') }}#website"},"about":{"@id":"{{ url('/') }}#organization"},"primaryImageOfPage":{"@id":"{{ url('/') }}#primaryimage"},"thumbnailUrl":"{{ asset('uploads/logo/cybermart7x4.png') }}","datePublished":"2024-08-05T12:01:44+00:00","dateModified":"2024-08-06T16:54:25+00:00","description":"CyberMart - Hệ thống cửa hàng bán lẻ điện thoại, máy tính laptop, smartwatch, gia dụng, thiết bị IT, phụ kiện chính hãng - Giá tốt, trả góp 0%, giao miễn phí.","breadcrumb":{"@id":"{{ url('/') }}#breadcrumb"},"inLanguage":"vi","potentialAction":[{"@type":"ReadAction","target":["{{ url('/') }}"]}]},{"@type":"ImageObject","inLanguage":"vi","@id":"{{ url('/') }}#primaryimage","url":"{{ asset('uploads/logo/cybermart7x4.png') }}","width":700,"height":400},{"@type":"BreadcrumbList","@id":"{{ url('/') }}#breadcrumb","itemListElement":[{"@type":"ListItem","position":"1","item":{"@id":"{{ url('/') }}","name":"Trang chủ"}},{"@type":"ListItem","position":"2","item":{"@id":"{{ url('/lien-he') }}","name":"Liên hệ"}}]},{"@type":"WebSite","@id":"{{ url('/') }}#website","url":"{{ url('/') }}","name":"Thương Mại Điện Tử CyberMart","description":"Hệ thống thương mại điện tử CyberMart Việt Nam","publisher":{"@id":"{{ url('/') }}#organization"},"potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"{{ url('/') }}/search?search={search_term_string}"},"query-input":{"@type":"PropertyValueSpecification","valueRequired":"http://schema.org/True","valueName":"search_term_string"}}],"inLanguage":"vi"},{"@type":"Organization","@id":"{{ url('/') }}#organization","name":"Thương Mại Điện Tử CyberMart","url":"{{ url('/') }}","logo":{"@type":"ImageObject","inLanguage":"vi","@id":"{{ url('/') }}#logo","url":"{{ asset('uploads/logo/cybermart7x4.png') }}","contentUrl":"{{ asset('uploads/logo/cybermart7x4.png') }}","width":700,"height":400,"caption":"Thương Mại Điện Tử CyberMart"}}]}</script>
@endsection

@section('content')
    <style>
        .frame-contact {
            padding: 15px 20px;
            border-radius: 12px;
            background-color: #f5f5f5;
        }
    </style>
    <div class="wrapper-contact_page layout-collection">
        <section class="bread-crumb">
            <section class="bread-crumb ">
                <div class="container ">
                    <ul class="breadcrumb d-flex ">
                        <li class="home">
                            <a href="/" title="Trang chủ"><span>Trang chủ</span></a>
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
                        <h1 class="d-none">Liên Hệ CyberMart - Hệ thống thương mại điện tử hàng đầu Việt Nam</h1>
                        @foreach ($storeAddress as $item)
                            <div class="row">
                                <div class="col-lg-6 col-12 col-md-6">
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
                                                    {{ $item->ward }}, {{ $item->district }}, {{ $item->province }}
                                                </div>
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
                                <div class="col-lg-6 col-12 col-md-6 mt-2">
                                    <form class="mx-auto formContact row frame-contact" method="post">
                                        <h4 class="text-center mt-2 col-lg-12"><b>LIÊN HỆ VỚI CHÚNG TÔI</b></h4>

                                        <div class="mb-3 text-start col-lg-6">
                                            <input name="name" type="text" class="form-control name-contact"
                                                placeholder="Họ và tên">
                                        </div>
                                        <div class="mb-3 text-start col-lg-6">
                                            <input name="email" type="email" class="form-control email-contact"
                                                placeholder="Email">
                                        </div>
                                        <div class="mb-3 text-start col-lg-12">
                                            <input name="phone" type="number" class="form-control phone-contact"
                                                placeholder="Điện thoại">
                                        </div>
                                        <div class="mb-3 text-start col-lg-12">
                                            <textarea name="content" class="form-control conten-contact" id="exampleFormControlTextarea1" rows="3"
                                                placeholder="Nội dung"></textarea>
                                        </div>
                                        <div class="col-lg-12">

                                            <button type="submit" class="btn btn-dark click-submit-contact">Gửi tin nhắn <i
                                                    class="fa-solid fa-chevron-right"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <hr>
                        @endforeach
                    </div>
                </div>
            </main>
        </section>

        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
            crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {
                $('.click-submit-contact').click(function(e) {
                    e.preventDefault();
                    var name = $(this).closest('.formContact').find('.name-contact').val();
                    var email = $(this).closest('.formContact').find('.email-contact').val();
                    var phone = $(this).closest('.formContact').find('.phone-contact').val();
                    var content = $(this).closest('.formContact').find('.conten-contact').val();

                    var csrfToken = $('meta[name="csrf-token"]').attr('content');
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': csrfToken
                        }
                    });

                    $.ajax({
                        method: 'POST',
                        url: "{{ route('contactContact') }}",
                        data: {
                            'name': name,
                            'email': email,
                            'phone': phone,
                            'content': content,
                        },
                        success: function(data) {
                            const Toast = Swal.mixin({
                                toast: true,
                                position: "top-end",
                                showConfirmButton: false,
                                timer: 2000,
                                timerProgressBar: true,
                            });
                            if (data.status == true) {
                                Toast.fire({
                                    icon: "success",
                                    title: data.message
                                });
                            }
                            if (data.status == false) {
                                Toast.fire({
                                    icon: "error",
                                    title: data.message
                                });
                            }
                        },
                        error: function(response) {
                            alert(response.status)
                        }
                    })
                })


            })
        </script>
    </div>
@endsection
