@extends('admin.layouts.main')
@section('content')
    <main class="app-main"> <!--begin::App Content Header-->
        <div class="app-content-header"> <!--begin::Container-->
            <div class="container-fluid"> <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-6 d-flex align-items-center">
                        <h1 class="pe-3">{{ $post -> title }}</h1>
                        <a href="{{ route('admin.posts.edit', $post -> id) }}" class="text-success"> <i
                                class="bi bi-pencil"></i></a>
                        <form action="{{ route('admin.posts.delete', $tag -> id) }}"
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
                            <li class="breadcrumb-item"><a href="#">Посты</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{ $post -> title }}
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
                        <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">Добавить пост</a>
                    </div>
                    <div class="card mb-4 mt-4">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tbody>
                                <tr class="align-middle">
                                    <td>ID</td>
                                    <td>{{ $post -> id }}</td>
                                </tr>
                                <tr class="align-middle">
                                    <td>Название</td>
                                    <td>{{ $post -> title }}</td>
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
