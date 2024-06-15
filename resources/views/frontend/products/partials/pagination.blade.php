<style>
    .button {
        height: 30px;
        width: 80px;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        position: relative;
        overflow: hidden;
        transition: all 0.5s ease-in-out;
    }

    .button:hover {
        box-shadow: .5px .5px 150px #252525;
    }

    .type1::after {
        content: "<<";
        height: 30px;
        width: 80px;
        background-color: #276735;
        color: #fff;
        position: absolute;
        top: 0%;
        left: 0%;
        transform: translateY(50px);
        font-size: 1rem;
        font-weight: 600;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.5s ease-in-out;
    }

    .type1::before {
        content: "Previous";
        height: 30px;
        width: 80px;
        background-color: #fff;
        color: #276735;
        position: absolute;
        top: 0%;
        left: 0%;
        transform: translateY(0px) scale(1.2);
        font-size: 1rem;
        font-weight: 600;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.5s ease-in-out;
    }

    .type1:hover::after {
        transform: translateY(0) scale(1.2);
    }

    .type1:hover::before {
        transform: translateY(-50px) scale(0) rotate(120deg);
    }






    .type2::after {
        content: ">>";
        height: 30px;
        width: 80px;
        background-color: #276735;
        color: #fff;
        position: absolute;
        top: 0%;
        left: 0%;
        transform: translateY(50px);
        font-size: 1rem;
        font-weight: 600;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.5s ease-in-out;
    }

    .type2::before {
        content: "Next";
        height: 30px;
        width: 80px;
        background-color: #fff;
        color: #276735;
        position: absolute;
        top: 0%;
        left: 0%;
        transform: translateY(0px) scale(1.2);
        font-size: 1rem;
        font-weight: 600;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.5s ease-in-out;
    }

    .type2:hover::after {
        transform: translateY(0) scale(1.2);
    }

    .type2:hover::before {
        transform: translateY(-50px) scale(0) rotate(120deg);
    }

    .pagination li {
        height: 30px;
        line-height: 30px;
        /* border: 1px solid gray; */
    }

    .pagination li a {
        color: #276735;
    }


    .pagination li {
        background: transparent;
        position: relative;
        /* padding: 5px 15px; */
        display: flex;
        align-items: center;
        font-size: 17px;
        font-weight: 600;
        text-decoration: none;
        cursor: pointer;
        /* border: 1px solid #276735; */
        border-radius: 25px;
        outline: none;
        overflow: hidden;
        color: #276735;
        transition: color 0.3s 0.1s ease-out;
        text-align: center;
    }

    .pagination li a {
        margin: 10px;
    }

    .pagination li::before {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
        content: '';
        border-radius: 50%;
        display: block;
        width: 20em;
        height: 20em;
        left: -5em;
        text-align: center;
        transition: box-shadow 0.5s ease-out;
        z-index: -1;
    }

    .pagination li:hover a,
    .pagination .active a {
        color: #fff;
    }

    .pagination li:hover::before,
    .pagination .active::before {
        box-shadow: inset 0 0 0 10em #276735;
    }
</style>
<ul class="pagination col-xl-4 col-lg-5 col-md-8 col-12 d-flex justify-content-around mx-auto pt-4">
    @if ($products->lastPage() > 1)
        @if ($products->currentPage() > 1)
            <a href="{{ $products->previousPageUrl() }}">
                <button class="button type1"></button>
            </a>
        @else
            <a href="{{ $products->nextPageUrl() }}">
                <button class="button type2" disabled style="opacity: .2"></button>
            </a>
        @endif

        @for ($i = 1; $i <= $products->lastPage(); $i++)
            @if ($i == $products->currentPage())
                <li class="active">
                    <a href="">{{ $i }}</a>
                </li>
            @else
                <li class="">
                    <a href="{{ $products->url($i) }}">{{ $i }}</a>
                </li>
            @endif
        @endfor

        @if ($products->currentPage() < $products->lastPage())
            <a href="{{ $products->nextPageUrl() }}">
                <button class="button type2"></button>
            </a>
        @else
            <a href="{{ $products->nextPageUrl() }}">
                <button class="button type2" disabled style="opacity: .2"></button>
            </a>
        @endif
    @endif
</ul>
