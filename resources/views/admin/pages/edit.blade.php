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
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="input1"
                            name="name" value="{{ old('name', $pages->name) }}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="input2" class="form-label">Danh mục trang</label>
                        <select id="input2" class="form-select @error('page_category_id') is-invalid @enderror"
                            name="page_category_id">
                            <option value="">Chọn danh mục</option>
                            @foreach ($pageCategories as $item)
                                <option value="{{ $item->id }}"
                                    {{ old('page_category_id', $pages->page_category_id) == $item->id ? 'selected' : '' }}>
                                    {{ $item->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('page_category_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="row mt-3">
                        <div class="col-lg-6 mb-3">
                            <label for="seotitle" class="form-label">Nội dung SEO</label>
                            <input type="text" class="form-control @error('seo_title') is-invalid @enderror"
                                id="seotitle" name="seo_title" value="{{ old('seo_title', $pages->seo_title) }}">
                            @error('seo_title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="input7" class="form-label">Trạng thái</label>
                            <select id="input7" class="form-select @error('status') is-invalid @enderror" name="status">
                                <option value="1" {{ old('status', $pages->status) == 1 ? 'selected' : '' }}>Hoạt động
                                </option>
                                <option value="0" {{ old('status', $pages->status) == 0 ? 'selected' : '' }}>Không
                                    hoạt động</option>
                            </select>
                            @error('status')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-12 mb-3">
                        <label for="seodesc" class="form-label">Mô tả SEO</label>
                        <input type="text" class="form-control @error('seo_description') is-invalid @enderror"
                            id="seodesc" name="seo_description"
                            value="{{ old('seo_description', $pages->seo_description) }}">
                        @error('seo_description')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="editor" class="form-label">Mô tả</label>
                        <textarea class="form-control description @error('long_description') is-invalid @enderror" name="long_description"
                            id="editor">
                            {{ old('long_description', $pages->long_description) }}
                        </textarea>
                        @error('long_description')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
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
