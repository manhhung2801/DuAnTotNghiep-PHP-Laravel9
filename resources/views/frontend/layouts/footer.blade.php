<div class=" bg-dark">
    <div class="container ">
        <footer class="py-5">
            <div class="row col">
                <div class="col-lg-5 col-sm-12 col-md-12 footer-item mb-2">
                    <h5 class="mb-3">CYBERMART</h5>
                    @foreach ($storeAddress as $item)
                        <ul class="nav flex-column ">
                            <li class="nav-item mb-2">{!! $item->description !!}</li>
                            <li class="nav-item mb-2"><b>Địa chỉ:</b> {{ $item->address }}, {{ $item->ward }},
                                {{ $item->district }}, {{ $item->province }}</li>
                            <li class="nav-item mb-2 "><b>Điện thoại:</b> <a class="text-decoration-none"
                                    href="#">{{ $item->phone }}</a></li>
                            <li class="nav-item mb-2"><b>Email:</b> <a class="text-decoration-none"
                                    href="#">{{ $item->email }}</a></li>
                        </ul>
                    @endforeach
                </div>
                @foreach ($ListPageCategories as $itemPageCategory)
                    <div class="col-lg-2 col-sm-12 col-md-4 footer-item mb-3">
                        <div class="col-10 mb-4">
                            <h5 class="mb-0 text-uppercase" style="font-size: 16px">{{ $itemPageCategory->name }}</h5>
                        </div>
                        <ul class="nav flex-column itemCard">
                            @foreach ($ListPage as $itemPage)
                                @if ($itemPageCategory->id == $itemPage->page_category_id)
                                    <li class="nav-item mb-2 text-light">
                                        <a
                                            href="{{ route('showPages', ['slug1' => $itemPage->pageCategory->slug, 'slug2' => $itemPage->slug]) }}">
                                            {{ $itemPage->name }}
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                @endforeach


                <div class="col-lg-2 col-sm-12 col-md-4 p-0 m-0 footer-item">
                    <ul class="row itemCard p-0 m-0">
                        <li class="mb-3">
                            <h5 style="font-size: 16px">KẾT NỐI VỚI CHÚNG TÔI</h5>
                        </li>
                        <li class="nav-item mb-2 col-lg-2 col-sm-2 col-2 ">
                            <a href="https://www.facebook.com/cybermart.508367/"><img
                                    src="{{ asset('images/logo/facebook_2.svg') }}" alt=""></a>
                        </li>
                        <li class="nav-item mb-2 mx-2 col-lg-2  col-sm-2 col-2 ">
                            <a href=""><img src="{{ asset('images/logo/instagram_1.svg') }}" alt=""></a>
                        </li>
                    </ul>
                    <ul class="row itemCard p-0 m-0">
                        <li class="mb-3 mt-3">
                            <h5 style="font-size: 16px">HỖ TRỢ THANH TOÁN</h5>
                        </li>
                        <li class="nav-item mb-2 col-lg-2 col-sm-2 col-2 mx-2">
                            <a href=""><img class="border-0"
                                    src="{{asset('images/logo/payment_3.svg')}}"
                                    alt=""></a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</div>
