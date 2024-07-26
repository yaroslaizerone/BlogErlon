@extends('admin.layouts.main')
@section('content')
    <main class="app-main"> <!--begin::App Content Header-->
        <div class="app-content-header"> <!--begin::Container-->
            <div class="container-fluid"> <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">Редактирование пользователя</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Редактирование пользователя\{{ $user -> id }}
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
                                <div class="card-title">Укажите данные нового пользователя</div>
                            </div> <!--end::Header--> <!--begin::Form-->
                            <form action="{{ route('admin.user.update', $user -> id) }}" method="POST"
                                  class="col-6"> <!--begin::Body-->
                                @csrf
                                @method('PATCH')
                                <div class="card-body">
                                    <div class="mb-3"><label for="exampleInputEmail1" class="form-label">
                                            Имя пользователя</label>
                                        <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                               aria-describedby="emailHelp" value="{{ $user->name }}" required>
                                        @error('name')
                                        <div class="text-danger"> {{ $message}}</div>
                                        @enderror
                                        <div id="emailHelp" class="form-text">
                                            Укажите имя пользователя.
                                        </div>
                                    </div>
                                    <div class="mb-3"><label for="exampleInputEmail1" class="form-label">
                                            E-mail пользователя</label>
                                        <input type="text" name="email" class="form-control" id="exampleInputEmail1"
                                               aria-describedby="emailHelp" value="{{ $user->email }}" required>
                                        @error('email')
                                        <div class="text-danger"> {{ $message}}</div>
                                        @enderror
                                        <div id="emailHelp" class="form-text">
                                            Укажите e-mail пользователя.
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Обновить пользователя</button>
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
