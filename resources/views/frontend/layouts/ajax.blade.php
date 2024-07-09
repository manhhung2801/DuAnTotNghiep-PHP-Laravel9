<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('body').on('click', '.btn-addToCart', function(e) {
            e.preventDefault();
            // closest form gần nút addcart nhất
            let form = $(this).closest('.formCart');
            let id = form.find('.productId').val();
            let quantity = form.find('.qtym').val()
            $.ajax({
                url: "{{ route('cart.store') }}",
                type: 'POST',
                data: {
                    id: id,
                    quantity: quantity,
                    color: window.selectedColor
                },
                success: function(data) {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: "top-end",
                        showConfirmButton: false,
                        timer: 1000,
                        timerProgressBar: true,
                    });
                    if (data.status == true) {
                        Toast.fire({
                            icon: "success",
                            title: data.message
                        });
                    }
                    if (data.status == false) {
                        Toast.fire({
                            icon: "error",
                            title: data.message
                        });
                    }
                    $('.cart-count').text(data.cart_count);
                 
                },
                error: function(error) {
                    alert('Lỗi: '.error)
                }
            })
        })
    })
</script>
@stack('ajax')