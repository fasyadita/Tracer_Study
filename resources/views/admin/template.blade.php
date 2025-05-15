<!DOCTYPE html>
<html lang="en"
      class="light-style layout-menu-fixed layout-wide"
      dir="ltr"
      data-theme="theme-default"
      data-assets-path="{{ asset('materio/assets/')}}"
      data-template="vertical-menu-template-free"
      data-style="light">
  
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Admin - Tracer Study</title>
    <meta name="description" content="Admin Panel Tracer Study" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('materio/assets/img/favicon/logo.png')}}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('materio/assets/vendor/fonts/remixicon/remixicon.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('materio/assets/vendor/libs/node-waves/node-waves.css') }}" />
    <link rel="stylesheet" href="{{ asset('materio/assets/vendor/css/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('materio/assets/vendor/css/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('materio/assets/css/demo.css') }}" />
    <link rel="stylesheet" href="{{ asset('materio/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    <!-- Helpers -->
    <script src="{{ asset('materio/assets/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('materio/assets/js/config.js')}}"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                <a href="{{ url('/admin') }}" class="app-brand-link d-flex align-items-center">
                <img src="{{ asset('materio/assets/img/favicon/logo.png') }}" alt="Logo" style="height: 30px; margin-right: 10px;">
                <span class="app-brand-text demo menu-text fw-semibold ms-2">Tracer Study</span>
                </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- MENU -->
                    <li class="menu-item">
                        <a href="{{ url('/admin/dashboard') }}" class="menu-link ">
                            <i class="menu-icon tf-icons ri-home-smile-line"></i>
                            <div data-i18n="Dashboards">Dashboards</div>
                        </a>
                    </li>

                    <!-- Lulusan -->
                    <li class="menu-header mt-7">
                        <span class="menu-header-text">Lulusan</span>
                    </li>
                    <li class="menu-item">
                        <a href="{{ url('/admin/graduates') }}" class="menu-link">
                            <i class="menu-icon tf-icons ri-user-line"></i>
                            <div data-i18n="Email">Data Lulusan</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ url('/admin/generate-link') }}" class="menu-link">
                            <i class="menu-icon tf-icons ri-link"></i>
                            <div data-i18n="Chat">Generate Link</div>
                        </a>
                    </li>

                    <!-- Pengguna Lulusan -->
                    <li class="menu-header mt-7">
                        <span class="menu-header-text">Pengguna Lulusan</span>
                    </li>
                    <li class="menu-item">
                        <a href="{{ url('/admin/employers') }}" class="menu-link">
                            <i class="menu-icon tf-icons ri-building-line"></i>
                            <div data-i18n="Email">Data Instansi</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ url('/admin/surveys') }}" class="menu-link">
                            <i class="menu-icon tf-icons ri-survey-line"></i>
                            <div data-i18n="Chat">Rekap Survei</div>
                        </a>
                    </li>
                </ul>
            </aside>
            <!-- Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                @include('admin.navbar')
                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-fluid flex-grow-1 container-p-y">
                        @yield('content')
                    </div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <script src="{{ asset('materio/assets/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{ asset('materio/assets/vendor/libs/popper/popper.js')}}"></script>
    <script src="{{ asset('materio/assets/vendor/js/bootstrap.js')}}"></script>
    <script src="{{ asset('materio/assets/vendor/libs/node-waves/node-waves.js')}}"></script>
    <script src="{{ asset('materio/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('materio/assets/vendor/js/menu.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('materio/assets/js/main.js') }}"></script>
</body>
</html>