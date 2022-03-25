<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            Noble<span>UI</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
                <a href="dashboard.html" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            @if (Auth::user()->role=='admin')
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Manajemen User</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a href="{{route('dokter.index')}}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Manajemen Dokter</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('orangtua.index')}}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Manajemen Orangtua</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('orangtua.index')}}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Manajemen Anak</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('kecamatan.index')}}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Manajemen Kecamatan</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('kelurahan.index')}}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Manajemen Kelurahan</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('sekolah.index')}}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Manajemen Sekolah</span>
                </a>
            </li>
            <li class="nav-item nav-category">Fitur</li>
            <li class="nav-item">
                <a href="/ukgs" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">UKGS</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="ukgm.html" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">UKGM</span>
                </a>
            </li>

            @elseif (Auth::user()->role=='orangtua')
            <li class="nav-item">
                <a href="{{route('viewanak')}}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Data Anak</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('pemeriksaanfisik.create')}}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Pemeriksaan</span>
                </a>
            </li>
            @endif

            
            
           
        </ul>
    </div>
</nav>
<nav class="settings-sidebar">
    <div class="sidebar-body">
        <a href="#" class="settings-sidebar-toggler">
            <i data-feather="settings"></i>
        </a>
        <h6 class="text-muted mb-2">Sidebar:</h6>
        <div class="mb-3 pb-3 border-bottom">
            <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight"
                    value="sidebar-light" checked>
                <label class="form-check-label" for="sidebarLight">
                    Light
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark"
                    value="sidebar-dark">
                <label class="form-check-label" for="sidebarDark">
                    Dark
                </label>
            </div>
        </div>
        <div class="theme-wrapper">
            <h6 class="text-muted mb-2">Light Theme:</h6>
            <a class="theme-item active" href="../demo1/dashboard.html">
                <img src="../assets/images/screenshots/light.jpg" alt="light theme">
            </a>
            <h6 class="text-muted mb-2">Dark Theme:</h6>
            <a class="theme-item" href="../demo2/dashboard.html">
                <img src="../assets/images/screenshots/dark.jpg" alt="light theme">
            </a>
        </div>
    </div>
</nav>
