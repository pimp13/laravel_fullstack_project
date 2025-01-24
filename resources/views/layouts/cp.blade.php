<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <title>Eduport - قالب HTML دوره آنلاین و آموزش</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="">
    <meta name="description" content="Eduport - قالب HTML دوره آنلاین و آموزش">

    <!-- Dark mode -->
    <script>
        const storedTheme = localStorage.getItem('theme')

        const getPreferredTheme = () => {
            if (storedTheme) {
                return storedTheme
            }
            return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
        }

        const setTheme = function (theme) {
            if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                document.documentElement.setAttribute('data-bs-theme', 'dark')
            } else {
                document.documentElement.setAttribute('data-bs-theme', theme)
            }
        }

        setTheme(getPreferredTheme())

        window.addEventListener('DOMContentLoaded', () => {
            var el = document.querySelector('.theme-icon-active');
            if (el != 'undefined' && el != null) {
                const showActiveTheme = theme => {
                    const activeThemeIcon = document.querySelector('.theme-icon-active use')
                    const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
                    const svgOfActiveBtn = btnToActive.querySelector('.mode-switch use').getAttribute('href')

                    document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
                        element.classList.remove('active')
                    })

                    btnToActive.classList.add('active')
                    activeThemeIcon.setAttribute('href', svgOfActiveBtn)
                }

                window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
                    if (storedTheme !== 'light' || storedTheme !== 'dark') {
                        setTheme(getPreferredTheme())
                    }
                })

                showActiveTheme(getPreferredTheme())

                document.querySelectorAll('[data-bs-theme-value]')
                    .forEach(toggle => {
                        toggle.addEventListener('click', () => {
                            const theme = toggle.getAttribute('data-bs-theme-value')
                            localStorage.setItem('theme', theme)
                            setTheme(theme)
                            showActiveTheme(theme)
                        })
                    })

            }
        })

    </script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="/assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="/assets/vendor/apexcharts/css/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="/assets/vendor/overlay-scrollbar/css/overlayscrollbars.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="/assets/css/style-rtl.css">

</head>

<body>


