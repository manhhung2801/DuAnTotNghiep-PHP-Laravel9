<!-- stack dành cho nhúng link hoặc thư viện -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js "></script>


@stack('script_lib-js')


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
