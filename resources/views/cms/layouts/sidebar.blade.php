<aside class="main-sidebar sidebar-light-primary elevation-0 border-right">
    <a href="{{ route('admin.dashboard') }}" class="brand-link border-0 text-center py-4">
        <span class="brand-text font-weight-bold text-primary" style="letter-spacing: 1px;">CMS<span class="text-dark"> Dashboard</span></span>
    </a>

    <div class="sidebar px-3">
        <nav class="mt-4">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                <li class="nav-header text-uppercase small font-weight-bold text-muted mb-2">Menu Utama</li>
                
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-header text-uppercase small font-weight-bold text-muted mt-3 mb-2">Manajemen Medis</li>
                
                <li class="nav-item">
                    <a href="{{ route('admin.doctors') }}" class="nav-link {{ request()->routeIs('admin.doctors*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-md"></i>
                        <p>Data Dokter</p>
                    </a>
                </li>

                <li class="nav-item border-bottom mb-2 pb-2">
                    <a href="{{ route('admin.jadwal_dokter.index') }}" class="nav-link {{ request()->routeIs('admin.jadwal_dokter*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-calendar-check"></i>
                        <p>Jadwal Praktik</p>
                    </a>
                </li>

                <li class="nav-header text-uppercase small font-weight-bold text-muted mt-3 mb-2">Konten Web</li>

                @php
                    $menus = [
                        ['route' => 'admin.promos', 'icon' => 'fa-bullhorn', 'label' => 'Promo'],
                        ['route' => 'admin.artikels', 'icon' => 'fa-newspaper', 'label' => 'Artikel'],
                        ['route' => 'admin.karirs', 'icon' => 'fa-briefcase', 'label' => 'Karir'],
                        ['route' => 'admin.kritik_sarans', 'icon' => 'fa-comment-dots', 'label' => 'Kritik Saran'],
                    ];
                @endphp

                @foreach($menus as $menu)
                <li class="nav-item">
                    <a href="{{ route($menu['route']) }}" class="nav-link {{ request()->routeIs($menu['route'] . '*') ? 'active' : '' }}">
                        <i class="nav-icon fas {{ $menu['icon'] }}"></i>
                        <p>{{ $menu['label'] }}</p>
                    </a>
                </li>
                @endforeach
            </ul>
        </nav>
    </div>
</aside>