<style>
    .b {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>
@foreach ($newsDetail as $key => $value)
    <div class="post-item col-lg-4 col-md-4 col-ms-6 col-6 mb-4">
        <div class="news-item">
            <a href="{{ route('news.details', ['slugs_cate' => $value->Post_categories->slug, 'slugs' => $value->slug]) }}"
                class="list-group-item">
                <div class="card border-0">
                    <img src="{{ asset('uploads/post') }}/{{ $value->image }}" class="card-img-top" style="height: 165px;">
                    <div class="card-body px-3" style="width: 100%;">
                        <h2 class="news-title line-clamp " style="width: 100%; height: 45px;">
                            <b class="b"> {{ $value->title }}</b>
                        </h2>
                        <p class="news-desc line-clamp mb-1" style="width: 100%; height: 45px;">
                            {{ $value->seo_description }}
                        </p>
                        <span class="news-desc_item"><i class="fa-solid fa-clock"></i>
                            {{ $value->created_at->format('d/m/Y') }}<span>
                            </span></span>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endforeach
{{ $newsDetail->links() }}
