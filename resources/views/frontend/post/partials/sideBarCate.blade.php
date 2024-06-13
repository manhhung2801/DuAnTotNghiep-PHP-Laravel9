<div class="collapse navbar-collapse" id="navbarNavDropdown">
    <div class="list-group">
        <?php
        $icon = [
            ['<i class="me-2 fa-regular fa-newspaper"></i>'],
            ['<i class="me-2 fa-solid fa-tags"></i>'],
            ['<i class="me-2 fa-regular fa-pen-to-square"></i>'],
            ['<i class="me-2 fa-regular fa-earth-americas"></i>'],
            ['<i class="me-2 fa-solid fa-wand-magic-sparkles"></i>'],
            ['<i class="me-2 fa-regular fa-lightbulb"></i>'],
            ['<i class="me-2 fa-regular fa-camera"></i>'],
        ]
        ?>
        @foreach($newsCate as $key => $value)
        <div class="slidebar_list-tem">
            <a href="{{route('news.newsSiteType',['slugs' =>$value->slug ])}}" class="list-group-item list-group-item-action border-0 fw-semibold">
            {!! $icon[$key][0] !!}
            <!-- <i class="me-2 fa-regular fa-newspaper"></i> -->
                {{$value->name}}</a>
        </div>
        @endforeach
        <!-- <div class="slidebar_list-tem">
            <a href="#" class="list-group-item list-group-item-action border-0 fw-semibold"><i class="me-2 fa-regular fa-newspaper"></i> Tin tức Apple</a>
        </div>
        <div class="slidebar_list-tem">
            <a href="#" class="list-group-item list-group-item-action border-0 fw-semibold"><i class="me-2 fa-regular fa-pen-to-square"></i> Bài viết review</a>
        </div>
        <div class="slidebar_list-tem">
            <a href="#" class="list-group-item list-group-item-action border-0 fw-semibold"><i class="me-2 fa-regular fa-earth-americas"></i> Khám phá</a>
        </div>
        <div class="slidebar_list-tem">
            <a href="#" class="list-group-item list-group-item-action border-0 fw-semibold"><i class="me-2 fa-solid fa-wand-magic-sparkles"></i> Thủ thuật</a>
        </div>
        <div class="slidebar_list-tem">
            <a href="#" class="list-group-item list-group-item-action border-0 fw-semibold"><i class="me-2 fa-solid fa-tags"></i> Khuyến mại</a>
        </div>
        <div class="slidebar_list-tem">
            <a href="#" class="list-group-item list-group-item-action border-0 fw-semibold"><i class="me-2 fa-regular fa-lightbulb"></i> Tin khác</a>
        </div>
        <div class="slidebar_list-tem">
            <a href="#" class="list-group-item list-group-item-action border-0 fw-semibold"><i class="me-2 fa-regular fa-camera"></i> Video</a>
        </div> -->
    </div>
</div>