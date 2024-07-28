@extends('admin.layouts.main')
@section('content')
    <main class="app-main"> <!--begin::App Content Header-->
        <div class="app-content-header"> <!--begin::Container-->
            <div class="container-fluid"> <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">Редактирование поста</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.posts.index') }}">Посты</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Редактирование поста\{{ $post -> id }}
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
                        <div class="card card-primary card-outline mb-4 col-6"> <!--begin::Header-->
                            <div class="card-header">
                                <div class="card-title">Измините данные поста</div>
                            </div> <!--end::Header--> <!--begin::Form-->
                            <form action="{{ route('admin.posts.update', $post -> id) }}" method="POST"
                                  enctype="multipart/form-data" class="col-12">
                                <!--begin::Body-->
                                @csrf
                                @method('PATCH')
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Заголовок поста</label>
                                        <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                                               aria-describedby="emailHelp" value="{{ $post -> title }}">
                                        @error('title')
                                        <div class="text-danger"> {{ $message }}</div>
                                        @enderror
                                        <div id="emailHelp" class="form-text">Укажите название поста.</div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="content" class="form-label">Содержание</label>
                                        <textarea id="summernote" name="content">{{ $post -> content }}</textarea>
                                        @error('content')
                                        <div class="text-danger"> {{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group w-50">
                                        <label for="exampleInputFile">Добавить превью</label>
                                        <div>
                                            <img
                                                src="{{ isset($post->preview_image) ? asset('storage/' . $post->preview_image) : '' }}"
                                                alt="preview_image" class="w-100">
                                        </div>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="preview_image"
                                                       id="preview_image_input">
                                                <label class="custom-file-label">Выберите изображение</label>
                                            </div>
                                        </div>
                                        @error('preview_image')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group w-50 mt-4">
                                        <label for="exampleInputFile">Добавить главное изображение</label>
                                        <div>
                                            <img src="{{ asset( 'storage/' . $post->main_image) }}" alt="main_image"
                                                 class="w-100">
                                        </div>
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
                                                    value="{{ $category->id }}" {{ $post->category_id == $category->id ? 'selected' : '' }}>
                                                    {{ $category->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group w-100 mt-4">
                                        <label>Выберите тэги</label>
                                        <select class="select2 w-100" name="tag_ids[]" multiple="multiple"
                                                data-placeholder="Выберите тэги">
                                            @foreach($tags as $tag)
                                                <option
                                                    value="{{ $tag->id }}"
                                                    {{ $post->tags->pluck('id')->contains($tag->id) ? 'selected' : '' }}>
                                                    {{ $tag->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('tag_ids')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Обновить</button>
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
                            </form> <!--end::Form-->
                        </div>
                    </div> <!--begin::Col-->
                </div> <!--end::Row--> <!--begin::Row-->
            </div> <!--end::Container-->
        </div> <!--end::App Content-->
    </main> <!--end::App Main--> <!--begin::Footer-->
@endsection
