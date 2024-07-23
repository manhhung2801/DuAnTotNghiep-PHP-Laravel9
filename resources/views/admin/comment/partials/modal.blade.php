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
    <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
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

                    <div class="col-12 mt-2">
                        <div class="d-flex justify-content-center row">
                            <div class="">
                                <div class="d-flex flex-column comment-section">
                                    <div id="comments-container" class="col-12"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
