@forelse ($bannerHero as $banner)
    <h1 class="visually-hidden">Danh mục banner CyberMart - Hệ thống thương mại điện tử hàng đầu Việt Nam</h1>
    <div class="bg-banner overflow-hidden"
        style="background: url('{{ asset('uploads/post_gallery/' . $banner->post_image_galleries->first()->image) }}') center/cover no-repeat;">
        <div class="container">
            <div class="section_title text-center mb-3">
                <h2 class="text-uppercase fs-4">THÔNG TIN SẢN PHẨM MỚI</h2>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-left d-flex align-items-center">
                    <div class="product-content">
                        <span class="sub-title mb-2">{{ $banner->title }}</span>
                        <h3>{{ $banner->seo_title }}</h3>
                        <div class="desc">{{ $banner->description }}</div>
                        <a href="{{ route('news.details', [$banner->Post_categories->slug, $banner->slug]) }}"
                            title="Xem thêm" class="btn btn-dark px-4 mt-4">
                            Xem thêm <i class="fa-solid fa-angle-right"></i>
                        </a>

                    </div>
                </div>
                <div class="col-12 col-md-6 pt-3">
                    <picture class="d-flex justify-content-center bg-banner-item_img">
                        <img width="573" height="502" src="{{ asset('uploads/post/' . $banner->image) }}"
                            alt="{{ $banner->image }}">
                    </picture>
                </div>
            </div>
        </div>
    </div>
@empty
@endforelse
