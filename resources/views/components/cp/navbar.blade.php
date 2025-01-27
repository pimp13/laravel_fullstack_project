<nav class="navbar sidebar navbar-expand-xl navbar-dark bg-dark">
    <!-- Navbar brand for xl START -->
    <div class="d-flex align-items-center">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img class="navbar-brand-item" src="{{ asset('assets/images/logo-light.svg') }}" alt="">
        </a>
    </div>
    <!-- Navbar brand for xl END -->

    <div class="offcanvas offcanvas-start flex-row custom-scrollbar h-100" data-bs-backdrop="true" tabindex="-1"
         id="offcanvasSidebar">
        <div class="offcanvas-body sidebar-content d-flex flex-column bg-dark">
            <ul class="navbar-nav flex-column" id="navbar-sidebar">

                @forelse($menus as $menu)
                    {{--@if(isset($menu['heading']))
                        <li class="nav-item ms-2 my-2">{{ $menu['heading'] }}</li>
                    @endif--}}
                    <li class="nav-item">
                        <a class="nav-link"
                           href="{{ !empty($menu->children->toArray()) ? '#collapsepage' : url($menu->url) }}"
                           @if(!empty($menu->children->toArray())) data-bs-toggle="collapse" role="button"
                           aria-expanded="false" aria-controls="collapsepage" @endif>
                            <i class="bi bi-basket fa-fw me-2"></i>
                            {{ $menu->name }}
                        </a>
                        @if(!empty($menu->children->toArray()))
                            <ul class="nav collapse flex-column" id="collapsepage" data-bs-parent="#navbar-sidebar">
                                <li class="nav-item"><a class="nav-link" href="admin-course-list.html">لیست</a></li>
                                <li class="nav-item"><a class="nav-link" href="admin-course-category.html">دسته بندی</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="admin-course-detail.html">جزئیات</a></li>
                            </ul>
                        @endif
                    </li>

                @empty
                    <span>No Data</span>
                @endforelse


            </ul>
            <!-- Sidebar menu end -->

            <!-- Sidebar footer START -->
            <div class="px-3 mt-auto pt-3">
                <div class="d-flex align-items-center justify-content-between text-primary-hover">
                    <a class="h5 mb-0 text-body" href="admin-setting.html" data-bs-toggle="tooltip"
                       data-bs-placement="top" title="تنظیمات">
                        <i class="bi bi-gear-fill"></i>
                    </a>
                    <a class="h5 mb-0 text-body" href="index.html" data-bs-toggle="tooltip" data-bs-placement="top"
                       title="صفحه اصلی">
                        <i class="bi bi-globe"></i>
                    </a>
                    <a class="h5 mb-0 text-body" href="sign-in.html" data-bs-toggle="tooltip"
                       data-bs-placement="top" title="خروج">
                        <i class="bi bi-power"></i>
                    </a>
                </div>
            </div>
            <!-- Sidebar footer END -->

        </div>
    </div>
</nav>
