@php
    $appUrl = config('app.url');
    if (!str_ends_with($appUrl, '/')) {
        $appUrl .= '/';
    }
@endphp
@extends('layouts.cp')

@section('content')
    <section class="p-0">
        <div class="card shadow">

            <!-- Card header -->
            <div class="card-header border-bottom">
                <h5 class="card-header-title">ایجاد منوی جدید</h5>
            </div>

            <!-- Card body START -->
            <div class="card-body">
                <form id="create_form" class="row g-4 align-items-center" method="post"
                      action="{{ route('cp.menu.store') }}">
                    @csrf

                    <!-- Input item -->
                    <div class="col-lg-6">
                        <label class="form-label">نام منو</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                        <div class="form-text text-danger">متن خطا</div>
                    </div>


                    <!-- Input item -->
                    <div class="col-lg-6">
                        <label for="basic-url" class="form-label">آدرس URL</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="url" id="basic-url" dir="ltr">
                            <span class="input-group-text" dir="ltr" id="basic-addon3">{{ $appUrl }}</span>
                        </div>
                        <div class="form-text" id="basic-addon4">آدرس url را بعد از دامین درنظر بگیرید.</div>
                    </div>

                    <div class="col-12">
                        <label class="form-label">منوی والد</label>
                        <select class="form-select" aria-label="Default select example" name="parent_id">
                            <option hidden label="برای ساخت زیر منو، منوی والد را انتخاب کنید."></option>
                            @foreach($parent_menus as $parent_menu)
                                <option value="{{ $parent_menu->id }}">{{ $parent_menu->name }}</option>
                            @endforeach
                        </select>
                        <div class="form-text">برای ساخت منوهای تو در تو منوی والد را انتخاب کنید تا این منو به عنوان
                            زیرمنو ساخته شود.
                        </div>
                    </div>


                    <!-- Radio items -->
                    <div class="col-lg-6">
                        <label class="form-label">نوع منو محل نمایش</label>
                        <div class="d-sm-flex">
                            @foreach($menu_types as $key => $menu_type)
                                <div class="form-check radio-bg-light me-4">
                                    <input class="form-check-input" type="radio" name="type"
                                           id="{{$key}}" value="{{$key}}">
                                    <label class="form-check-label" for="{{$key}}">
                                        {{ $menu_type }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Textarea item -->
                    <div class="col-12">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="is_active"
                                   name="is_active"
                                   checked>
                            <label class="form-check-label" for="is_active"> منو فعال و قابل نمایش
                                باشد؟</label>
                        </div>
                    </div>

                    <!-- Save button -->
                    <div class="d-sm-flex justify-content-end">
                        <button type="submit" class="btn btn-primary mb-0">ذخیره</button>
                    </div>
                </form>
            </div>
            <!-- Card body END -->
        </div>
    </section>
@endsection