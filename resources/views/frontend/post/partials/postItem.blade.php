@foreach($newsDetail as $key => $value)

<div class="post-item col-lg-4 col-md-4 col-ms-6 col-6 mb-4">
    <div class="news-item">
        <a href="{{route('news.details', [ 'slugs_cate' =>$value->Post_categories->slug, 'slugs' =>$value->slug ])}}" class="list-group-item">
            <div class="card border-0">
                <img src="{{asset('uploads/post')}}/{{ $value->image}}" class="card-img-top" style="height: 165px;">
                <div class="card-body px-3">
                    <h3 class="news-title line-clamp ">
                        {{ $value->title}}
                    </h3>
                    <p class="news-desc line-clamp  mb-1">
                        {{ $value->seo_description}}
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
<!-- <div class="post-item col-lg-3 col-md-3 col-ms-6 col-6 mb-4">
    <div class="news-item">
        <a href="#" class="list-group-item">
            <div class="card border-0">
                <img src="//bizweb.dktcdn.net/100/480/632/articles/010.jpg?v=1682692969433" class="card-img-top" alt="iphone">
                <div class="card-body px-3">
                    <h3 class="news-title line-clamp line-clamp-2 ">'Thò thụt': iPhone đã đúng khi không đụng đến tính năng này suốt những năm qua - Đình đám một thời nay đã chết yểu
                    </h3>
                    <p class="news-desc line-clamp line-clamp-3 mb-1">iPhone vẫn kiên định với thiết kế tai thỏ suốt nhiều năm dù bị nhiều người dùng chỉ trích. Thế nhưng, có vẻ như Apple một lần nữa đã sáng suốt. Cái chết của camera thò thụt...
                    </p>
                    <span class="news-desc_item"><i class="fa-solid fa-clock"></i>
                        20/05/2024<span>
                        </span></span>
                </div>
            </div>
        </a>
    </div>
</div>
<div class="post-item col-lg-3 col-md-3 col-ms-6 col-6 mb-4">
    <div class="news-item">
        <a href="#" class="list-group-item">
            <div class="card border-0">
                <img src="//bizweb.dktcdn.net/100/480/632/articles/010.jpg?v=1682692969433" class="card-img-top" alt="iphone">
                <div class="card-body px-3">
                    <h3 class="news-title line-clamp line-clamp-2 ">'Thò thụt': iPhone đã đúng khi không đụng đến tính năng này suốt những năm qua - Đình đám một thời nay đã chết yểu
                    </h3>
                    <p class="news-desc line-clamp line-clamp-3 mb-1">iPhone vẫn kiên định với thiết kế tai thỏ suốt nhiều năm dù bị nhiều người dùng chỉ trích. Thế nhưng, có vẻ như Apple một lần nữa đã sáng suốt. Cái chết của camera thò thụt...
                    </p>
                    <span class="news-desc_item"><i class="fa-solid fa-clock"></i>
                        20/05/2024<span>
                        </span></span>
                </div>
            </div>
        </a>
    </div>
</div>
<div class="post-item col-lg-3 col-md-3 col-ms-6 col-6 mb-4">
    <div class="news-item">
        <a href="#" class="list-group-item">
            <div class="card border-0">
                <img src="//bizweb.dktcdn.net/100/480/632/articles/010.jpg?v=1682692969433" class="card-img-top" alt="iphone">
                <div class="card-body px-3">
                    <h3 class="news-title line-clamp line-clamp-2 ">'Thò thụt': iPhone đã đúng khi không đụng đến tính năng này suốt những năm qua - Đình đám một thời nay đã chết yểu
                    </h3>
                    <p class="news-desc line-clamp line-clamp-3 mb-1">iPhone vẫn kiên định với thiết kế tai thỏ suốt nhiều năm dù bị nhiều người dùng chỉ trích. Thế nhưng, có vẻ như Apple một lần nữa đã sáng suốt. Cái chết của camera thò thụt...
                    </p>
                    <span class="news-desc_item"><i class="fa-solid fa-clock"></i>
                        20/05/2024<span>
                        </span></span>
                </div>
            </div>
        </a>
    </div>
</div> -->

{{ $newsDetail->links() }}