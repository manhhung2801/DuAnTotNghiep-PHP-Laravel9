<div class="sort-cate clearfix">
    <div class="sort-cate-right">
        <h3 class="active">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sort-alpha-down" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371h-1.781zm1.57-.785L11 2.687h-.047l-.652 2.157h1.351z"></path>
                <path d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645V14zM4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293V2.5z"></path>
            </svg> Xếp theo
        </h3>
        <ul style="margin-bottom: 0px;padding-left: 0px" class="sort-options p-2">
            <li class="btn-quick-sort  list-group-item p-0">
                <a title="Mặc định">Mặc định</a>
            </li>
            <li class="btn-quick-sort alpha-asc list-group-item p-0">
                <a title="Tên A-Z">Tên A-Z</a>
            </li>
            <li class="btn-quick-sort alpha-desc list-group-item p-0">
                <a title="Tên Z-A"><i></i>Tên Z-A</a>
            </li>
            <li class="btn-quick-sort position-desc list-group-item p-0">
                <a title="Hàng mới"><i></i>Hàng mới</a>
            </li>
            <li class="btn-quick-sort price-asc list-group-item p-0">
                <a title="Giá thấp đến cao"><i></i>Giá thấp đến cao</a>
            </li>
            <li class="btn-quick-sort price-desc list-group-item p-0">
                <a title="Giá cao xuống thấp"><i></i>Giá cao xuống thấp</a>
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