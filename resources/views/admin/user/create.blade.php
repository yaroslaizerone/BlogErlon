@extends('admin.layouts.main')
@section('content')
    <main class="app-main"> <!--begin::App Content Header-->
        <div class="app-content-header"> <!--begin::Container-->
            <div class="container-fluid"> <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">Добавление пользователя</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.user.index') }}">Пользватели</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Добавление пользователя
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
                            <form action="{{ route('admin.user.store') }}" method="POST" class="col-6">
                                <!--begin::Body-->
                                @csrf
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Имя пользователя</label>
                                        <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                               aria-describedby="emailHelp" required>
                                        @error('name')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">E-mail пользователя</label>
                                        <input type="text" name="email" class="form-control" id="exampleInputEmail1"
                                               aria-describedby="emailHelp" required>
                                        @error('email')
                                        <div id="emailHelp" class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group w-50 mt-4">
                                        <label>Выберите роль пользователя</label>
                                        <select class="form-control" name="role">
                                            @foreach($roles as $id => $role)
                                                <option value="{{ $id }}" {{ $id == old('role') ? 'selected' : '' }}>
                                                    {{ $role }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('role')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Добавить пользователя</button>
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
