<!-- stack dành cho nhúng link hoặc thư viện -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/gh/artru-git/artru-aio@latest/artru-smoothscroll.min.js"></script>



<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>

<!-- Alert Sweet -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.1/dist/sweetalert2.all.min.js"></script>

@yield('script')

<!-- chứa các ajax -->
@include('frontend.layouts.ajax')
@stack('script_lib-js')

<script>
    $(document).ready(function() {
        const $productLink = $('#product-link');
        const $dropdownMenu = $productLink.next();

        $productLink.on('mouseover', function() {
            $dropdownMenu.addClass('show');
        });

        $productLink.on('click', function() {
            window.location.href = this.href;
        });

        $(document).on('click', function(event) {
            if (!$productLink.is(event.target) && $productLink.has(event.target).length === 0) {
                $dropdownMenu.removeClass('show');
            }
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const boxes = document.querySelectorAll('.scroll_animation');

        function checkBoxes() {
            const triggerBottom = window.innerHeight + 20;
            boxes.forEach(box => {
                const boxTop = box.getBoundingClientRect().top;
                if (boxTop < triggerBottom) {
                    box.classList.add('show');
                }
            });
        }
        window.addEventListener('scroll', checkBoxes);
        checkBoxes(); // Kiểm tra khi tải trang
    });
</script>
<!-- script custom -->
<script>
    let bigImg = document.querySelector('.big-img img');

    function showImg(pic) {
        bigImg.src = pic;
        document.querySelectorAll('.small-img img').forEach(img => {
            img.classList.remove('active');
        });
        event.target.classList.add('active');
    }
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var showMoreBtn = document.querySelector('.btn--view-more');
        var productReviewContent = document.querySelector('.ba-text-fpt.has-height');
        var moreText = document.querySelector('.more-text');
        var lessText = document.querySelector('.less-text');

        // Kiểm tra xem tất cả các yếu tố cần thiết có tồn tại không
        if (showMoreBtn && productReviewContent && moreText && lessText) {
            showMoreBtn.addEventListener('click', function() {
                if (productReviewContent.style.height === '360px' || productReviewContent.style
                    .height === '') {
                    productReviewContent.style.height = 'auto';
                    moreText.classList.add('d-none');
                    lessText.classList.remove('d-none');
                } else {
                    productReviewContent.style.height = '360px';
                    moreText.classList.remove('d-none');
                    lessText.classList.add('d-none');
                }
            });
        }
    });
</script>
<script>
    //
    function changeColor(element) {
        var color = element.getAttribute('data-value');
        var header = document.querySelector('.header .value-properties');
        header.textContent = color;
        window.selectedColor = color;

        var labels = document.querySelectorAll('.swatch-element input[type="radio"]');
        labels.forEach(function(input) {
            input.checked = false;
            if (input.id === color) {
                input.checked = true;
            }
        });

        var swatches = document.querySelectorAll('.swatch-element label');
        swatches.forEach(function(label) {
            label.style.border = "none";
            if (label.getAttribute('for') === color) {
                label.style.border = "2px solid black";
            }
        });
    }

    // Gọi hàm changeColor khi trang được tải
    document.addEventListener('DOMContentLoaded', function() {
        // Lấy màu sắc mặc định
        var defaultColorElement = document.querySelector('.swatch-element.color');
        if (defaultColorElement) {
            changeColor(defaultColorElement);
        }
    });
</script>
{{-- ram --}}
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var ramOptions = document.querySelectorAll('input[name="selectInputRam"]');
        var valueRamElement = document.querySelector('.value-ram');

        ramOptions.forEach(function(option) {
            option.addEventListener("change", function() {
                var selectedValue = document.querySelector(
                    'input[name="selectInputRam"]:checked').value;
                valueRamElement.textContent = selectedValue;

                //Xóa lớp 'selected-label' khỏi tất cả các nhãn".
                var labels = document.querySelectorAll('.bg__ram');
                labels.forEach(function(label) {
                    label.classList.remove('selected-label');
                });

                //Thêm lớp 'selected-label' vào nhãn của radio button được chọn".
                var checkedLabel = document.querySelector('label[for="' + option
                    .id + '"]');
                if (checkedLabel) {
                    checkedLabel.classList.add('selected-label');
                }
            });
            // Hiển thị giá trị ban đầu
            var selectInput = document.querySelector('input[name="selectInputRam"]:checked');
            if (initialValue) {
                var initialValue = selectInput.value;
                valueRamElement.textContent = initialValue;
            }
            // Hiển thị giá trị ban đầu khi trang tải xong
            var ramValue = document.querySelector('input[name="selectInputRam"]:checked');
            if (ramValue) {
                valueRamElement.textContent = ramValue.value;

                // Đảm bảo nhãn của radio button được chọn có lớp 'selected-label'
                var checkedLabel = document.querySelector('label[for="' + ramValue.id + '"]');
                if (checkedLabel) {
                    checkedLabel.classList.add('selected-label');
                }
            }
        })
    });
