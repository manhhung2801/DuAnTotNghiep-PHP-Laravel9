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
@stack('script')