@extends('admin.layouts.main')
@section('content')
    <main class="app-main"> <!--begin::App Content Header-->
        <div class="app-content-header"> <!--begin::Container-->
            <div class="container-fluid"> <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">Добавление категории</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.categories.index') }}">Категории</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Добавление категории
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
                                <div class="card-title">Укажите данные новой категории</div>
                            </div> <!--end::Header--> <!--begin::Form-->
                            <form action="{{ route('admin.categories.store') }}" method="POST" class="col-6">
                                <!--begin::Body-->
                                @csrf
                                <div class="card-body">
                                    <div class="mb-3"><label for="exampleInputEmail1" class="form-label">
                                            Название категории</label>
                                        <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                                               aria-describedby="emailHelp" required>
                                        @error('title')
                                        <div class="text-danger"> Это поле должно быть заполнено</div>
                                        @enderror
                                        <div id="emailHelp" class="form-text">
                                            Укажите название категории.
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Добавить категорию</button>
                                    </div> <!--end::Footer-->
                                </div>
                            </form> <!--end::Form-->
                        </div>
                    </div> <!--begin::Col-->
                </div> <!--end::Row--> <!--begin::Row-->
            </div> <!--end::Container-->
        </div> <!--end::App Content-->
    </main> <!--end::App Main--> <!--begin::Footer-->
@endsection
