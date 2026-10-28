<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="/dashboard">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="/admin/about">
                <i class="bi bi-info-circle"></i>
                <span>Tentang</span>
            </a>
        </li><!-- End Tentang Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#team" data-bs-toggle="collapse" href="#">
                <i class="bi bi-people"></i><span>Kepengurusan</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="team" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('team.index')}}">
                        <i class="bi bi-circle"></i><span>Daftar Kepengurusan</span>
                    </a>
                    <a href="{{ route('team.create')}}">
                        <i class="bi bi-circle"></i><span>Tambah Kepengurusan</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Team Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#blog" data-bs-toggle="collapse" href="#">
                <i class="bi bi-newspaper"></i><span>Berita</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="blog" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('blog.index')}}">
                        <i class="bi bi-circle"></i><span>Daftar Berita</span>
                    </a>
                    <a href="{{ route('blog.create')}}">
                        <i class="bi bi-circle"></i><span>Tambah Berita</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Blog Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#schedule" data-bs-toggle="collapse" href="#">
                <i class="bi bi-calendar"></i><span>Agenda</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="schedule" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('schedule.index')}}">
                        <i class="bi bi-circle"></i><span>Daftar Agenda</span>
                    </a>
                    <a href="{{ route('schedule.create')}}">
                        <i class="bi bi-circle"></i><span>Tambah Agenda</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Schedule Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#gallery" data-bs-toggle="collapse" href="#">
                <i class="bi bi-images"></i><span>Galleri</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="gallery" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('gallery.index')}}">
                        <i class="bi bi-circle"></i><span>Daftar Galleri</span>
                    </a>
                    <a href="{{ route('gallery.create')}}">
                        <i class="bi bi-circle"></i><span>Tambah Galleri</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Gallery Nav -->


        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="/" target="_blank">
                <i class="bi bi-globe"></i>
                <span>Lihat website</span>
            </a>
        </li><!-- End Tentang Nav -->



    </ul>

</aside>