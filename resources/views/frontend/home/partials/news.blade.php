@if ($getPosts == true)
    <div class="container">
        <div class="section_title text-center mt-4">
            <h4 class="text-uppercase">Tin tức công nghệ</h4>
        </div>
        <div class="row">
            @foreach ($getPosts as $post)
                <div class="col-lg-3 col-md-3 col-ms-6 col-6 mb-4">
                    <div class="news-item">
                        <a href="{{ route('news.details', [$post->Post_categories->slug, $post->slug]) }}"
                            class="list-group-item">
                            <div class="card border-0">
                                <div class="news_image">
                                    <img src="{{ asset('uploads/post/' . $post->image) }}" class="card-img-top"
                                        alt="{{ $post->image }}">
                                </div>
                                <div class="card-body px-3">
                                    <h3 class="news-title line-clamp line-clamp-2 fw-semibold">{{ $post->title }}</h3>
                                    <p class="news-desc line-clamp line-clamp-3 mb-1">{{ $post->description }}</p>
                                    <span class="news-desc_item"><i class="fa-solid fa-clock"></i>
                                        {{ $post->created_at }}<span />
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="show-all text-center">
            <a class="px-5 py-2 btn btn-outline-dark " href="{{ route('news') }}">Xem tất cả <i
                    class="fa-regular fa-chevron-right"></i></a>
        </div>
    </div>
@endif
