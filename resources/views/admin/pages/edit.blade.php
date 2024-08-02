@extends('admin.layouts.master')

@section('title', 'Cập nhật trang')

@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Trang</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-header">
                <h6 class="mt-2 mb-0 text-uppercase float-start">@yield('title')</h6>
                <a href="{{ route('admin.pages.index') }}" class="btn btn-primary float-end">Back</a>
            </div>
            <div class="card-body">
                <form class="row g-3" action="{{ route('admin.pages.update', $pages->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="col-md-6">
                        <label for="input1" class="form-label">Tên trang</label>
                        <input type="text" class="form-control" id="input1" name="name"
                            value="{{ $pages->name }}">
                    </div>
                    <div class="col-md-6 ">
                        <label for="input2" class="form-label">Danh mục trang</label>
                        <select id="input2" class="form-select main-information" name="page_category_id">
                            <option>Chọn danh mục</option>
                            @foreach ($pageCategories as $item)
                                <option value="{{ $item->id }}"
                                    {{ $item->id == $pages->page_category_id ? 'selected' : '' }}>{{ $item->name }}
                                </option>
                            @endforeach
                        </select>
                        </select>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-6 mb-3">
                            <label for="seotitle" class="form-label">Nội dung SEO</label>
                            <input type="text" class="form-control" id="seotitle" name="seo_title"
                                value="{{ $pages->seo_title }}">
                        </div>
                        <div class="col-md-6">
                            <label for="input7" class="form-label">Trạng thái</label>
                            <select id="input7" class="form-select" name="status">
                                <option {{ $pages->status == 1 ? 'selected' : '' }} value="1">Hoạt động</option>
                                <option {{ $pages->status == 0 ? 'selected' : '' }} value="0">Không hoạt động</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="seodesc" class="form-label"> Mô tả SEO</label>
                        <input type="text" class="form-control" id="seodesc" name="seo_description"
                            value="{{ $pages->seo_description }}">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="editor" class="form-label">Mô tả</label>
                        <textarea class="form-control description" name="long_description" id="editor">{!! $pages->long_description !!}</textarea>
                    </div>
                    <div class="col-md-2">
                        <div class="d-grid align-items-center gap-3">
                            <button type="submit" class="btn btn-primary px-4">Cập nhật</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/super-build/ckeditor.js"></script>
    <script>
        const editorConfig = {
            toolbar: {
                items: ['exportPDF', 'exportWord', '|', 'findAndReplace', 'selectAll', '|', 'heading', '|', 'bold',
                    'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
                    'bulletedList', 'numberedList', 'todoList', '|', 'outdent', 'indent', '|', 'undo', 'redo', '-',
                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|', 'alignment',
                    '|', 'link', 'uploadImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed',
                    '|', 'specialCharacters', 'horizontalLine', 'pageBreak', '|', 'textPartLanguage', '|',
                    'sourceEditing'
                ],
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
                options: ['default', 'Arial, Helvetica, sans-serif', 'Courier New, Courier, monospace',
                    'Georgia, serif', 'Lucida Sans Unicode, Lucida Grande, sans-serif',
                    'Tahoma, Geneva, sans-serif', 'Times New Roman, Times, serif',
                    'Trebuchet MS, Helvetica, sans-serif', 'Verdana, Geneva, sans-serif'
                ],
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
                    feed: ['@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate',
                        '@cookie', '@cotton', '@cream', '@cupcake', '@danish', '@donut', '@dragée',
                        '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o', '@liquorice',
                        '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps',
                        '@soufflé', '@sugar', '@sweet', '@topping', '@wafer'
                    ],
                    minimumCharacters: 1
                }]
            },
            removePlugins: ['AIAssistant', 'CKBox', 'CKFinder', 'EasyImage', 'MultiLevelList',
                'RealTimeCollaborativeComments', 'RealTimeCollaborativeTrackChanges',
                'RealTimeCollaborativeRevisionHistory', 'PresenceList', 'Comments', 'TrackChanges',
                'TrackChangesData', 'RevisionHistory', 'Pagination', 'WProofreader', 'MathType', 'SlashCommand',
                'Template', 'DocumentOutline', 'FormatPainter', 'TableOfContents', 'PasteFromOfficeEnhanced',
                'CaseChange'
            ]
        };
        CKEDITOR.ClassicEditor.create(document.getElementById("editor"), editorConfig).catch(error => {
            console.error(error);
        });
    </script>
@endsection
