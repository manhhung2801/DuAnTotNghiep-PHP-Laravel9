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
            <a href="{{ $products->appends(['query' => request()->query('query')])->previousPageUrl() }}" class="prev">
                &laquo;
            </a>
        @else
            <a href="#" class="prev disabled">
                &laquo;
            </a>
        @endif

            @for ($l = 1; $l < $lengthPage + 1; $l++)
                @if ($l == $products->currentPage())
                    <a href="#" class="active">{{ $l }}</a>
                @else
                    <a
                        href="{{ $products->appends(['query' => request()->query('query')])->url($l) }}">{{ $l }}</a>
                @endif
            @endfor
            @if ($products->currentPage() > $lengthPage * 2)
                <a href="{{ $products->appends(['query' => request()->query('query')])->previousPageUrl() }}">...</a>
            @endif

        @for ($i = $lengthPage + 1; $i <= $products->lastPage() - $lengthPage; $i++)
            @if ($i == $products->currentPage())
                <a href="#" class="active">{{ $i }}</a>
            @else
                @if ($products->currentPage() - $lengthPage < $i && $products->currentPage() > $i)
                    @if ($i < $lengthPage && $products->currentPage() < $lengthPage)
                        @continue
                    @endif
                    <a
                        href="{{ $products->appends(['query' => request()->query('query')])->url($i) }}">{{ $i }}</a>
                @endif

                @if ($products->currentPage() + $lengthPage > $i && $products->currentPage() < $i)
                    @if ($products->currentPage() < $products->lastPage() - $lengthPage)
                        <a
                            href="{{ $products->appends(['query' => request()->query('query')])->url($i) }}">{{ $i }}</a>
                    @endif
                @endif
            @endif
        @endfor

        @if ($products->lastPage() - $lengthPage >= $products->currentPage() + $lengthPage)
            <a href="{{ $products->appends(['query' => request()->query('query')])->nextPageUrl() }}" class="next">
                ...
            </a>
        @endif
        @for ($l = 1; $l <= $lengthPage; $l++)
            @if ($products->lastPage() - ($lengthPage - $l) == $products->currentPage())
                <a href="#" class="active">{{ $products->lastPage() - ($lengthPage - $l) }}</a>
            @else
                <a
                    href="{{ $products->appends(['query' => request()->query('query')])->url($products->lastPage() - ($lengthPage - $l)) }}">{{ $products->lastPage() - ($lengthPage - $l) }}</a>
            @endif
        @endfor

        @if ($products->currentPage() < $products->lastPage())
            <a href="{{ $products->appends(['query' => request()->query('query')])->nextPageUrl() }}" class="next">
                &raquo;
            </a>
        @else
            <a href="#" class="next disabled">
                &raquo;
            </a>
        @endif
    @endif
</div>
