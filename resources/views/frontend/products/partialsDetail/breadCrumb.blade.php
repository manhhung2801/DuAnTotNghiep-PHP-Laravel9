<section class="bread-crumb">
    <div class="container">
        <ul class="breadcrumb">
            <li class="home">
                <a href="/" title="Trang chủ"><span>Trang chủ</span></a>
                <span class="mr_lr mx-2"><i class="fas fa-angle-right"></i></span>

                @if (isset($category))
                    <span class="mr_lr mx-2"><i class="fas fa-angle-right"></i></span>
                    <a href="/san-pham/{{ $category->slug }}/"
                        title="{{ $category->name }}"><strong><span>{{ $category->name }}</span></strong></a>
                @endif
                @if (isset($subCategory))
                    <span class="mr_lr mx-2"><i class="fas fa-angle-right"></i></span>
                    <a href="/san-pham/{{ $subCategory->category->slug }}/" title="{{ $subCategory->category->name }}">
                        <span>{{ $subCategory->category->name }}</span>
                    </a>
                    <span class="mr_lr mx-2"><i class="fas fa-angle-right"></i></span>
                    <a href="/san-pham/{{ $subCategory->category->slug }}/{{ $subCategory->slug }}/"
                        title="{{ $subCategory->name }}">
                        <strong>
                            <span>{{ $subCategory->name }}</span>
                        </strong>
                    </a>
                @endif

                @if (isset($childCategory))
                    <span class="mr_lr mx-2"><i class="fas fa-angle-right"></i></span>
                    <a href="/san-pham/{{ $childCategory->category->slug }}/"
                        title="{{ $childCategory->category->name }}">
                        <span>{{ $childCategory->category->name }}</span>
                    </a>
                    <span class="mr_lr mx-2"><i class="fas fa-angle-right"></i></span>
                    <a href="/san-pham/{{ $childCategory->category->slug }}/{{ $childCategory->subCategory->slug }}/"
                        title="{{ $childCategory->subCategory->name }}">
                        <span>{{ $childCategory->subCategory->name }}</span>
                    </a>
                    <span class="mr_lr mx-2"><i class="fas fa-angle-right"></i></span>
                    <a href="/san-pham/{{ $childCategory->category->slug }}/{{ $childCategory->subCategory->slug }}/{{ $childCategory->slug }}/"
                        title="{{ $childCategory->name }}">
                        <strong>
                            <span>{{ $childCategory->name }}</span></a>
                    </strong>
                @endif

                @if (isset($product))
                    <strong><span> {{ $product->name }}</span></strong>
                @endif
            </li>

        </ul>
    </div>
</section>
