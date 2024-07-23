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
                } else {
                    box.classList.remove('show');
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
                        // valueRamElement.textContent = ramValue.value;

                        // Đảm bảo nhãn của radio button được chọn có lớp 'selected-label'
                        var checkedLabel = document.querySelector('label[for="' + ramValue.id + '"]');
                        if (checkedLabel) {
                            checkedLabel.classList.add('selected-label');
                        }
                    }
                });
</script>
//search sản phẩm
<script>
    $(document).ready(function() {
        var timeoutId;

        $('#timkiem').keyup(function() {
            clearTimeout(timeoutId);
            timeoutId = setTimeout(function() {
                searchProducts();
            }, 500); // Chờ 500ms sau khi ngừng gõ để bắt đầu tìm kiếm
        });

        function searchProducts() {
            $('#result').html('');
            var search = $('#timkiem').val().trim();
            if (search !== '') {
                $('#result').css('display', 'inherit');
                var expression = new RegExp(search, "i");
                $.getJSON('/json/products.json', function(data) {
                    // Sắp xếp dữ liệu theo thời gian tạo mới nhất
                    data.sort(function(a, b) {
                        return new Date(b.created_at) - new Date(a.created_at);
                    });
                    // Mảng để lưu các sản phẩm thỏa mãn điều kiện tìm kiếm
                    var results = [];
                    // Lặp qua các sản phẩm và lưu vào mảng results nếu thỏa mãn điều kiện
                    $.each(data, function(key, value) {
                        if (value.name.search(expression) != -1) {
                            results.push(value);
                        }
                    });
                    // Hiển thị tối đa 10 sản phẩm đầu tiên trong mảng results
                    for (var i = 0; i < Math.min(results.length, 7); i++) {
                        var product = results[i];
                        $('#result').append(
                            '<li style="cursor:pointer;" class="list-group-item link-class d-flex"><img src="{{ asset('uploads/products') }}/' +
                            product.image +
                            '" width="30" height="30"/><div class="mx-2"><h4 style="font-size: 12px">' +
                            product.name +
                            '</h4> <span class="d-none">|</span><div class="d-flex" style="font-size: 10px; gap:5px"> <p>' +
                            parseFloat(product.offer_price).toLocaleString(
                                'vi-VN', {
                                    style: 'currency',
                                    currency: 'VND'
                                }).replace(/\u200B/g, '') +
                            '</p><p class="text-decoration-line-through text-danger">' +
                            parseFloat(product.price)
                            .toLocaleString( //chuyển đổi số thành chuỗi ngôn ngữ vn và định dạng tiền tệ
                                'vi-VN', {
                                    style: 'currency',
                                    currency: 'VND'
                                }).replace(/\u200B/g, '') +
                            '</p></div> </div> </li>'
                        );
                    }

                });
            } else {
                $('#result').css('display', 'none');
            }
        }

        $('#result').on('click', 'li', function() {
            var click_text = $(this).text().split('|');
            $('#timkiem').val($.trim(click_text[0]));
            $('#result').html('');
            $('#result').css('display', 'none');
        });
    });
</script>

