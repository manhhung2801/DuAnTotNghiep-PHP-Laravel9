<div class=" bg-dark">
    <div class="container">
        <footer class="py-5">
            <div class="row">
                <div class="col-lg-4 col-sm-12 col-md-12 footer-item mb-2">
                    <h5 class="mb-3">CyBerMart</h5>
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
                @foreach ($ListInformation as $ItemInformation)
                    <div class="col-lg-2 col-sm-12 col-md-4 footer-item mb-3">
                        <div class="col-10 mb-4">
                            <h5 class="mb-0 text-uppercase fs-6">{{ $ItemInformation->name }}</h5>
                        </div>
                        <ul class="nav flex-column itemCard">
                            @foreach ($ListPage as $ItemPage)
                                @if ($ItemInformation->id === $ItemPage->information_id)
                                    <li class="nav-item mb-2 text-light"><a
                                            href="{{ route('showPages', ['slug1' => $ItemPage->information->slug, 'slug2' => $ItemPage->slug]) }}">{{ $ItemPage->name }}</a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                @endforeach
                
                <div class="col-lg-3 col-sm-12 col-md-4 p-0 m-0 footer-item">
                    <ul class="row itemCard p-0 m-0">
                        <li class="mb-3">
                            <h5 class="fs-6">KẾT NỐI VỚI CHÚNG TÔI</h5>
                        </li>
                        <li class="nav-item mb-2 col-lg-2 col-sm-2 col-2 ">
                            <a href=""><img
                                    src="https://bizweb.dktcdn.net/100/480/632/themes/900313/assets/facebook_2.svg?1712897547805"
                                    alt=""></a>
                        </li>
                        <li class="nav-item mb-2  col-lg-2  col-sm-2 col-2 ">
                            <a href=""><img
                                    src="https://bizweb.dktcdn.net/100/480/632/themes/900313/assets/instagram_1.svg?1712897547805"
                                    alt=""></a>
                        </li>
                        <li class="nav-item mb-2  col-lg-2  col-sm-2 col-2">
                            <a href=""><img
                                    src="https://bizweb.dktcdn.net/100/480/632/themes/900313/assets/shopee.svg?1712897547805"
                                    alt=""></a>
                        </li>
                        <li class="nav-item mb-2  col-lg-2  col-sm-2 col-2">
                            <a href=""><img
                                    src="https://bizweb.dktcdn.net/100/480/632/themes/900313/assets/lazada.svg?1712897547805"
                                    alt=""></a>
                        </li>

                    </ul>
                    <ul class="row itemCard p-0 m-0">
                        <li class="mb-3 mt-3">
                            <h5>HỖ TRỢ THANH TOÁN</h5>
                        </li>
                        <li class="nav-item mb-2 col-lg-2 col-sm-2 col-2 mx-2">
                            <a href=""><img class="border-0"
                                    src="https://bizweb.dktcdn.net/100/480/632/themes/900313/assets/payment_2.svg?1712897547805"
                                    alt=""></a>
                        </li>
                        <li class="nav-item mb-2 col-lg-2 col-sm-2 col-2 mx-2">
                            <a href=""><img class="border-0"
                                    src="https://bizweb.dktcdn.net/100/480/632/themes/900313/assets/payment_1.svg?1712897547805"
                                    alt=""></a>
                        </li>
                        <li class="nav-item mb-2 col-lg-2 col-sm-2 col-2 mx-2">
                            <a href=""><img class="border-0"
                                    src="https://bizweb.dktcdn.net/100/480/632/themes/900313/assets/payment_3.svg?1712897547805"
                                    alt=""></a>
                        </li>
                        <li class="nav-item mb-2 col-lg-2 col-sm-2 col-2 mx-2">
                            <a href=""><img class="border-0"
                                    src="https://bizweb.dktcdn.net/100/480/632/themes/900313/assets/payment_1.svg?1712897547805"
                                    alt=""></a>
                        </li>

                    </ul>
                </div>
            </div>
        </footer>
    </div>
</div>
