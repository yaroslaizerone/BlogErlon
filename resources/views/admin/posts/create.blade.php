@extends('admin.layouts.main')
@section('content')
    <main class="app-main"> <!--begin::App Content Header-->
        <div class="app-content-header"> <!--begin::Container-->
            <div class="container-fluid"> <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">Добавление постов</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.posts.index') }}">Посты</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Добавление поста
                            </li>
                        </ol>
                    </div>
                </div> <!--end::Row-->
            </div> <!--end::Container-->
        </div> <!--end::App Content Header--> <!--begin::App Content-->
        <div class="app-content"> <!--begin::Container-->
            <div class="container-fluid"> <!--begin::Row-->
                <div class="row">
                    <div class="col-1">
                        <a href="javascript:window.history.back()" class="btn btn-primary">Назад</a>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="card card-primary card-outline mb-4 col-12"> <!--begin::Header-->
                            <div class="card-header">
                                <div class="card-title">Укажите данные нового поста</div>
                            </div> <!--end::Header--> <!--begin::Form-->
                            <form action="{{ route('admin.posts.store') }}" method="POST" class="col-6"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Заголовок поста</label>
                                        <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                                               aria-describedby="emailHelp" value="{{ old('title') }}">
                                        @error('title')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        <div id="emailHelp" class="form-text">Укажите название поста.</div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="content" class="form-label">Содержание</label>
                                        <textarea id="summernote" name="content">{{ old('content') }}</textarea>
                                        @error('content')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group w-50">
                                        <label for="exampleInputFile">Добавить превью</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="preview_image">
                                                <label class="custom-file-label">Выберите изображение</label>
                                            </div>
                                        </div>
                                        @error('preview_image')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group w-50 mt-4">
                                        <label for="exampleInputFile">Добавить главное изображение</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="main_image">
                                                <label class="custom-file-label">Выберите изображение</label>
                                            </div>
                                        </div>
                                        @error('main_image')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group w-50 mt-4">
                                        <label>Выберите категорию</label>
                                        <select class="form-control" name="category_id">
                                            @foreach($categories as $category)
                                                <option
                                                    value="{{ $category->id }}" {{ $category->id == old('category_id') ? 'selected' : '' }}>
                                                    {{ $category->title }}
                                                </option>
                                            @endforeach
                                        </select>

                                        @error('category_id')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group w-100 mt-4">
                                        <label>Выберите тэг</label>
                                        <select class="select2 w-100" name="tag_ids[]" multiple="multiple" data-placeholder="Выберите тэги">
                                            @foreach($tags as $tag)
                                                <option value="{{ $tag->id }}" {{ is_array(old('tag_ids')) && in_array($tag->id, old('tag_ids')) ? 'selected' : '' }}>
                                                    {{ $tag->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('tag_ids')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Добавить пост</button>
                                        @if ($errors->any())
                                            <div class="alert alert-danger mt-3">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div> <!--begin::Col-->
                </div> <!--end::Row--> <!--begin::Row-->
            </div> <!--end::Container-->
        </div> <!--end::App Content-->
    </main> <!--end::App Main--> <!--begin::Footer-->\
@endsection
