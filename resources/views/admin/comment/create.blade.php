@extends('admin.layouts.master')

@section('title', 'Tạo sản phẩm')

@section('content')
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Sản phẩm</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Tạo sản phẩm</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->

    <div class="card">
        <div class="card-header">
            <h6 class="mt-2 mb-0 text-uppercase float-start">Tạo sản phẩm</h6>
            <a href="{{ route('admin.product.index') }}" class="btn btn-primary float-end">Back</a>
        </div>
        <div class="card-body">
            <form class="row g-3" action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-lg-6 mb-3">
                    <label for="name" class="form-label">Tên sản phẩm</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Tên sản phẩm..." value="{{ old('name') }}">
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="sku" class="form-label">SKU</label>
                    <input type="text" class="form-control" id="sku" name="sku" placeholder="Sku" value="{{ old('sku') }}">
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" placeholder="slug" value="{{ old('slug') }}">
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="qty" class="form-label">Số lượng</label>
                    <input type="text" class="form-control" id="qty" name="qty" placeholder="Số lượng..." value="{{ old('qty') }}">
                </div>
                <div class="row mt-3">
                    <div class="col-lg-6 mb-3">
                        <label for="image" class="form-label">Hình ảnh</label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/*">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="image_gallery" class="form-label">Hình ảnh phụ</label>
                        <input type="file" class="form-control" id="image_gallery" name="image_gallery[]" multiple accept="image/*">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-4 mb-3">
                        <label for="price" class="form-label">Giá sản phẩm</label>
                        <input type="text" class="form-control" id="price" name="price" placeholder="Giá giảm..." value="{{ old('price') }}">
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label for="offer_price" class="form-label">Giảm giá</label>
                        <input type="text" class="form-control" id="offer_price" name="offer_price" placeholder="Giảm giá..." value="{{ old('offer_price') }}">
                    </div>

                    <div class="col-lg-4 mb-3">
                        <label for="weight" class="form-label">Cân nặng (KG)</label>
                        <input type="number" class="form-control" id="weight" name="weight" placeholder="Cân năng..." value="{{ old('weight') }}">
                    </div>

                    <div class="col-lg-4 mb-3">
                        <label for="offer_start_date" class="form-label">Ngày bắt đầu giảm</label>
                        <input type="date" class="form-control" id="offer_start_date" name="offer_start_date" value="{{ old('offer_start_date') }}">
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label for="offer_end_date" class="form-label">Ngày kết thúc giảm</label>
                        <input type="date" class="form-control" id="offer_end_date" name="offer_end_date" value="{{ old('offer_end_date') }}">
                    </div>

                    <div class="col-lg-4 mb-3">
                        <label for="view" class="form-label">Lượt xem</label>
                        <input type="number" class="form-control" id="view" name="views" value="0" value="{{ old('views') }}">
                    </div>

                </div>
                <div class="row mt-3">
                    <div class="col-lg-4 mb-3">
                        <label for="category" class="form-label">Danh mục</label>
                        <select id="category" class="form-select main-category" name="category_id">
                            <option>Chọn danh mục</option>
                            @foreach ($category as $cate )
                            <option value="{{$cate->id}}">{{$cate->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label for="sub_category" class="form-label">Danh mục phụ</label>
                        <select id="sub_category" class="form-select sub-category" name="sub_category_id">
                        </select>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label for="child_category" class="form-label">Danh mục con</label>
                        <select id="child_category" class="form-select child-category" name="child_category_id">
                        </select>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-4 mb-3">
                        <label for="video_link" class="form-label">Video Upload</label>
                        <input type="url" class="form-control" id="video_link" name="video_link" placeholder="https://example.com" pattern="https://.*" value="{{ old('video_link') }}">
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label for="product_type" class="form-label">Kiểu sản phẩm</label>
                        <input type="text" class="form-control" id="product_type" name="product_type" placeholder="Mới hoặc giảm giá..." value="{{ old('product_type') }}">
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label class="form-label">Trạng thái: </label>
                        <div class="radio-select">
                            <input class="form-check-input" id="active" type="radio" value="1" name="status" checked>
                            <label class="form-check-label me-4" for="active">Hoạt động</label>
                            <input class="form-check-input" id="inactive" type="radio" value="0" name="status">
                            <label class="form-check-label" for="inactive">Không hoạt động</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-6 mb-3">
                        <label for="seotitle" class="form-label">SEO Title</label>
                        <input type="text" class="form-control" id="seotitle" name="seo_title" value="{{ old('seo_title') }}">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="seodesc" class="form-label">SEO Meta</label>
                        <input type="text" class="form-control" id="seodesc" name="seo_description" value="{{ old('seo_description') }}">
                    </div>
                </div>
                <div class="col-lg-12 mb-3">
                    <label for="editor" class="form-label">Mô tả</label>
                    <textarea class="form-control description" name="long_description" id="editor" value="{{ old('long_description') }}"></textarea>
                </div>
                <div class="col-lg-12 mb-3">
                    <label for="short_description" class="form-label">Mô tả ngắn</label>
                    <textarea class="form-control description" name="short_description" id="short_description" value="{{ old('short_description') }}"></textarea>
                </div>
                <div class="col-lg-12 mb-3">
                    <label for="editor" class="form-label">Thông tin sản phẩm</label>
                    <textarea class="form-control description" name="specifications" id="specifications" value="{{ old('specifications') }}"></textarea>
                </div>
                <div class="col-lg-2">
                    <div class="d-grid align-items-center gap-3">
                        <button type="submit" class="btn btn-primary px-4">Tạo sản phẩm</button>
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
        placeholder: 'Ghi gì đó!!',
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
    CKEDITOR.ClassicEditor.create(document.getElementById("short_description"), editorConfig).catch(error => {
        console.error(error);
    });
    CKEDITOR.ClassicEditor.create(document.getElementById("specifications"), editorConfig).catch(error => {
        console.error(error);
    });
</script>
@endsection
@push('scripts')
<script>
    $(document).ready(function() {
        $('body').on('change', ".main-category, .sub-category", function(e) {
            let id = $(this).val();

            let url = "";
            if ($(this).hasClass('main-category')) {
                url = "{{ route('admin.get-subcategories') }}"
            } else {
                url = "{{ route('admin.get-childcategories') }}"
            }
            let targetSelect = $(this).hasClass('main-category') ? $('.sub-category') : $('.child-category')
            $.ajax({
                method: "GET",
                url: url,
                data: {
                    id: id
                },
                success: function(data) {
                    targetSelect.html('<option value="">Chọn</option>')
                    $.each(data, function(i, item) {
                        targetSelect.append(`<option value="${item.id}">${item.name}</option>`);
                    })
                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            });
        })
    })
</script>
@endpush