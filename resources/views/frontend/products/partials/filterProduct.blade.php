<div class="sort-cate clearfix">
    <div class="sort-cate-right">
        <h3 class="active">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-sort-alpha-down" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371h-1.781zm1.57-.785L11 2.687h-.047l-.652 2.157h1.351z">
                </path>
                <path
                    d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645V14zM4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293V2.5z">
                </path>
            </svg>
            Xếp theo
        </h3>
        <ul style="margin-bottom: 0px;padding-left: 0px" class="sort-options mt-3">
            <li class="btn-quick-sort alpha-asc list-group-item ">
                <a href="{{ url()->current() }}?{{ http_build_query(array_merge(Request::query(), ['sort' => 'az'])) }}"
                    class="text-decoration-none">Tên
                    A-Z</a>
            </li>
            <li class="btn-quick-sort alpha-asc list-group-item ">
                <a class="text-decoration-none"
                    href="{{ url()->current() }}?{{ http_build_query(array_merge(Request::query(), ['sort' => 'za'])) }}">Tên
                    Z-A</a>
            </li>
            <li class="btn-quick-sort price-asc list-group-item ">
                <a class="text-decoration-none"
                    href="{{ url()->current() }}?{{ http_build_query(array_merge(Request::query(), ['sort' => 'price_low_high'])) }}">Giá
                    thấp đến cao</a>
            </li>
            <li class="btn-quick-sort price-asc list-group-item mb-4">
                <a class="text-decoration-none"
                    href="{{ url()->current() }}?{{ http_build_query(array_merge(Request::query(), ['sort' => 'price_high_low'])) }}">Giá
                    cao xuống thấp</a>
            </li>
            <li class=" btn-quick-sort price-asc list-group-item ">
                <div class="col-md-12  value-display position-relative flex-column" style="margin-top: -16px;">
                    <div class="">
                        <span class="">
                            <a id="submitFindPrice" class="btn py-0 m-1"
                                href="{{ url()->current() }}?{{ http_build_query(array_merge(Request::query(), ['sort' => floor($products->min('offer_price'))])) }}">Lọc
                                giá</a>
                        </span>
                        <span>Từ <span id="minPrice">0</span><sup>đ</sup> đến </span>
                        <span class="">
                            <span
                                id="value-display">0</span><span><sup>đ</sup></span>
                            {{-- </span>
                        <span class="px-4"> --}}
                        </span>
                    </div>
                    <div class="">
                        <input type="range" class="form-range border border-secondary-subtle p-1 rounded-pill"
                            id="customRange1" value="{{ floor($products->min('offer_price')) }}"
                            min="{{ empty(floor($products->min('offer_price'))) ? 0 : floor($products->min('offer_price')) }}"
                            max="{{ floor($products->max('offer_price') * 2) }}"
                        >
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
<script>
    // Lấy tất cả các phần tử có class "active"
    const activeElements = document.querySelectorAll('.active');

    // Lắng nghe sự kiện click trên các phần tử có class "active"
    activeElements.forEach(element => {
        element.addEventListener('click', function() {
            // Lấy phần tử ul tiếp theo của phần tử được click
            const dropdown = this.nextElementSibling;

            // Kiểm tra nếu dropdown đang hiển thị thì ẩn nó, ngược lại thì hiển thị
            if (dropdown.style.display === 'none') {
                dropdown.style.display = 'block';
            } else {
                dropdown.style.display = 'none';
            }
        });
    });
</script>

<script>
    const rangeInput = document.getElementById('customRange1');
    const valueDisplay = document.getElementById('value-display');
    const minPrice = document.getElementById('minPrice');
    const submitFindPrice = document.getElementById('submitFindPrice');
    const currentURL = new URL(window.location.href);

    function formatNumber(num) {
        return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }

    minPrice.textContent = formatNumber({{ empty(floor($products->min('offer_price'))) ? 0 : floor($products->min('offer_price')) }});
    valueDisplay.textContent = formatNumber({{ floor($products->max('offer_price') * 2) }});

    function getPriceWhereUrl() {
        if (currentURL.searchParams.get('sort')) {
            const priceFillter = currentURL.searchParams.get('sort').toString();
            if (priceFillter > 0) {
                valueDisplay.textContent = formatNumber(priceFillter);
                rangeInput.value = priceFillter;
            }
        }
    }

    getPriceWhereUrl();

    function updateSubmitLink() {
        currentURL.searchParams.set('sort', rangeInput.value);
        submitFindPrice.href = currentURL.toString();
    }

    rangeInput.addEventListener('input', () => {
        valueDisplay.textContent = formatNumber(rangeInput.value);
        console.log("🚀 ~ rangeInput.addEventListener ~ rangeInput.value:", rangeInput.value)
        updateSubmitLink();
    });
</script>
