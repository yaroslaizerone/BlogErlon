@extends('personal.layouts.main')

@section('content')
    <main class="app-main"> <!--begin::App Content Header-->
        <div class="app-content-header"> <!--begin::Container-->
            <div class="container-fluid"> <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">Главная</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="#">Главная</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Главная
                            </li>
                        </ol>
                    </div>
                </div> <!--end::Row-->
            </div> <!--end::Container-->
        </div> <!--end::App Content Header--> <!--begin::App Content-->
        <div class="app-content"> <!--begin::Container-->
            <div class="container-fluid"> <!--begin::Row-->
                <div class="row"> <!--begin::Col-->
                    <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 1-->
                        <div class="small-box text-bg-primary">
                            <div class="inner d-flex justify-content-between">
                                <div class="row ms-2">
                                    <h3>10</h3>
                                    <p>Понравившиеся посты</p>
                                </div>
                                <div class="icon">
                                    <span id="boot-icon" class="bi bi-heart" style="font-size: 50px;"></span>
                                </div>
                            </div>

                            <a href="{{ route('admin.user.index') }}"
                               class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                                Подробнее <i class="bi bi-link-45deg"></i> </a>
                        </div> <!--end::Small Box Widget 1-->
                    </div> <!--end::Col-->
                    <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 2-->
                        <div class="small-box text-bg-success">
                            <div class="inner d-flex justify-content-between">
                                <div class="row ms-2">
                                    <h3>10</h3>
                                    <p>Комментарии</p>
                                </div>
                                <div class="icon">
                                    <span id="boot-icon" class="bi bi-chat" style="font-size: 50px;"></span>
                                </div>
                            </div>
                            <a href="{{ route('admin.categories.index') }}"
                               class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                                Подробнее <i class="bi bi-link-45deg"></i> </a>
                        </div> <!--end::Small Box Widget 2-->
                    </div> <!--end::Col-->
                </div> <!--end::Row--> <!--begin::Row-->
            </div> <!--end::Container-->
        </div> <!--end::App Content-->
    </main> <!--end::App Main--> <!--begin::Footer-->
@endsection
