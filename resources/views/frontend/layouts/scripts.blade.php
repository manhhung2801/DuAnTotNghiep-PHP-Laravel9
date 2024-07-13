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
            if (productReviewContent.style.height === '360px' || productReviewContent.style.height ===
                '') {
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
            var ramOptions = document.querySelectorAll('input[name="ram"]');
            var valueRamElement = document.querySelector('.value-ram');

            ramOptions.forEach(function(option) {
                option.addEventListener("change", function() {
                    var selectedValue = document.querySelector('input[name="ram"]:checked').value;
                    valueRamElement.textContent = selectedValue;

                  //Xóa lớp 'selected-label' khỏi tất cả các nhãn".
                    var labels = document.querySelectorAll('.bg__ram');
                    labels.forEach(function(label) {

                        label.classList.remove('selected-label');
                    });

                    //Thêm lớp 'selected-label' vào nhãn của radio button được chọn".
                    var checkedLabel = document.querySelector('label[for="' + option.id + '"]');
                    if (checkedLabel) {
                        checkedLabel.classList.add('selected-label');
                    }
                });
            });
            // Hiển thị giá trị ban đầu
            var initialValue = document.querySelector('input[name="ram"]').value;
            valueRamElement.textContent = initialValue;
        });
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
                } else {
                    itemList.classList.toggle("d-block");
                }
            });
        });
    });
</script>
<script >
    console.log('vnfv');
    // $(document).ready(function() {
    //     console.log('vnfv');
    //     $('#body').on('change','tim_kiem',function() {
    //         alert('oki');
    //     })
    // })
</script>