<!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- Sidebar START -->
    <nav class="navbar sidebar navbar-expand-xl navbar-dark bg-dark">

        <!-- Navbar brand for xl START -->
        <div class="d-flex align-items-center">
            <a class="navbar-brand" href="index.html">
                <img class="navbar-brand-item" src="assets/images/logo-light.svg" alt="">
            </a>
        </div>
        <!-- Navbar brand for xl END -->

        <div class="offcanvas offcanvas-start flex-row custom-scrollbar h-100" data-bs-backdrop="true" tabindex="-1"
             id="offcanvasSidebar">
            <div class="offcanvas-body sidebar-content d-flex flex-column bg-dark">

                <!-- Sidebar menu START -->
                <ul class="navbar-nav flex-column" id="navbar-sidebar">

                    <!-- Menu item 1 -->
                    <li class="nav-item"><a href="admin-dashboard.html" class="nav-link active"><i
                                class="bi bi-house fa-fw me-2"></i>داشبورد</a></li>

                    <!-- Title -->
                    <li class="nav-item ms-2 my-2">صفحات</li>

                    <!-- menu item 2 -->
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#collapsepage" role="button"
                           aria-expanded="false" aria-controls="collapsepage">
                            <i class="bi bi-basket fa-fw me-2"></i>دوره ها
                        </a>
                        <!-- Submenu -->
                        <ul class="nav collapse flex-column" id="collapsepage" data-bs-parent="#navbar-sidebar">
                            <li class="nav-item"><a class="nav-link" href="admin-course-list.html">لیست</a></li>
                            <li class="nav-item"><a class="nav-link" href="admin-course-category.html">دسته بندی</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="admin-course-detail.html">جزئیات</a></li>
                        </ul>
                    </li>

                    <!-- Menu item 3 -->
                    <li class="nav-item"><a class="nav-link" href="admin-student-list.html"><i
                                class="fas fa-user-graduate fa-fw me-2"></i>هنرجویان</a></li>

                    <!-- Menu item 4 -->
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#collapseinstructors" role="button"
                           aria-expanded="false" aria-controls="collapseinstructors">
                            <i class="fas fa-user-tie fa-fw me-2"></i>مدرس
                        </a>
                        <!-- Submenu -->
                        <ul class="nav collapse flex-column" id="collapseinstructors" data-bs-parent="#navbar-sidebar">
                            <li class="nav-item"><a class="nav-link" href="admin-instructor-list.html">لیست</a></li>
                            <li class="nav-item"><a class="nav-link" href="admin-instructor-detail.html">جزئیات</a></li>
                            <li class="nav-item">
                                <a class="nav-link" href="admin-instructor-request.html">درخواست ها
                                    <span class="badge text-bg-success rounded-circle ms-2">2</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Menu item 5 -->
                    <li class="nav-item"><a class="nav-link" href="admin-review.html"><i
                                class="far fa-comment-dots fa-fw me-2"></i>دیدگاه ها</a></li>

                    <!-- Menu item 6 -->
                    <li class="nav-item"><a class="nav-link" href="admin-earning.html"><i
                                class="far fa-chart-bar fa-fw me-2"></i>درآمدها</a></li>

                    <!-- Menu item 7 -->
                    <li class="nav-item"><a class="nav-link" href="admin-setting.html"><i
                                class="fas fa-user-cog fa-fw me-2"></i>تنظیمات</a></li>

                    <!-- Menu item 8 -->
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#collapseauthentication" role="button"
                           aria-expanded="false" aria-controls="collapseauthentication">
                            <i class="bi bi-lock fa-fw me-2"></i>احراز هویت
                        </a>
                        <!-- Submenu -->
                        <ul class="nav collapse flex-column" id="collapseauthentication"
                            data-bs-parent="#navbar-sidebar">
                            <li class="nav-item"><a class="nav-link" href="sign-up.html">ثبت نام</a></li>
                            <li class="nav-item"><a class="nav-link" href="sign-in.html">ورود</a></li>
                            <li class="nav-item"><a class="nav-link" href="forgot-password.html">فراموشی رمز عبور</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="admin-error-404.html">صفحه 404</a></li>
                        </ul>
                    </li>

                    <!-- Menu item 9 -->
                    <li class="nav-item"><a class="nav-link" href="docs/index.html"><i
                                class="far fa-clipboard fa-fw me-2"></i>کدهای کاربردی</a></li>

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
    <!-- Sidebar END -->

    <!-- Page content START -->
    <div class="page-content">

        <!-- Top bar START -->
        <nav class="navbar top-bar navbar-light border-bottom py-0 py-xl-3">
            <div class="container-fluid p-0">
                <div class="d-flex align-items-center w-100">

                    <!-- Logo START -->
                    <div class="d-flex align-items-center d-xl-none">
                        <a class="navbar-brand" href="index.html">
                            <img class="light-mode-item navbar-brand-item h-30px" src="assets/images/logo-mobile.svg"
                                 alt="">
                            <img class="dark-mode-item navbar-brand-item h-30px"
                                 src="assets/images/logo-mobile-light.svg" alt="">
                        </a>
                    </div>
                    <!-- Logo END -->

                    <!-- Toggler for sidebar START -->
                    <div class="navbar-expand-xl sidebar-offcanvas-menu">
                        <button class="navbar-toggler me-auto" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar"
                                aria-expanded="false" aria-label="Toggle navigation" data-bs-auto-close="outside">
                            <i class="bi bi-text-right fa-fw h2 lh-0 mb-0 rtl-flip"
                               data-bs-target="#offcanvasMenu"> </i>
                        </button>
                    </div>
                    <!-- Toggler for sidebar END -->

                    <!-- Top bar left -->
                    <div class="navbar-expand-lg ms-auto ms-xl-0">

                        <!-- Toggler for menubar START -->
                        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarTopContent" aria-controls="navbarTopContent"
                                aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-animation">
							<span></span>
							<span></span>
							<span></span>
						</span>
                        </button>
                        <!-- Toggler for menubar END -->

                        <!-- Topbar menu START -->
                        <div class="collapse navbar-collapse w-100" id="navbarTopContent">
                            <!-- Top search START -->
                            <div class="nav my-3 my-xl-0 flex-nowrap align-items-center">
                                <div class="nav-item w-100">
                                    <form class="position-relative">
                                        <input class="form-control pe-5 bg-secondary bg-opacity-10 border-0"
                                               type="search" placeholder="جستجو..." aria-label="Search">
                                        <button
                                            class="bg-transparent px-2 py-0 border-0 position-absolute top-50 end-0 translate-middle-y"
                                            type="submit"><i class="fas fa-search fs-6 text-primary"></i></button>
                                    </form>
                                </div>
                            </div>
                            <!-- Top search END -->
                        </div>
                        <!-- Topbar menu END -->
                    </div>
                    <!-- Top bar left END -->

                    <!-- Top bar right START -->
                    <div class="ms-xl-auto">
                        <ul class="navbar-nav flex-row align-items-center">

                            <!-- Notification dropdown START -->
                            <li class="nav-item ms-2 ms-md-3 dropdown">
                                <!-- Notification button -->
                                <a class="btn btn-light btn-round mb-0" href="#" role="button" data-bs-toggle="dropdown"
                                   aria-expanded="false" data-bs-auto-close="outside">
                                    <i class="bi bi-bell fa-fw"></i>
                                </a>
                                <!-- Notification dote -->
                                <span class="notif-badge animation-blink"></span>

                                <!-- Notification dropdown menu START -->
                                <div
                                    class="dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md p-0 shadow-lg border-0">
                                    <div class="card bg-transparent">
                                        <div
                                            class="card-header bg-transparent border-bottom py-4 d-flex justify-content-between align-items-center">
                                            <h6 class="m-0">پیام ها <span
                                                    class="badge bg-danger bg-opacity-10 text-danger ms-2">2 پیام جدید</span>
                                            </h6>
                                            <a class="small" href="#">حذف همه</a>
                                        </div>
                                        <div class="card-body p-0">
                                            <ul class="list-group list-unstyled list-group-flush">
                                                <!-- Notif item -->
                                                <li>
                                                    <a href="#"
                                                       class="list-group-item-action border-0 border-bottom d-flex p-3">
                                                        <div class="me-3">
                                                            <div class="avatar avatar-md">
                                                                <img class="avatar-img rounded-circle"
                                                                     src="assets/images/avatar/08.jpg" alt="avatar">
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <p class="text-body small m-0">به <b> مهرداد قربانی </b>
                                                                برای فارغ التحصیلی از <b>دانشگاه دماوند </b>تبریک
                                                                میگوییم.</p>
                                                            <u class="small">پیام تبریک</u>
                                                        </div>
                                                    </a>
                                                </li>

                                                <!-- Notif item -->
                                                <li>
                                                    <a href="#"
                                                       class="list-group-item-action border-0 border-bottom d-flex p-3">
                                                        <div class="me-3">
                                                            <div class="avatar avatar-md">
                                                                <img class="avatar-img rounded-circle"
                                                                     src="assets/images/avatar/02.jpg" alt="avatar">
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-1">افزودن دوره جدید</h6>
                                                            <p class="small text-body m-0">با ویژگی های جدید آشنا
                                                                شوید...</p>
                                                            <u class="small">مشاهده</u>
                                                        </div>
                                                    </a>
                                                </li>

                                                <!-- Notif item -->
                                                <li>
                                                    <a href="#"
                                                       class="list-group-item-action border-0 border-bottom d-flex p-3">
                                                        <div class="me-3">
                                                            <div class="avatar avatar-md">
                                                                <img class="avatar-img rounded-circle"
                                                                     src="assets/images/avatar/05.jpg" alt="avatar">
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-1">درخواست جدید برای درخواست مربی</h6>
                                                            <u class="small">مشاهده</u>
                                                        </div>
                                                    </a>
                                                </li>

                                                <!-- Notif item -->
                                                <li>
                                                    <a href="#"
                                                       class="list-group-item-action border-0 border-bottom d-flex p-3">
                                                        <div class="me-3">
                                                            <div class="avatar avatar-md">
                                                                <img class="avatar-img rounded-circle"
                                                                     src="assets/images/avatar/03.jpg" alt="avatar">
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-1">به روز رسانی نسخه 2.3</h6>
                                                            <p class="small text-body m-0">با ویژگی های جدید آشنا
                                                                شوید...</p>
                                                            <small class="text-body">5 دقیقه پیش</small>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Button -->
                                        <div
                                            class="card-footer bg-transparent border-0 py-3 text-center position-relative">
                                            <a href="#" class="stretched-link">مشاهده تمام فعالیت ها</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Notification dropdown menu END -->
                            </li>
                            <!-- Notification dropdown END -->

                            <!-- Profile dropdown START -->
                            <li class="nav-item ms-3 dropdown">
                                <!-- Avatar -->
                                <a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button"
                                   data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown"
                                   aria-expanded="false">
                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg"
                                         alt="avatar">
                                </a>

                                <!-- Profile dropdown START -->
                                <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3"
                                    aria-labelledby="profileDropdown">
                                    <!-- Profile info -->
                                    <li class="px-3 mb-3">
                                        <div class="d-flex align-items-center">
                                            <!-- Avatar -->
                                            <div class="avatar me-3">
                                                <img class="avatar-img rounded-circle shadow"
                                                     src="assets/images/avatar/01.jpg" alt="avatar">
                                            </div>
                                            <div>
                                                <a class="h6" href="#">الهام حسینی</a>
                                                <p class="small m-0">example@gmail.com</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <!-- Links -->
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-person fa-fw me-2"></i>ویرایش</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#"><i
                                                class="bi bi-gear fa-fw me-2"></i>تنظیمات</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-info-circle fa-fw me-2"></i>پشتیبانی</a>
                                    </li>
                                    <li><a class="dropdown-item bg-danger-soft-hover" href="#"><i
                                                class="bi bi-power fa-fw me-2"></i>خروج</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <!-- Dark mode options START -->
                                    <li>
                                        <div
                                            class="bg-light dark-mode-switch theme-icon-active d-flex align-items-center p-1 rounded mt-2">
                                            <button type="button" class="btn btn-sm mb-0" data-bs-theme-value="light">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                     fill="currentColor" class="bi bi-sun fa-fw mode-switch"
                                                     viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
                                                    <use href="#"></use>
                                                </svg>
                                                روشن
                                            </button>
                                            <button type="button" class="btn btn-sm mb-0" data-bs-theme-value="dark">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                     fill="currentColor" class="bi bi-moon-stars fa-fw mode-switch"
                                                     viewBox="0 0 16 16">
                                                    <path
                                                        d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z"/>
                                                    <path
                                                        d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
                                                    <use href="#"></use>
                                                </svg>
                                                تیره
                                            </button>
                                            <button type="button" class="btn btn-sm mb-0 active"
                                                    data-bs-theme-value="auto">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                     fill="currentColor" class="bi bi-circle-half fa-fw mode-switch"
                                                     viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
                                                    <use href="#"></use>
                                                </svg>
                                                خودکار
                                            </button>
                                        </div>
                                    </li>
                                    <!-- Dark mode options END-->
                                </ul>
                                <!-- Profile dropdown END -->
                            </li>
                            <!-- Profile dropdown END -->
                        </ul>
                    </div>
                    <!-- Top bar right END -->
                </div>
            </div>
        </nav>
        <!-- Top bar END -->

        <!-- Page main content START -->
        <div class="page-content-wrapper border">

            <!-- Title -->
            <div class="row">
                <div class="col-12 mb-3">
                    <h1 class="h3 mb-2 mb-sm-0 fs-5">داشبورد</h1>
                </div>
            </div>

            <!-- Counter boxes START -->
            <div class="row g-4 mb-4">
                <!-- Counter item -->
                <div class="col-md-6 col-xxl-3">
                    <div class="card card-body bg-warning bg-opacity-15 p-4 h-100">
                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Digit -->
                            <div>
                                <h2 class="purecounter mb-0 fw-bold" data-purecounter-start="0"
                                    data-purecounter-end="1958" data-purecounter-delay="200">0</h2>
                                <span class="mb-0 h6 fw-light">دوره های تکمیل شده</span>
                            </div>
                            <!-- Icon -->
                            <div class="icon-lg rounded-circle bg-warning text-white mb-0"><i
                                    class="fas fa-tv fa-fw"></i></div>
                        </div>
                    </div>
                </div>

                <!-- Counter item -->
                <div class="col-md-6 col-xxl-3">
                    <div class="card card-body bg-purple bg-opacity-10 p-4 h-100">
                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Digit -->
                            <div>
                                <h2 class="purecounter mb-0 fw-bold" data-purecounter-start="0"
                                    data-purecounter-end="1600" data-purecounter-delay="200">0</h2>
                                <span class="mb-0 h6 fw-light">شرکت کنندگان</span>
                            </div>
                            <!-- Icon -->
                            <div class="icon-lg rounded-circle bg-purple text-white mb-0"><i
                                    class="fas fa-user-tie fa-fw"></i></div>
                        </div>
                    </div>
                </div>

                <!-- Counter item -->
                <div class="col-md-6 col-xxl-3">
                    <div class="card card-body bg-primary bg-opacity-10 p-4 h-100">
                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Digit -->
                            <div>
                                <h2 class="purecounter mb-0 fw-bold" data-purecounter-start="0"
                                    data-purecounter-end="1235" data-purecounter-delay="200">0</h2>
                                <span class="mb-0 h6 fw-light">درحال ضبط</span>
                            </div>
                            <!-- Icon -->
                            <div class="icon-lg rounded-circle bg-primary text-white mb-0"><i
                                    class="fas fa-user-graduate fa-fw"></i></div>
                        </div>
                    </div>
                </div>

                <!-- Counter item -->
                <div class="col-md-6 col-xxl-3">
                    <div class="card card-body bg-success bg-opacity-10 p-4 h-100">
                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Digit -->
                            <div>
                                <div class="d-flex">
                                    <span class="mb-0 h2 me-1">k</span>
                                    <h2 class="purecounter mb-0 fw-bold" data-purecounter-start="0"
                                        data-purecounter-end="845" data-purecounter-delay="200">0</h2>
                                </div>
                                <span class="mb-0 h6 fw-light">زمان بازدید</span>
                            </div>
                            <!-- Icon -->
                            <div class="icon-lg rounded-circle bg-success text-white mb-0"><i
                                    class="bi bi-stopwatch-fill fa-fw"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Counter boxes END -->

            <!-- Chart and Ticket START -->
            <div class="row g-4 mb-4">

                <!-- Chart START -->
                <div class="col-xxl-8">
                    <div class="card shadow h-100">

                        <!-- Card header -->
                        <div class="card-header p-4 border-bottom">
                            <h5 class="card-header-title">آمار فروش</h5>
                        </div>

                        <!-- Card body -->
                        <div class="card-body">
                            <!-- Apex chart -->
                            <div id="ChartPayout"></div>
                        </div>
                    </div>
                </div>
                <!-- Chart END -->

                <!-- Ticket START -->
                <div class="col-xxl-4">
                    <div class="card shadow h-100">
                        <!-- Card header -->
                        <div class="card-header border-bottom d-flex justify-content-between align-items-center p-4">
                            <h5 class="card-header-title">تیکت ها</h5>
                            <a href="#" class="btn btn-link p-0 mb-0">مشاهده همه</a>
                        </div>

                        <!-- Card body START -->
                        <div class="card-body p-4">

                            <!-- Ticket item START -->
                            <div class="d-flex justify-content-between position-relative">
                                <div class="d-sm-flex">
                                    <!-- Avatar -->
                                    <div class="avatar avatar-md flex-shrink-0">
                                        <img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg"
                                             alt="avatar">
                                    </div>
                                    <!-- Info -->
                                    <div class="ms-0 ms-sm-2 mt-2 mt-sm-0">
                                        <h6 class="mb-0 fw-normal"><a href="#" class="stretched-link">نیلوفر جلیلی</a>
                                        </h6>
                                        <p class="mb-0">تیکت جدید با شماره 759 باز شد</p>
                                        <span class="small">8 ساعت قبل</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Ticket item END -->

                            <hr><!-- Divider -->

                            <!-- Ticket item START -->
                            <div class="d-flex justify-content-between position-relative">
                                <div class="d-sm-flex">
                                    <!-- Avatar -->
                                    <div class="avatar avatar-md flex-shrink-0">
                                        <div class="avatar-img rounded-circle bg-purple bg-opacity-10">
                                            <span
                                                class="text-purple position-absolute top-50 start-50 translate-middle fw-bold">DB</span>
                                        </div>
                                    </div>
                                    <!-- Info -->
                                    <div class="ms-0 ms-sm-2 mt-2 mt-sm-0">
                                        <h6 class="mb-0 fw-normal"><a href="#" class="stretched-link">میلاد احمدی</a>
                                        </h6>
                                        <p class="mb-0">تیکت جدید با شماره 629 باز شد</p>
                                        <span class="small">8 ساعت قبل</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Ticket item END -->

                            <hr><!-- Divider -->

                            <!-- Ticket item START -->
                            <div class="d-flex justify-content-between position-relative">
                                <div class="d-sm-flex">
                                    <!-- Avatar -->
                                    <div class="avatar avatar-md flex-shrink-0">
                                        <div class="avatar-img rounded-circle bg-orange bg-opacity-10">
                                            <span
                                                class="text-orange position-absolute top-50 start-50 translate-middle fw-bold">WB</span>
                                        </div>
                                    </div>
                                    <!-- Info -->
                                    <div class="ms-0 ms-sm-2 mt-2 mt-sm-0">
                                        <h6 class="mb-0 fw-normal"><a href="#" class="stretched-link">علی مرادی</a></h6>
                                        <p class="mb-0">تیکت جدید با شماره 820 باز شد</p>
                                        <span class="small">5 ساعت قبل</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Ticket item END -->

                            <hr><!-- Divider -->

                            <!-- Ticket item START -->
                            <div class="d-flex justify-content-between position-relative">
                                <div class="d-sm-flex">
                                    <!-- Avatar -->
                                    <div class="avatar avatar-md flex-shrink-0">
                                        <img class="avatar-img rounded-circle" src="assets/images/avatar/04.jpg"
                                             alt="avatar">
                                    </div>
                                    <!-- Info -->
                                    <div class="ms-0 ms-sm-2 mt-2 mt-sm-0">
                                        <h6 class="mb-0 fw-normal"><a href="#" class="stretched-link">سعید نوری</a></h6>
                                        <p class="mb-0">تیکت جدید با شماره 234 باز شد</p>
                                        <span class="small">9 ساعت قبل</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Ticket item END -->

                        </div>
                        <!-- Card body END -->
                    </div>
                </div>
                <!-- Ticket END -->
            </div>
            <!-- Chart and Ticket END -->

            <!-- Top listed Cards START -->
            <div class="row g-4">

                <!-- Top instructors START -->
                <div class="col-lg-6 col-xxl-4">
                    <div class="card shadow h-100">

                        <!-- Card header -->
                        <div class="card-header border-bottom d-flex justify-content-between align-items-center p-4">
                            <h5 class="card-header-title">مربیان آکادمی</h5>
                            <a href="#" class="btn btn-link p-0 mb-0">مشاهده همه</a>
                        </div>

                        <!-- Card body START -->
                        <div class="card-body p-4">

                            <!-- Instructor item START -->
                            <div class="d-sm-flex justify-content-between align-items-center">
                                <!-- Avatar and info -->
                                <div class="d-sm-flex align-items-center mb-1 mb-sm-0">
                                    <!-- Avatar -->
                                    <div class="avatar avatar-md flex-shrink-0">
                                        <img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg"
                                             alt="avatar">
                                    </div>
                                    <!-- Info -->
                                    <div class="ms-0 ms-sm-2 mt-2 mt-sm-0">
                                        <h6 class="mb-1 fw-normal">نیلوفر جلیلی<i
                                                class="bi bi-patch-check-fill text-info small ms-1"></i></h6>
                                        <ul class="list-inline mb-0 small">
                                            <li class="list-inline-item fw-light me-2 mb-1 mb-sm-0"><i
                                                    class="fas fa-book text-purple me-1"></i>25 دوره
                                            </li>
                                            <li class="list-inline-item fw-light me-2 mb-1 mb-sm-0"><i
                                                    class="fas fa-star text-warning me-1"></i>4.5/5.0
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Button -->
                                <a href="#" class="btn btn-sm btn-light mb-0">مشاهده</a>
                            </div>
                            <!-- Instructor item END -->

                            <hr><!-- Divider -->

                            <!-- Instructor item START -->
                            <div class="d-sm-flex justify-content-between align-items-center">
                                <!-- Avatar and info -->
                                <div class="d-sm-flex align-items-center mb-1 mb-sm-0">
                                    <!-- Avatar -->
                                    <div class="avatar avatar-md flex-shrink-0">
                                        <img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg"
                                             alt="avatar">
                                    </div>
                                    <!-- Info -->
                                    <div class="ms-0 ms-sm-2 mt-2 mt-sm-0">
                                        <h6 class="mb-1 fw-normal">پوریا احمدی</h6>
                                        <ul class="list-inline mb-0 small">
                                            <li class="list-inline-item fw-light me-2 mb-1 mb-sm-0"><i
                                                    class="fas fa-book text-purple me-1"></i>18 دوره
                                            </li>
                                            <li class="list-inline-item fw-light me-2 mb-1 mb-sm-0"><i
                                                    class="fas fa-star text-warning me-1"></i>4.5/5.0
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Button -->
                                <a href="#" class="btn btn-sm btn-light mb-0">مشاهده</a>
                            </div>
                            <!-- Instructor item END -->

                            <hr><!-- Divider -->

                            <!-- Instructor item START -->
                            <div class="d-sm-flex justify-content-between align-items-center">
                                <!-- Avatar and info -->
                                <div class="d-sm-flex align-items-center mb-1 mb-sm-0">
                                    <!-- Avatar -->
                                    <div class="avatar avatar-md flex-shrink-0">
                                        <img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg"
                                             alt="avatar">
                                    </div>
                                    <!-- Info -->
                                    <div class="ms-0 ms-sm-2 mt-2 mt-sm-0">
                                        <h6 class="mb-1 fw-normal">الهام حسینی<i
                                                class="bi bi-patch-check-fill text-info small ms-1"></i></h6>
                                        <ul class="list-inline mb-0 small">
                                            <li class="list-inline-item fw-light me-2 mb-1 mb-sm-0"><i
                                                    class="fas fa-book text-purple me-1"></i>21 دوره
                                            </li>
                                            <li class="list-inline-item fw-light me-2 mb-1 mb-sm-0"><i
                                                    class="fas fa-star text-warning me-1"></i>4.8/5.0
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Button -->
                                <a href="#" class="btn btn-sm btn-light mb-0">مشاهده</a>
                            </div>
                            <!-- Instructor item END -->

                            <hr><!-- Divider -->

                            <!-- Instructor item START -->
                            <div class="d-sm-flex justify-content-between align-items-center">
                                <!-- Avatar and info -->
                                <div class="d-sm-flex align-items-center mb-1 mb-sm-0">
                                    <!-- Avatar -->
                                    <div class="avatar avatar-md flex-shrink-0">
                                        <img class="avatar-img rounded-circle" src="assets/images/avatar/04.jpg"
                                             alt="avatar">
                                    </div>
                                    <!-- Info -->
                                    <div class="ms-0 ms-sm-2 mt-2 mt-sm-0">
                                        <h6 class="mb-1 fw-normal">مهدی علیزاده</h6>
                                        <ul class="list-inline mb-0 small">
                                            <li class="list-inline-item fw-light me-2 mb-1 mb-sm-0"><i
                                                    class="fas fa-book text-purple me-1"></i>15 دوره
                                            </li>
                                            <li class="list-inline-item fw-light me-2 mb-1 mb-sm-0"><i
                                                    class="fas fa-star text-warning me-1"></i>4.5/5.0
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Button -->
                                <a href="#" class="btn btn-sm btn-light mb-0">مشاهده</a>
                            </div>
                            <!-- Instructor item END -->

                            <hr><!-- Divider -->

                            <!-- Instructor item START -->
                            <div class="d-sm-flex justify-content-between align-items-center">
                                <!-- Avatar and info -->
                                <div class="d-sm-flex align-items-center mb-1 mb-sm-0">
                                    <!-- Avatar -->
                                    <div class="avatar avatar-md flex-shrink-0">
                                        <img class="avatar-img rounded-circle" src="assets/images/avatar/05.jpg"
                                             alt="avatar">
                                    </div>
                                    <!-- Info -->
                                    <div class="ms-0 ms-sm-2 mt-2 mt-sm-0">
                                        <h6 class="mb-1 fw-normal">لیندا محمدی<i
                                                class="bi bi-patch-check-fill text-info small ms-1"></i></h6>
                                        <ul class="list-inline mb-0 small">
                                            <li class="list-inline-item fw-light me-2 mb-1 mb-sm-0"><i
                                                    class="fas fa-book text-purple me-1"></i>29 دوره
                                            </li>
                                            <li class="list-inline-item fw-light me-2 mb-1 mb-sm-0"><i
                                                    class="fas fa-star text-warning me-1"></i>4.5/5.0
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Button -->
                                <a href="#" class="btn btn-sm btn-light mb-0">مشاهده</a>
                            </div>
                            <!-- Instructor item END -->

                        </div>
                        <!-- Card body END -->
                    </div>
                </div>
                <!-- Top instructors END -->

                <!-- Notice Board START -->
                <div class="col-lg-6 col-xxl-4">
                    <div class="card shadow h-100">
                        <!-- Card header -->
                        <div class="card-header border-bottom p-4">
                            <h5 class="card-header-title">نوتیفیکیشن ها</h5>
                        </div>

                        <!-- Card body START -->
                        <div class="card-body p-4">
                            <div class="custom-scrollbar h-300px">

                                <!-- Notice Board item START -->
                                <div class="d-flex justify-content-between position-relative">
                                    <div class="d-sm-flex">
                                        <div
                                            class="icon-lg bg-purple bg-opacity-10 text-purple rounded-2 flex-shrink-0">
                                            <i class="fas fa-user-tie fs-5"></i></div>
                                        <!-- Info -->
                                        <div class="ms-0 ms-sm-3 mt-2 mt-sm-0">
                                            <h6 class="mb-0 fw-normal"><a href="#" class="stretched-link">ثبت نام
                                                    مدرس</a></h6>
                                            <p class="mb-0">نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                            <span class="small">5 دقیقه قبل</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Notice Board item END -->

                                <hr><!-- Divider -->

                                <!-- Notice Board item START -->
                                <div class="d-flex justify-content-between position-relative">
                                    <div class="d-sm-flex">
                                        <div
                                            class="icon-lg bg-orange bg-opacity-10 text-orange rounded-2 flex-shrink-0">
                                            <i class="fas fa-book-open fs-5"></i></div>
                                        <!-- Info -->
                                        <div class="ms-0 ms-sm-3 mt-2 mt-sm-0">
                                            <h6 class="mb-0 fw-normal"><a href="#" class="stretched-link">به روزرسانی
                                                    دوره</a></h6>
                                            <p class="mb-0">نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                            <span class="small">4 ساعت قبل</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Notice Board item END -->

                                <hr><!-- Divider -->

                                <!-- Notice Board item START -->
                                <div class="d-flex justify-content-between position-relative">
                                    <div class="d-sm-flex">
                                        <div class="icon-lg bg-info bg-opacity-10 text-info rounded-2 flex-shrink-0"><i
                                                class="fas fa-book fs-5"></i></div>
                                        <!-- Info -->
                                        <div class="ms-0 ms-sm-3 mt-2 mt-sm-0">
                                            <h6 class="mb-0 fw-normal"><a href="#" class="stretched-link">به روزرسانی
                                                    سایت</a></h6>
                                            <p class="mb-0">نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                            <span class="small">2 روز قبل</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Notice Board item END -->

                                <hr><!-- Divider -->

                                <!-- Notice Board item START -->
                                <div class="d-flex justify-content-between position-relative">
                                    <div class="d-sm-flex">
                                        <div
                                            class="icon-lg bg-danger bg-opacity-10 text-danger rounded-2 flex-shrink-0">
                                            <i class="fas fa-globe fs-5"></i></div>
                                        <!-- Info -->
                                        <div class="ms-0 ms-sm-3 mt-2 mt-sm-0">
                                            <h6 class="mb-0"><a href="#" class="stretched-link">افزودن ویژگی های
                                                    جدید</a></h6>
                                            <p class="mb-0">با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                                گرافیک است.</p>
                                            <span class="small">3 روز قبل</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Notice Board item END -->
                            </div>
                        </div>
                        <!-- Card body END -->

                        <!-- Card footer START -->
                        <div class="card-footer border-top">
                            <div class="alert alert-success d-flex align-items-center mb-0 py-2">
                                <div>
                                    <small class="mb-0">45 نوتیفیکیشن دیگر</small>
                                </div>
                                <div class="ms-auto">
                                    <a class="btn btn-sm btn-success-soft mb-0" href="#!"> مشاهده همه </a>
                                </div>
                            </div>
                        </div>
                        <!-- Card footer START -->
                    </div>
                </div>
                <!-- Notice Board END -->

                <!-- Traffic sources START -->
                <div class="col-lg-6 col-xxl-4">
                    <div class="card shadow h-100">

                        <!-- Card header -->
                        <div class="card-header border-bottom d-flex justify-content-between align-items-center p-4">
                            <h5 class="card-header-title">ترافیک بازدید</h5>
                            <a href="#" class="btn btn-link p-0 mb-0">مشاهده همه</a>
                        </div>

                        <!-- Card body START -->
                        <div class="card-body p-4">
                            <!-- Chart -->
                            <div class="col-sm-6 mx-auto">
                                <div id="ChartTrafficViews"></div>
                            </div>

                            <!-- Content -->
                            <ul class="list-group list-group-borderless mt-3">
                                <li class="list-group-item"><i class="text-primary fas fa-circle me-2"></i>دوره جامع
                                    آموزش Figma
                                </li>
                                <li class="list-group-item"><i class="text-success fas fa-circle me-2"></i>آموزش رایگان
                                    Blazor WebAssembly
                                </li>
                                <li class="list-group-item"><i class="text-warning fas fa-circle me-2"></i>دوره جامع
                                    آموزش Laravel
                                </li>
                                <li class="list-group-item"><i class="text-danger fas fa-circle me-2"></i>دوره جامع
                                    آموزش CSS
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Card body END -->
                </div>
                <!-- Traffic sources END -->

            </div>
            <!-- Top listed Cards END -->

        </div>
        <!-- Page main content END -->
    </div>
    <!-- Page content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

<!-- Bootstrap JS -->
<script src="/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Vendors -->
<script src="/assets/vendor/purecounterjs/dist/purecounter_vanilla.js"></script>
<script src="/assets/vendor/apexcharts/js/apexcharts.min.js"></script>
<script src="/assets/vendor/overlay-scrollbar/js/overlayscrollbars.min.js"></script>

<!-- Template Functions -->
<script src="/assets/js/functions.js"></script>


</body>

</html>