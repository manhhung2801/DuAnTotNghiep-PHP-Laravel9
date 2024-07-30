<!-- stack dành cho nhúng link hoặc thư viện -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js "></script>
<script defer src="https://cdn.jsdelivr.net/gh/artru-git/artru-aio@latest/artru-smoothscroll.min.js"></script>



<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>

<!-- Alert Sweet -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.1/dist/sweetalert2.all.min.js"></script>

@stack('script_lib-js')

<!-- chứa các ajax -->
@include('frontend.layouts.ajax')

<script>
    // Loading
    window.addEventListener("load", () => {
        const preloader = document.querySelector(".loader-container");
        preloader.classList.add("unactive")
    })
</script>

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
{{-- search sản phẩm --}}
<script>
    $(document).ready(function() {
        var typingTimer; // Timer identifier
        var doneTypingInterval = 3000; // Time in milliseconds (3 seconds)

        // On keyup, start the countdown
        $('#searchInput').on('keyup', function() {
            clearTimeout(typingTimer); // Clear the previous timer

            var searchKeyword = $(this).val().trim();
            if (searchKeyword.length === 0) {
                $('#result').empty().hide();
                return;
            }

            // Set a new timer
            typingTimer = setTimeout(function() {
                $('#searchForm').submit(); // Trigger form submission after 3 seconds
            }, doneTypingInterval);
        });
        //
        $('#searchForm').on('submit', function(e) {
            e.preventDefault(); // Ngăn chặn việc làm mới trang
            var searchKeyword = $('#searchInput').val().trim();

            if (searchKeyword.length === 0) {
                $('#result').empty().hide(); // Ẩn kết quả nếu không có từ khóa tìm kiếm
                return;
            }

            $.ajax({
                url: "{{ route('ajax.search') }}", // Đảm bảo URL đúng
                method: 'GET',
                data: {
                    search: searchKeyword
                },
                success: function(data) {
                    var resultList = $('#result');
                    resultList.empty(); // Xóa kết quả trước đó

                    if (data.products.length > 0) {
                        $.each(data.products, function(index, product) {
                            // Tạo đường dẫn cho sản phẩm
                            var productUrl = '/san-pham/' + product.cat + '/' +
                                product.sub + '/' + product.child + '/' + product
                                .slug;

                            // Tạo đường dẫn cho hình ảnh
                            var imageUrl = '{{ asset('uploads/products') }}/' +
                                product.image;

                            // Tạo phần tử danh sách cho mỗi sản phẩm với hình ảnh, tên và giá
                            var listItem =
                                '<li class="list-group-item d-flex align-items-start" style="cursor:pointer;">' +
                                '<a href="' + productUrl +
                                '" class="d-flex w-100 text-decoration-none">' +
                                '<img src="' + imageUrl + '" alt="' + product.name +
                                '" style="width: 40px; height: 40px; object-fit: cover; margin-right: 15px; border-radius: 5px;">' +
                                '<div class="d-flex flex-column  w-100">' +
                                '<h4 style="font-size: 16px; margin: 0;">' + product
                                .name + '</h4>' +
                                '<div style="font-size: 14px;">' +
                                (product.offer_price > 0 ?
                                    '<span style="color: red; font-weight: bold;">' +
                                    parseFloat(product.offer_price).toLocaleString(
                                        'vi-VN', {
                                            style: 'currency',
                                            currency: 'VND'
                                        }).replace(/\u200B/g, '') +
                                    '</span> ' +
                                    '<span style="text-decoration: line-through; color: #888;">' +
                                    parseFloat(product.price).toLocaleString(
                                        'vi-VN', {
                                            style: 'currency',
                                            currency: 'VND'
                                        }).replace(/\u200B/g, '') +
                                    '</span>' :
                                    '<span>' +
                                    parseFloat(product.price).toLocaleString(
                                        'vi-VN', {
                                            style: 'currency',
                                            currency: 'VND'
                                        }).replace(/\u200B/g, '') +
                                    '</span>') +
                                '</div>' +
                                '</div>' +
                                '</a>' +
                                '</li>';

                            resultList.append(listItem);
                        });

                        resultList.show(); // Hiển thị danh sách kết quả
                    } else {
                        resultList.empty().hide(); // Ẩn kết quả nếu không có sản phẩm nào
                    }
                },
                error: function(xhr, status, error) {
                    console.error("AJAX Error: ", status, error);
                    // Xử lý lỗi nếu có
                    $('#result').empty().hide(); // Ẩn kết quả nếu có lỗi
                }
            });
        });

        $('#searchInput').on('keyup', function() {
            var searchKeyword = $(this).val().trim();
            if (searchKeyword.length === 0) {
                $('#result').empty().hide(); // Ẩn kết quả nếu không có từ khóa tìm kiếm
                return;
            }

            $('#searchForm').submit(); // Gửi form khi người dùng nhập từ khóa
        });
    });
</script>

{{-- js trang home price --}}
