<nav class="main-header navbar navbar-expand navbar-light bg-white px-3">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link bg-light rounded-circle p-2" data-widget="pushmenu" href="#" role="button">
                <i class="fas fa-bars mx-1"></i>
            </a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto align-items-center">
        <li class="nav-item dropdown">
            <a class="nav-link d-flex align-items-center" data-toggle="dropdown" href="#">
                <div class="text-right mr-2 d-none d-sm-block">
                    <p class="mb-0 small fw-bold text-dark">{{ Auth::user()->username ?? 'Admin' }}</p>
                    <p class="mb-0 x-small text-muted" style="font-size: 10px;">Administrator</p>
                </div>
                <img src="https://ui-avatars.com/api/?name={{ Auth::user()->username ?? 'Admin' }}&background=4361ee&color=fff" 
                     class="rounded-circle border" width="35" height="35">
            </a>
            <div class="dropdown-menu dropdown-menu-right border-0 shadow-lg mt-3" style="border-radius: 12px; min-width: 200px;">
                <div class="px-4 py-3 border-bottom">
                    <p class="mb-0 font-weight-bold">{{ Auth::user()->username ?? 'Admin' }}</p>
                    <p class="mb-0 text-muted small">admin@company.com</p>
                </div>
                <a href="#" class="dropdown-item py-2"><i class="fas fa-user-edit mr-2 text-muted"></i> Edit Profil</a>
                <div class="dropdown-divider"></div>
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button type="submit" class="dropdown-item py-2 text-danger">
                        <i class="fas fa-power-off mr-2"></i> Keluar
                    </button>
                </form>
            </div>
        </li>
    </ul>
</nav>