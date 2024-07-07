<!-- stack dành cho nhúng link hoặc thư viện -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js "></script>
<script defer src="https://cdn.jsdelivr.net/gh/artru-git/artru-aio@latest/artru-smoothscroll.min.js"></script>

<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

<!-- Alert Sweet -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.1/dist/sweetalert2.all.min.js"></script>

@stack('script_lib-js')

<!-- chứa các ajax -->
@include('frontend.layouts.ajax')

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

        showMoreBtn.addEventListener('click', function() {
            if (productReviewContent.style.height === '360px' || productReviewContent.style.height === '') {
                productReviewContent.style.height = 'auto';
                moreText.classList.add('d-none');
                lessText.classList.remove('d-none');
            } else {
                productReviewContent.style.height = '360px';
                moreText.classList.remove('d-none');
                lessText.classList.add('d-none');
            }
        });
    });
</script>
<script>
    function changeColor(element) {
        // Lấy giá trị màu sắc từ thuộc tính data-value của div được bấm
        var color = element.getAttribute('data-value');

        // Đổi màu cho header theo màu sắc mới được chọn
        var header = document.querySelector('.header .value-properties');
        header.textContent = color;

        // Cập nhật màu và border cho các label
        var labels = document.querySelectorAll('.swatch-element label');
        labels.forEach(function(label) {
            if (label.getAttribute('for') === element.querySelector('input').id) {
                label.style.border = "2px solid black";
            } else {
                label.style.border = "none";
            }
        });
    }
</script>
<script>
    // ẩn hiện nút + responsize footer
    document.addEventListener("DOMContentLoaded", function() {
        var showButtons = document.querySelectorAll(".show-pages");
        showButtons.forEach(function(button) {
            button.addEventListener("click", function() {
                var itemWrapper = button.closest(".footer-item");
                var itemList = itemWrapper.querySelector("ul.itemCard");
                if (itemList) {
                    itemList.classList.toggle("d-none");
                }else{
                    itemList.classList.toggle("d-block");
                }
            });
        });
    });
</script>

@stack('script')