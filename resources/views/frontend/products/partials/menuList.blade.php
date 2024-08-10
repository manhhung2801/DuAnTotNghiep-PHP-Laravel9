<div class="menu-list d-flex justify-content-between ">


    @if (isset($category) && $category->subCategories->where('status', 1)->count() > 0)

        @foreach ($category->subCategories->where('status', 1) as $item)
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

    @if (isset($subCategory) && $subCategory->childCategory->where('status', 1)->count() > 0)
        @foreach ($subCategory->childCategory->where('status', 1) as $item)
            <a class="cate-item text-decoration-none text-center flex-grow-0 flex-shrink-0 flex-basis-auto"
                href="/san-pham/{{ $subCategory->category->slug }}/{{ $subCategory->slug }}/{{ $item->slug }}">
                <div class="cate-img ">
                    <img width="100" height="100" src="{{ asset('uploads/childcategory/' . $item->image) }}"
                        class="  ">
                </div>
                <div class="cate-info-title ">{{ $item->name }}</div>
            </a>
        @endforeach
    @endif


    @if (isset($categories) && $categories->where('status', 1)->count() > 0)
        @foreach ($categories->where('status', 1) as $item)
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
