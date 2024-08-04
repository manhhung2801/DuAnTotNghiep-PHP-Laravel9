<style>
    .pagination {
        display: flex;
        justify-content: center;
    }

    .pagination a {
        font-weight: 400;
        margin: 0 2.5px;
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
    <div class="pagination">
        @if ($products->lastPage() > 1)
            @if ($products->currentPage() > 1)
                <a href="{{ $products->appends(['query' => request()->query('query')])->previousPageUrl() }}"
                    class="prev">
                    &laquo;
                </a>
            @else
                <a href="#" class="prev disabled">
                    &laquo;
                </a>
            @endif

            @for ($i = 1; $i <= $products->lastPage(); $i++)
                @if ($i == $products->currentPage())
                    <a href="#" class="active">{{ $i }}</a>
                @else
                    <a
                        href="{{ $products->appends(['query' => request()->query('query')])->url($i) }}">{{ $i }}</a>
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