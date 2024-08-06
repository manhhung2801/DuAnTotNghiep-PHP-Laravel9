<div class="container">
    <div class="scroll_animation section_title text-center mb-3">
        <h1 class="text-uppercase fs-4">Danh mục nổi bật</h1>
    </div>
    <div class="scroll_animation row">
        @foreach ($categoryHot as $cate )
        <div class="category_hot_item col-lg-2 col-md-2 col-sm-4 col-4 mb-3 px-2">
            <div class="card border-0 rounded-4">
                <div class="card-body px-1">
                    <a href="/san-pham/{{$cate->slug}}" title="iPhone" class="cate-item list-group-item">
                        <div class="box-cate text-center">
                            <div class="cate-image_home ">
                                <img alt="{{ $cate->name }}" width="80px" height="80px" src="{{ asset('uploads/category/'. $cate->image)}}">
                            </div>
                            <h6 class="cate-name mt-2">
                                {{$cate->name}}
                            </h6>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
