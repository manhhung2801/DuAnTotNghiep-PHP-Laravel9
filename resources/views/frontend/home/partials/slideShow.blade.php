@if ($slides->isNotEmpty())
    <h1 class="visually-hidden">Danh sách các hình ảnh nổi bật CyberMart - Hệ thống thương mại điện tử hàng đầu Việt Nam</h1>
    <div id="carouselExampleDark" class="carousel carousel-dark slide">
        <h2 class="visually-hidden">Trình chiếu</h2>
        <div class="carousel-indicators">
            @foreach ($slides as $index => $slide)
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="{{ $index }}"
                    class="{{ $index === 0 ? 'active' : '' }}" aria-current="{{ $index === 0 ? 'true' : 'false' }}"
                    aria-label="Slide {{ $index + 1 }}">
                </button>
            @endforeach
        </div>
        <div class="carousel-inner">
            @foreach ($slides as $index => $slide)
                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}" data-bs-interval="10000"
                    style="position: relative; width: 100%; height: 0; padding-top: 31.25%;">
                    <a href="{{ $slide->btn_url }}">
                        <img src="{{ asset('uploads/slider/' . $slide->banner) }}" class="img-fluid" alt="Banner Image"
                            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover">
                    </a>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
@endif
