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
                        $('.cart-count').text(data.cart_count);
                    }
                    if (data.status == false) {
                        Toast.fire({
                            icon: "error",
                            title: data.message
                        });
                    }
                    $('.cart-count').text(data.cart_count);
                },
                error: function(xhr, status, error) {
                    Toast.fire({
                        icon: "error",
                        title: "Đã có lỗi xảy ra. Vui lòng liên hệ cho chúng tôi!"
                    });
                }
            })
        })
    })
</script>
@stack('ajax')



<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('body').on('click', '.comment_submit_btn', function(e) {
            e.preventDefault();

            // Closest form to the comment submit button
            let form = $(this).closest('.comment_form');

            let productId = form.find('.product_id').val();

            let userId = form.find('.user_id').val();
            let message = form.find('#comment_input').val();

            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
            });

            if (!userId) {
                Toast.fire({
                    icon: "error",
                    title: "Vui lòng đăng nhập để thực hiện chức năng bình luận"
                });

            }
            try {
                if (!message) {
                    Toast.fire({
                        icon: "error",
                        title: "Vui lòng nhập bình luận trước khi submit"
                    });
                }

            } catch (error) {
                console.error("Error in commentPost function:", error);
                Toast.fire({
                    icon: "error",
                    title: error.response.data.errors.message[0]
                });
            }

            $.ajax({
                url: "{{ route('commentPost') }}",
                type: 'POST',
                data: {
                    message: message,
                    user_id: userId,
                    product_id: productId,
                },
                success: function(data) {

                    const Toast = Swal.mixin({
                        toast: true,
                        position: "top-end",
                        showConfirmButton: false,
                        timer: 3000,
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

                    form.find('#comment_input').val('');
                    renderComments(productId);
                },
                error: function(error) {
                    console.log("🚀 ~ $ ~ error:", error)

                    const Toast = Swal.mixin({
                        toast: true,
                        position: "top-end",
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                    });
                    Toast.fire({
                        icon: "error",
                        title: error.responseJSON.message
                    });
                }
            });
        });
    });
</script>
@stack('ajax')



<script>
    function renderComments(productId) {
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: `/comments/${productId}`,
                type: 'GET',
                success: function(response) {
                    let commentsHtml = '';

                    if (response.data && response.data.length > 0) {
                        $('#comments-container').empty();

                        response.data.forEach(function(comment) {
                            commentsHtml += `
                                <div class="bg-white p-2 mb-2">
                                    <div class="d-flex flex-row user-info justify-content-between align-items-center">
                                        <div class="d-flex flex-row user-info">
                                            <div class="bg-primary text-white fw-bold d-flex justify-content-center align-items-center rounded-circle mx-1" style="width: 40px; height: 40px;">${comment?.user?.id === {{ auth()->id() ?? 0 }} ? 'Bạn' : comment?.user?.name?.substring(0, 1) }</div>
                                            <div
                                                class="d-flex flex-column justify-content-center">
                                                <span
                                                    class="d-block fw-bold name">${comment?.user?.id === {{ auth()->id() ?? 0 }} ? `Bạn` : comment?.user?.name}</span>

                                            </div>
                                        </div>
                                        <span class="date text-black-50 fw-bold">${comment.created_at}</span>
                                    </div>
                                    <div class="comment-text mt-2">
                                        <p class=" shadow bg-body-tertiary rounded">${comment.message}</p>
                                    </div>
                                </div>
                            `;
                        });
                    } else {
                        commentsHtml = `
                            <div class="alert alert-info text-center">
                                This product doesn't have any comments yet.
                            </div>
                        `;
                    }
                    $('#comments-container').html(commentsHtml);
                }
            });
        })
    }
</script>

@stack('ajax')


