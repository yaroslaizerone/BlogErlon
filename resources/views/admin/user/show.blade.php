@extends('admin.layouts.main')
@section('content')
    <main class="app-main"> <!--begin::App Content Header-->
        <div class="app-content-header"> <!--begin::Container-->
            <div class="container-fluid"> <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-6 d-flex align-items-center">
                        <h1 class="pe-3">{{ $user -> name }}</h1>
                        <a href="{{ route('admin.user.edit', $user -> id) }}" class="text-success"> <i
                                class="bi bi-pencil"></i></a>
                        <form action="{{ route('admin.user.delete', $user -> id) }}"
                              method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">
                                <i class="text-danger bi bi-trash-fill"></i>
                            </button>
                        </form>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.user.index') }}">Пользватели</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{ $user -> name }}
                            </li>
                        </ol>
                    </div>
                </div> <!--end::Row-->
            </div> <!--end::Container-->
        </div> <!--end::App Content Header--> <!--begin::App Content-->
        <div class="app-content"> <!--begin::Container-->
            <div class="container-fluid"> <!--begin::Row-->
                <div class="row">
                    <div class="col-2">
                        <a href="{{ route('admin.user.create') }}" class="btn btn-primary">Добавить пользователя</a>
                    </div>
                    <div class="card mb-4 mt-4">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tbody>
                                <tr class="align-middle">
                                    <td>ID</td>
                                    <td>{{ $user -> id }}</td>
                                </tr>
                                <tr class="align-middle">
                                    <td>Имя</td>
                                    <td>{{ $user -> name }}</td>
                                </tr>
                                <tr class="align-middle">
                                    <td>Роль</td>
                                    <td>{{ $user -> getRoleName() }}</td>
                                </tr>
                                <tr class="align-middle">
                                    <td>E-mail</td>
                                    <td>{{ $user -> email }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div> <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-end">
                                <li class="page-item"><a class="page-link" href="#">«</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">»</a></li>
                            </ul>
                        </div>
                    </div>

                </div> <!--end::Row--> <!--begin::Row-->
            </div> <!--end::Container-->
        </div> <!--end::App Content-->
    </main> <!--end::App Main--> <!--begin::Footer-->
@endsection
