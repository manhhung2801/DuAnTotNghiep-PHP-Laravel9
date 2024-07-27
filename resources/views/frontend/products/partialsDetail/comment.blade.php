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

<div class="col-6 mx-auto mt-5">
    <h4 class="text-center pb-4">Bình luận</h4>
    <div class="d-flex justify-content-center row">
        <div class="">
            <div class="d-flex flex-column comment-section">

                <div id="comments-container">
                    @if (isset($comments) && $comments->count() > 0)
                        @foreach ($comments as $comment)
                            <div class="bg-white p-2">
                                <div class="d-flex flex-row user-info">
                                    <img class="rounded-circle" src="{{ asset('images\default-avatar.png') }}"
                                        width="40">
                                    <div class="d-flex flex-column justify-content-{{ $comment->user->id === auth()->id() ? "end" : "start"}} ml-2">
                                        <span class="d-block font-weight-bold name">{{ $comment->user->id === auth()->id() ? "Bạn" : $comment->user->name}}</span>
                                        <span class="date text-black-50">{{ $comment->created_at }}</span>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <p class="comment-text">{{ $comment->message }}</p>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="col-12 text-danger text-center comment_not_found pb-4">
                            Sản phẩm chưa có bình luận
                        </div>
                    @endif
                </div>

                <form class="comment_form" method="POST" class="bg-light p-2"
                    onsubmit="return validateAndSubmitComment(event)">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ auth()->id() }}" class="user_id">
                    <input type="hidden" name="product_id" value="{{ $product->id }}" class="product_id">
                    <div class="d-flex flex-row align-items-start"><img class="rounded-circle"
                            src="{{ asset('images\default-avatar.png') }}" width="40">
                        <textarea id="comment_input" class="form-control ml-1 shadow-none textarea" name="message"
                            placeholder="Bình luận của bạn về sản phẩm"></textarea>
                    </div>
                    <div class="mt-2 text-center">
                        <button class="btn btn-primary btn-sm shadow-none comment_submit_btn">Bình
                            luận</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