</script>


<script>
    var flash_sales = document.querySelectorAll(".flash-sales");
    var flash_sale = document.querySelectorAll(".flash-sale");
    var compare_price = document.querySelectorAll(".CouponsPrice_old");
    var compare_price_old1 = document.querySelectorAll(".CouponsPrice_new1");
    var compare_price_old2 = document.querySelectorAll(".CouponsPrice_new2");
    for (var i = 0; i < flash_sale.length; i++) {
        if (flash_sales[i].textContent.trim() == "0") {
            flash_sale[i].style.display = "none";
            if (compare_price[i]) {
                compare_price[i].style.display = "none";
                compare_price_old1[i].style.display = "none";

            }

        } else {
            flash_sale[i].style.display = "block";
            if (compare_price[i]) {
                compare_price[i].style.display = "block";
                compare_price_old2[i].style.display = "none";
                compare_price_old1[i].style.display = "block";
            }
        }
    }
</script>
<script>
    $(document).ready(function() {
        let timeout;
        $('#product-search').on('input', function() {
            let query = $(this).val();
            clearTimeout(timeout);
            timeout = setTimeout(function() {
                if (query.length >= 2) {
                    $.ajax({
                        method: "GET",
                        url: "{{ route('search') }}",
                        data: {
                            query: query
                        },
                        success: function(response) {
                            console.log(response);
                            let results = $('#result');
                            var categoryHTML = "";
                            // var subCategoryHTML = "";
                            var productHTML = "";
                            results.empty();

                            if (response.products && response.products.length > 0) {
                                response.categories.forEach(function(category) {
                                    categoryHTML += `<li class="list-group-item"> 
                                                    <a href="{{ url('/san-pham/${category.slug}') }}" class="text-decoration-none" style="font-size:13px">
                                                       ${category.name}
                                                    </a>
                                                </li>`;
                                });
                                categoryHTML =
                                    `<div class="ttitle"><div class="viewed">Có phải bạn muốn tìm</div></div>
                                    ${categoryHTML}`;
                                //
                                // response.sub_categories.forEach(function(
                                //     sub_Category) {
                                //     subCategoryHTML += `<li class="list-group-item"> 
                                //                     <a href="{{ url('/san-pham/${sub_Category.slug_category}/${sub_Category.slug}') }}" class="text-decoration-none" style="font-size:13px">
                                //                        ${sub_Category.name}
                                //                     </a>
                                //                 </li>`;
                                // });

                                // subCategoryHTML =
                                //     `<div class="ttitle"><div class="viewed">Danh mục loại sản phẩm</div></div>
                                //     ${subCategoryHTML}`;


                                response.products.forEach(function(product) {
                                    productHTML += `
                                    <li class="list-group-item autocomplete-item" data-id="${product.id}">
                                        <img src="{{ asset('uploads/products/${product.image}') }}" alt="${product.name}">
                                        <div>
                                            <h3 class="pt-1"><a style="font-size: 12px;" class="text-decoration-none " href="{{ url('/san-pham/${product.category.slug}/${product.sub_category.slug}/${product.child_category.slug}/${product.slug}.html') }}">${product.name}</a></h3>
                                        </div>
                                    </li>`;
                                });

                                productHTML =
                                    `<div class="ttitle"><div class="viewed">Sản phẩm gợi ý</div></div>
                                    ${productHTML}`;

                                results.append(categoryHTML +
                                    productHTML);

                                results.addClass('show');
                            } else {
                                $('#result').empty().removeClass('show');
                                results.append(
                                    '<span class="pt-2 text-center text-danger ">Sản phẩm đang cập nhật. Vui lòng quay lại sau</span>'
                                );
                                results.addClass('show');
                            }
                        },
                        error: function(xhr) {
                            console.error(xhr.responseText);
                        }
                    });
                } else {
                    $('#result').empty().removeClass('show');
                }
            }, 250);
        });
        // nhấp chuột ra ngoài thì #result ẩn đi
        $(document).on('click', function(event) {
            if (!$(event.target).closest('#product-search, #result').length) {
                $('#result').empty().removeClass('show');
            }
        });
    });
</script>
