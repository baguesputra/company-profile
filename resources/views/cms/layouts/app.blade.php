<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CMS') | Panel</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('../adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('../adminlte/dist/css/adminlte.min.css') }}">
    
    <style>
        :root { --primary-color: #4361ee; --bg-light: #f8f9fa; }
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: var(--bg-light); }
        
        /* Layout Clean-up */
        .content-wrapper { background-color: var(--bg-light); border-top-left-radius: 25px; margin-top: -20px; z-index: 1; position: relative; padding: 20px; }
        .main-header { border-bottom: none !important; }
        
        /* Card Styling */
        .card { border: none; border-radius: 15px; box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075); transition: transform 0.2s; }
        .card:hover { transform: translateY(-2px); }
        
        /* Sidebar Polish */
        .main-sidebar { background-color: #ffffff !important; }
        .sidebar-dark-primary .nav-sidebar > .nav-item > .nav-link.active {
            background-color: var(--primary-color) !important;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(67, 97, 238, 0.3);
        }
        .nav-link { color: #5f6368 !important; border-radius: 12px; margin-bottom: 5px; font-weight: 500; }
        .nav-link:hover { background-color: #f1f3f4 !important; color: var(--primary-color) !important; }
        .nav-icon { font-size: 0.9rem; margin-right: 10px !important; }
        
        /* Breadcrumb Minimalist */
        .breadcrumb { background: transparent; padding: 0; font-size: 0.85rem; }
    </style>
    @stack('styles')
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
    <div class="wrapper">
        @include('cms.layouts.header')
        @include('cms.layouts.sidebar')
        
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div>
                            <h2 class="fw-bold mb-0 text-dark">@yield('page_title')</h2>
                            <small class="text-muted"></small>
                        </div>
                        @yield('header_action')
                    </div>
                </div>
            </div>

            <section class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </section>
        </div>
        
        @include('cms.layouts.footer')
    </div>

    <script src="{{ asset('../adminlte/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('../adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('../adminlte/dist/js/adminlte.min.js') }}"></script>
    @stack('scripts')
</body>
</html>