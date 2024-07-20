<style>
    .date {
        font-size: 11px
    }

    .comment-text {
        font-size: 12px
    }

    .fs-12 {
        font-size: 12px
    }

    .shadow-none {
        box-shadow: none
    }

    .name {
        color: #007bff
    }

    .cursor:hover {
        color: blue
    }

    .cursor {
        cursor: pointer
    }

    .textarea {
        resize: none
    }
</style>

<!-- Modal -->
<div class="modal fade" id="commentDetails" tabindex="-1" aria-labelledby="commentDetails" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="commentDetails">Chi tiết bình luận sản phẩm
                    @if (isset($commentDetail))
                        {{ $commentDetail[0]->product->name }}
                    @endif
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <style>
                        .date {
                            font-size: 11px
                        }

                        .comment-text {
                            font-size: 12px
                        }

                        .fs-12 {
                            font-size: 12px
                        }

                        .shadow-none {
                            box-shadow: none
                        }

                        .name {
                            color: #007bff
                        }

                        .cursor:hover {
                            color: blue
                        }

                        .cursor {
                            cursor: pointer
                        }

                        .textarea {
                            resize: none
                        }
                    </style>

                    <div class="col-12 mt-5">
                        <div class="d-flex justify-content-center row">
                            <div class="">
                                <div class="d-flex flex-column comment-section">

                                    <div id="comments-container"></div>

                                    <div class="bg-white">
                                        <div class="d-flex flex-row fs-12">
                                            <div class="like p-2 cursor"><i class="fa fa-thumbs-o-up"></i><span
                                                    class="ml-1">Like</span>
                                            </div>
                                            <div class="like p-2 cursor"><i class="fa fa-commenting-o"></i><span
                                                    class="ml-1">Comment</span></div>
                                            <div class="like p-2 cursor"><i class="fa fa-share"></i><span
                                                    class="ml-1">Share</span></div>
                                        </div>
                                    </div>
                                    <form class="comment_form" method="POST" class="bg-light p-2"
                                        onsubmit="return validateAndSubmitComment(event)">
                                        @csrf
                                        <input type="hidden" name="user_id" value="{{ auth()->id() }}"
                                            class="user_id">
                                        <input type="hidden" name="product_id"
                                            class="product_id">
                                        <div class="d-flex flex-row align-items-start"><img class="rounded-circle"
                                                src="{{ asset('images\default-avatar.png') }}" width="40">
                                            <textarea id="comment_input" class="form-control ml-1 shadow-none textarea" name="message"
                                                placeholder="Bình luận của bạn về sản phẩm"></textarea>
                                        </div>
                                        <div class="mt-2 text-right">
                                            <button class="btn btn-primary btn-sm shadow-none comment_submit_btn">Bình
                                                luận</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>

