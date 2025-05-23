            <!-- Menu -->
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="{{ url('/admin') }}" class="app-brand-link d-flex align-items-center">
                        <img src="{{ asset('materio/assets/img/favicon/logo.png') }}" alt="Logo"
                            style="height: 30px; margin-right: 10px;">
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
                        <a href="{{ url('/admin/generate-link-Lulusan') }}" class="menu-link">
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
                        <a href="{{ url('/admin/generate-link-PenggunaLulusan') }}" class="menu-link">
                            <i class="menu-icon tf-icons ri-link"></i>
                            <div data-i18n="Chat">Generate Link</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ url('/admin/tambah-form') }}" class="menu-link">
                            <i class="menu-icon tf-icons ri-file-add-line"></i>
                            <div data-i18n="Chat">Tambah Form</div>
                        </a>
                    </li>

                    <!-- Laporan -->
                    <li class="menu-header mt-7">
                        <span class="menu-header-text">Laporan</span>
                    </li>

                    <!-- Rekap Hasil (dropdown) -->
                    <li class="menu-item">
                        <a href="#" class="menu-link menu-toggle">
                            <i class="menu-icon icon-base ri-file-chart-line"></i>
                            <div data-i18n="Rekap Hasil">Rekap Hasil</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{ url('/admin/report/tracer-study') }}" class="menu-link">
                                    <div data-i18n="Tracer Study Lulusan">Tracer Study Lulusan</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('/admin/report/survey-kepuasan') }}" class="menu-link">
                                    <div data-i18n="Survei Kepuasan">Survei Kepuasan</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Rekap Belum Mengisi (dropdown) -->
                    <li class="menu-item">
                        <a href="#" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons ri-user-search-line"></i>
                            <div data-i18n="Rekap Belum Mengisi">Rekap Belum Mengisi</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{ url('/admin/report/belum-mengisi-lulusan') }}" class="menu-link">
                                    <div data-i18n="Lulusan">Lulusan</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('/admin/report/belum-mengisi-pengguna') }}" class="menu-link">
                                    <div data-i18n="Pengguna Lulusan">Pengguna Lulusan</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    </li>
                </ul>
            </aside>
            <!-- Menu -->
