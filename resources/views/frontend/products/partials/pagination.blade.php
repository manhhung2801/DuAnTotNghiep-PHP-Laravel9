<style>
    .pagination {
        display: flex;
        justify-content: center;
        margin: auto;
        padding: 0;
    }

    .pagination a {
        font-weight: 400;
        margin: 2.5px 2.5px;
        width: 30px;
        border: solid 1px #141414;
        text-align: center;
        height: 30px;
        font-size: 14px;
        padding: 0;
        line-height: 28px;
        color: #141414;
        text-decoration: none;
        border-radius: 5px;
    }

    .pagination a.active {
        background-color: #141414;
        color: white;
        border: 1px solid #141414;
    }

    .pagination a:hover:not(.active) {
        background-color: #141414;
        color: #fff;
    }
</style>

@php
    $lengthPage = 3;
@endphp

<div class="pagination flex-wrap mb-3">
    @if ($products->lastPage() > 1)
       
        @if ($products->currentPage() > 1)
            <a href="{{ $products->appends(request()->except('page'))->previousPageUrl() }}" class="prev">
                &laquo;
            </a>
        @else
            <a href="#" class="prev disabled">
                &laquo;
            </a>
        @endif

      
        @php
            $start = max(1, $products->currentPage() - $lengthPage);
            $end = min($products->lastPage(), $products->currentPage() + $lengthPage);
        @endphp

      
        @if ($start > 1)
            <a href="{{ $products->appends(request()->except('page'))->url(1) }}">1</a>
            @if ($start > 2)
                <a href="#">...</a>
            @endif
        @endif

        @for ($i = $start; $i <= $end; $i++)
            @if ($i == $products->currentPage())
                <a href="#" class="active">{{ $i }}</a>
            @else
                <a href="{{ $products->appends(request()->except('page'))->url($i) }}">{{ $i }}</a>
            @endif
        @endfor

       
        @if ($end < $products->lastPage())
            @if ($end < $products->lastPage() - 1)
                <a href="#">...</a>
            @endif
            <a
                href="{{ $products->appends(request()->except('page'))->url($products->lastPage()) }}">{{ $products->lastPage() }}</a>
        @endif

        @if ($products->currentPage() < $products->lastPage())
            <a href="{{ $products->appends(request()->except('page'))->nextPageUrl() }}" class="next">
                &raquo;
            </a>
        @else
            <a href="#" class="next disabled">
                &raquo;
            </a>
        @endif
    @endif
</div>
