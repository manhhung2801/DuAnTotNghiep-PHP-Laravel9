<div class="menu-list d-flex justify-content-between ">


    @if (isset($category) && $category->subCategories->count() > 0)

        @foreach ($category->subCategories as $item)
            <a class="cate-item text-decoration-none text-center flex-grow-0 flex-shrink-0 flex-basis-auto"
                href="/san-pham/{{ $category->slug }}/{{ $item->slug }}">
                <div class="cate-img ">
                    <img width="100" height="100" src="{{ asset('uploads/subcategories/' . $item->image) }}"
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
                    <img width="100" height="100" src="{{ asset('uploads/childcategory/' . $item->image) }}"
                        class="  ">
                </div>
                <div class="cate-info-title ">{{ $item->name }}</div>
            </a>
        @endforeach
    @endif


    @if (isset($categories))
        @foreach ($categories as $item)
            <a class="cate-item text-decoration-none text-center flex-grow-0 flex-shrink-0 flex-basis-auto"
                href="/san-pham/{{ $item->slug }}/">
                <div class="cate-img ">
                    <img width="100" height="100" src="{{ asset('uploads/category/' . $item->image) }}"
                        class="  ">
                </div>
                <div class="cate-info-title ">{{ $item->name }}</div>
            </a>
        @endforeach

    @endif
</div>
