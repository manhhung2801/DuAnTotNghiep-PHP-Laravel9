<div class="bg-dark text-light">
    <div class="container">
        <footer class="py-5">
            <div class="row">
                <!-- Thông tin cửa hàng -->
                <div class="col-lg-5 col-md-12 mb-4">
                    <h5 class="mb-3 text-center"><img src="{{ asset('uploads/logo/cybermart_logo_text.png') }}" width="80%" alt=""></h5>

                    @foreach ($storeAddress as $item)
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2">{!! $item->description !!}</li>
                            <li class="nav-item mb-2"><strong>Địa chỉ:</strong> {{ $item->address }},
                                {{ $item->ward }},
                                {{ $item->district }}, {{ $item->province }}</li>
                            <li class="nav-item mb-2 "><strong>Điện thoại:</strong> <a
                                    class="text-light text-decoration-none "
                                    href="tel:{{ $item->phone }}">{{ $item->phone }}</a></li>
                            <li class="nav-item mb-2"><strong>Email:</strong> <a class="text-light text-decoration-none"
                                    href="mailto:{{ $item->email }}">{{ $item->email }}</a></li>
                        </ul>
                    @endforeach
                </div>
      
                @foreach ($ListPageCategories as $itemPageCategory)
                    <div class="col-lg-2 col-md-4 mb-4">
                        <h5 class="text-uppercase" style="font-size: 16px">{{ $itemPageCategory->name }}</h5>
                        <ul class="nav flex-column">
                            @forelse ($itemPageCategory->pages as $itemPage)
                                <li class="nav-item mb-2">
                                    <a class="text-light text-decoration-none"
                                        href="{{ route('showPages', ['slug1' => $itemPage->pageCategory->slug, 'slug2' => $itemPage->slug]) }}">
                                        {{ $itemPage->name }}
                                    </a>
                                </li>
                            @empty
                                <li class="nav-item mb-2">Trang không có dữ liệu!!!</li>
                            @endforelse
                        </ul>
                    </div>
                @endforeach

                <!-- Kết nối và hỗ trợ thanh toán -->
                <div class="col-lg-3 col-md-12 mb-4">
                    <h5 class="text-uppercase" style="font-size: 16px">KẾT NỐI VỚI CHÚNG TÔI</h5>
                    <div class="d-flex flex-wrap">
                        <a href="https://www.facebook.com/cybermart.508367/" class="me-2 mb-2">
                            <img src="{{ asset('images/logo/facebook_2.svg') }}" alt="Facebook" class="img-fluid">
                        </a>
                        <a href="" class="me-2 mb-2">
                            <img src="{{ asset('images/logo/instagram_1.svg') }}" alt="Instagram" class="img-fluid">
                        </a>
                    </div>

                    <h5 class="mt-4 text-uppercase" style="font-size: 16px">HỖ TRỢ THANH TOÁN</h5>
                    <div class="d-flex flex-wrap">
                        <a href="" class="me-2 mb-2">
                            <img src="{{ asset('images/logo/payment_3.svg') }}" alt="Thanh toán" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
