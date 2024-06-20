@extends('admin.layouts.master')

@section('title', 'Update Variant')

@section('content')
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Post Category</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Post Category</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->
    <div class="card">
        <div class="card-header">
            <h6 class="mt-2 mb-0 text-uppercase float-start">Update Post Category</h6>
            <a href="{{ route("admin.post.index") }}" class="btn btn-primary float-end">Back</a>
        </div>
        <div class="card-body">
            <form class="row g-3" action="{{ route('admin.post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="col-md-6">
                    <label for="category" class="form-label">Post Categories</label>
                    <select id="category" class="form-select main-category" name="category_id">
                        <option>Select</option>
                        @foreach ($post_categories as $post_categories )
                        <option {{ $post->category_id == $post_categories->id ? "selected" : "" }} value="{{ $post_categories->id }}">{{ $post_categories->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="user" class="form-label">User Id</label>
                    <select id="user" class="form-select" name="user_id">
                        <option>Select</option>
                        @foreach ($user as $user )
                        <option {{ $post->user_id == $user->id ? "selected" : "" }} value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control" id="image" name="image" accept="image/*">
                    <img src="{{ asset('uploads/post/'.$post->image) }}" alt="{{$post->image}}" width="50px">
                    <input type="hidden" value="{{$post->image}}" name="image_old">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="name" class="form-label">Title</label>
                    <input type="text" class="form-control" id="name" name="title" placeholder="title" value="{{ $post->title }}">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="name" class="form-label">Content</label>
                    <input type="text" class="form-control" name="content" placeholder="title" value="{{ $post->content }}">
                </div>

                <div class="col-md-6">
                    <label for="input9" class="form-label">Status</label>
                    <select id="input9" class="form-select" name="status">
                        <option {{ $post->status == 1 ? "selected" : ""  }} value="1">Active</option>
                        <option {{ $post->status == 0 ? "selected" : ""  }} value="0">Inactive</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="input9" class="form-label">Hot</label>
                    <select id="input9" class="form-select" name="type">
                        <option {{ $post->type == 1 ? "selected" : ""  }} value="1">Bài Viết</option>
                        <option {{ $post->type == 0 ? "selected" : ""  }} value="0">Banner</option>
                    </select>
                </div>

                <div class="row mt-3">
                    <div class="col-md-6 mb-3">
                        <label for="seotitle" class="form-label">SEO Title</label>
                        <input type="text" class="form-control" id="seotitle" name="seo_title" value="{{ $post->seo_title }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="seodesc" class="form-label">SEO Description</label>
                        <input type="text" class="form-control" id="seodesc" name="seo_description" value="{{ $post->seo_description }}">
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="editor" class="form-label">Description</label>
                    <textarea class="form-control description" name="description" id="editor">{!! $post->description !!}</textarea>
                </div>
                <div class="col-md-2">
                    <div class="d-grid align-items-center gap-3">
                        <button type="submit" class="btn btn-primary px-4">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/super-build/ckeditor.js"></script>
<script>
    const editorConfig = {
        toolbar: {
            items: ['exportPDF', 'exportWord', '|', 'findAndReplace', 'selectAll', '|', 'heading', '|', 'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|', 'bulletedList', 'numberedList', 'todoList', '|', 'outdent', 'indent', '|', 'undo', 'redo', '-', 'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|', 'alignment', '|', 'link', 'uploadImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|', 'specialCharacters', 'horizontalLine', 'pageBreak', '|', 'textPartLanguage', '|', 'sourceEditing'],
            shouldNotGroupWhenFull: true
        },
        list: {
            properties: {
                styles: true,
                startIndex: true,
                reversed: true
            }
        },
        heading: {
            options: [{
                model: 'paragraph',
                title: 'Paragraph',
                class: 'ck-heading_paragraph'
            }, {
                model: 'heading1',
                view: 'h1',
                title: 'Heading 1',
                class: 'ck-heading_heading1'
            }, {
                model: 'heading2',
                view: 'h2',
                title: 'Heading 2',
                class: 'ck-heading_heading2'
            }, {
                model: 'heading3',
                view: 'h3',
                title: 'Heading 3',
                class: 'ck-heading_heading3'
            }, {
                model: 'heading4',
                view: 'h4',
                title: 'Heading 4',
                class: 'ck-heading_heading4'
            }, {
                model: 'heading5',
                view: 'h5',
                title: 'Heading 5',
                class: 'ck-heading_heading5'
            }, {
                model: 'heading6',
                view: 'h6',
                title: 'Heading 6',
                class: 'ck-heading_heading6'
            }]
        },
        placeholder: 'Long description!',
        fontFamily: {
            options: ['default', 'Arial, Helvetica, sans-serif', 'Courier New, Courier, monospace', 'Georgia, serif', 'Lucida Sans Unicode, Lucida Grande, sans-serif', 'Tahoma, Geneva, sans-serif', 'Times New Roman, Times, serif', 'Trebuchet MS, Helvetica, sans-serif', 'Verdana, Geneva, sans-serif'],
            supportAllValues: true
        },
        fontSize: {
            options: [10, 12, 14, 'default', 18, 20, 22],
            supportAllValues: true
        },
        htmlSupport: {
            allow: [{
                name: /.*/,
                attributes: true,
                classes: true,
                styles: true
            }]
        },
        htmlEmbed: {
            showPreviews: true
        },
        link: {
            decorators: {
                addTargetToExternalLinks: true,
                defaultProtocol: 'https://',
                toggleDownloadable: {
                    mode: 'manual',
                    label: 'Downloadable',
                    attributes: {
                        download: 'file'
                    }
                }
            }
        },
        mention: {
            feeds: [{
                marker: '@',
                feed: ['@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream', '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o', '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé', '@sugar', '@sweet', '@topping', '@wafer'],
                minimumCharacters: 1
            }]
        },
        removePlugins: ['AIAssistant', 'CKBox', 'CKFinder', 'EasyImage', 'MultiLevelList', 'RealTimeCollaborativeComments', 'RealTimeCollaborativeTrackChanges', 'RealTimeCollaborativeRevisionHistory', 'PresenceList', 'Comments', 'TrackChanges', 'TrackChangesData', 'RevisionHistory', 'Pagination', 'WProofreader', 'MathType', 'SlashCommand', 'Template', 'DocumentOutline', 'FormatPainter', 'TableOfContents', 'PasteFromOfficeEnhanced', 'CaseChange']
    };
    CKEDITOR.ClassicEditor.create(document.getElementById("editor"), editorConfig).catch(error => {
        console.error(error);
    });
</script>
@endsection