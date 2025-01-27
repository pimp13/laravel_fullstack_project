@extends('layouts.cp')

@section('content')
    <div class="d-flex align-items-center justify-content-between mb-3">
        <div>
            <h1 class="h3 mb-2 mb-sm-0 fs-5">منوها</h1>
        </div>
        <div>
            <a href="{{ route('cp.menu.create') }}" class="btn btn-success-soft">افزودن منوی جدید</a>
        </div>
    </div>
    <!-- Card START -->
    <div class="card bg-transparent border">
        <!-- Card header START -->
        <div class="card-header bg-light border-bottom">
            <!-- Search and select START -->
            <div class="row g-3 align-items-center justify-content-between">
                <!-- Search bar -->
                <div class="col-md-8">
                    <form class="rounded position-relative">
                        <input class="form-control bg-body" type="search" placeholder="جستجوی منو" aria-label="Search">
                        <button
                            class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset"
                            type="submit">
                            <i class="fas fa-search fs-6"></i>
                        </button>
                    </form>
                </div>

                <!-- Select option -->
                <div class="col-md-3">
                    <!-- Short by filter -->
                    <form>
                        <select class="form-select js-choice border-0 z-index-9" aria-label=".form-select-sm">
                            <option value="">مرتب سازی</option>
                            <option>جدیدترین</option>
                            <option>قدیمی ترین</option>
                            <option>تایید شده</option>
                            <option>رد شده</option>
                        </select>
                    </form>
                </div>
            </div>
            <!-- Search and select END -->
        </div>
        <!-- Card header END -->

        <!-- Card body START -->
        <div class="card-body">
            <!-- Course table START -->
            <div class="table-responsive border-0 rounded-3">
                <!-- Table START -->
                <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
                    <!-- Table head -->
                    <thead>
                    <tr>
                        <th scope="col" class="border-0 rounded-start">نام منو</th>
                        <th scope="col" class="border-0">آدرس url</th>
                        <th scope="col" class="border-0">نوع منو</th>
                        <th scope="col" class="border-0">وضعیت</th>
                        <th scope="col" class="border-0 rounded-end">عملیات</th>
                    </tr>
                    </thead>

                    <!-- Table body START -->
                    <tbody>
                    @forelse($menus as $menu)
                        <tr>
                            <!-- Table data -->
                            <td>
                                {{ $menu->name }}
                            </td>

                            <!-- Table data -->
                            <td>
                                {{ $menu->url }}
                            </td>

                            <!-- Table data -->
                            <td>
                                {{ $menu->type }}
                            </td>

                            <!-- Table data -->
                            <td><span class="badge bg-warning bg-opacity-15 text-warning">{{ $menu->is_active }}</span>
                            </td>

                            <!-- Table data -->
                            <td>
                                <a href="#" class="btn btn-sm btn-success-soft me-1 mb-1 mb-md-0">تایید</a>
                                <button class="btn btn-sm btn-secondary-soft mb-0">رد</button>
                            </td>
                        </tr>
                    @empty
                        <div>منوی وجود ندارد</div>
                    @endforelse
                    </tbody>
                    <!-- Table body END -->
                </table>
                <!-- Table END -->
            </div>
            <!-- Course table END -->
        </div>
        <!-- Card body END -->

        <!-- Card footer START -->
        <div class="card-footer bg-transparent pt-0">
            <!-- Pagination START -->
            <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                <!-- Content -->
                <p class="mb-0 text-center text-sm-start">نمایش 1 تا 8 از 20</p>
                <!-- Pagination -->
                <nav class="d-flex justify-content-center mb-0" aria-label="navigation">
                    <ul class="pagination pagination-sm pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
                        <li class="page-item mb-0"><a class="page-link" href="#" tabindex="-1"><i
                                    class="fas fa-angle-right"></i></a></li>
                        <li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
                        <li class="page-item mb-0 active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item mb-0"><a class="page-link" href="#">3</a></li>
                        <li class="page-item mb-0"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- Pagination END -->
        </div>
        <!-- Card footer END -->
    </div>
    <!-- Card END -->
@endsection