<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('body').on('click', '.btn-addToCart', function(e) {
            e.preventDefault();
            
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 1000,
                timerProgressBar: true,
            });

            // closest form gần nút addcart nhất
            let form = $(this).closest('.formCart')
            let id = form.find('.productId').val()
            let qty = form.find('.qtym').val()
            // lấy id variant item
            var color = $('input[name="selectInputColor"]:checked').attr('data-id');
            var ram = $('input[name="selectInputRam"]:checked').attr('data-id');
            var variants = [color !== undefined ? color : null, ram !== undefined ? ram : null];
            console.log(variants);
            $.ajax({
                url: "{{ route('cart.store') }}",
                type: 'POST',
                data: {
                    id: id,
                    qty: qty,
                    variants: variants != undefined ? variants : null,
                },
                success: function(data) {
                    if (data.status == true) {
                        Toast.fire({
                            icon: "success",
                            title: data.message
                        });
                        console.log(data.abc);
                        $('.cart-count').text(data.cart_count);
                    }
                    if (data.status == false) {
                        Toast.fire({
                            icon: "error",
                            title: data.message
                        });
                    }
                },
                error: function(xhr, status, error) {
                    Toast.fire({
                        icon: "error",
                        title: xhr.responseJSON.message
                    });
                }
            })
        })
    })
</script>
@stack('ajax')
