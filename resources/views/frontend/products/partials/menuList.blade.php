<div class="menu-list d-flex justify-content-between ">
    @if (isset($category) && $category->subCategories->count() > 0)

        @foreach ($category->subCategories as $item)
            <a class="cate-item text-decoration-none text-center flex-grow-0 flex-shrink-0 flex-basis-auto"
                href="/san-pham/{{ $category->slug }}/{{ $item->slug }}">
                <div class="cate-img ">
                    <img width="100" height="100"
                        src="//bizweb.dktcdn.net/thumb/large/100/480/632/collections/230223022516-thiet-ke-chua-co-te.png"
                        class="  ">
                </div>
                <div class="cate-info-title ">{{ $item->name }}</div>
            </a>
        @endforeach

    @endif

    @if (isset($subCategory) && $subCategory->childCategory->count() > 0)
        @foreach ($subCategory->childCategory as $item)
            <a class="cate-item text-decoration-none text-center flex-grow-0 flex-shrink-0 flex-basis-auto"
                href="/san-pham/{{ $subCategory->slug }}/{{ $item->slug }}">
                <div class="cate-img ">
                    <img width="100" height="100"
                        src="//bizweb.dktcdn.net/thumb/large/100/480/632/collections/230223022516-thiet-ke-chua-co-te.png"
                        class="  ">
                </div>
                <div class="cate-info-title ">{{ $item->name }}</div>
            </a>
        @endforeach
    @endif
</div>
