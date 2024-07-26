@extends('admin.layouts.main')
@section('content')
    <main class="app-main"> <!--begin::App Content Header-->
        <div class="app-content-header"> <!--begin::Container-->
            <div class="container-fluid"> <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">Редактирование тэга</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Редактирование тэга\{{ $tag -> id }}
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
                                <div class="card-title">Укажите данные новой тэга</div>
                            </div> <!--end::Header--> <!--begin::Form-->
                            <form action="{{ route('admin.tags.update', $tag -> id) }}" method="POST" class="col-6">
                                <!--begin::Body-->
                                @csrf
                                @method('PATCH')
                                <div class="card-body">
                                    <div class="mb-3"><label for="exampleInputEmail1" class="form-label">
                                            Название тэга</label>
                                        <input type="text" value="{{ $tag -> title }}" name="title" class="form-control"
                                               id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                        @error('title')
                                        <div class="text-danger"> Это поле должно быть заполнено</div>
                                        @enderror
                                        <div id="emailHelp" class="form-text">
                                            Укажите название тэга.
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Обновить тэга</button>
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
