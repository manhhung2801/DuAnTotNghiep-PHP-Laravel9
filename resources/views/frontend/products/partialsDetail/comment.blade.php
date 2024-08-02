<style>
    .date {
        font-size: 11px
    }

    .comment-text {
        padding-left: 45px;
        font-size: 15px
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

<div class="col-8 mt-5 shadow-lg p-3 mb-5 bg-body-tertiary rounded">
    <h4 class="text-left pb-4">Hỏi và đáp</h4>
    <div class="d-flex justify-content-center row">
        <div class="">
            <div class="d-flex flex-column comment-section">
                <form class="comment_form row pb-4" method="POST" class="bg-light p-2"
                    onsubmit="return validateAndSubmitComment(event)">
                    @csrf
                    <div class="col-10">
                        <input type="hidden" name="user_id" value="{{ auth()->id() }}" class="user_id">
                        <input type="hidden" name="product_id" value="{{ $product->id }}" class="product_id">
                        <div class="d-flex flex-row align-items-center"><img class="rounded-circle px-1"
                                src="{{ asset('images\default-avatar.png') }}"
                                width="40">
                            <textarea id="comment_input" class="form-control shadow bg-body-tertiary rounded textarea" name="message"
                                placeholder="Bình luận của bạn về sản phẩm"></textarea>
                        </div>
                    </div>
                    <div class="col-2 mt-2 text-center">
                        <button class="btn btn-primary btn-sm shadow-none comment_submit_btn">Bình
                            luận</button>
                    </div>
                </form>
                <div id="comments-container">
                    @if (isset($comments) && $comments->count() > 0)
                        @foreach ($comments as $comment)
                            <div class="bg-white p-2 mb-2">
                                <div class="d-flex flex-row user-info justify-content-between align-items-center">
                                    <div class="d-flex flex-row user-info">
                                        <div class="bg-primary text-white fw-bold d-flex justify-content-center align-items-center rounded-circle mx-1" style="width: 40px; height: 40px;">{{ $comment->user->id === auth()->id() ? 'Bạn' : substr($comment->user->name, 0, 1) }}</div>
                                        <div
                                            class="d-flex flex-column justify-content-center">
                                            <span
                                                class="d-block fw-bold name">{{ $comment->user->id === auth()->id() ? 'Bạn' : $comment->user->name }}</span>

                                        </div>
                                    </div>
                                    <span class="date text-black-50 fw-bold">{{ $comment->created_at->diffForHumans(now()) }}</span>
                                </div>
                                <div class="comment-text mt-2">
                                    <p class=" shadow bg-body-tertiary rounded">{{ $comment->message }}</p>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="col-12 text-danger text-center comment_not_found pb-4">
                            Sản phẩm chưa có bình luận
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
