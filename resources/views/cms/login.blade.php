<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin CMS | Login</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome untuk Ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }

        .login-card {
            background: rgba(255, 255, 255, 0.95);
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            width: 100%;
            max-width: 400px;
        }

        .card-header {
            background: transparent;
            border-bottom: none;
            padding: 30px 30px 10px;
            text-align: center;
        }

        .card-header h3 {
            font-weight: 600;
            color: #333;
            letter-spacing: -1px;
        }

        .card-body {
            padding: 30px;
        }

        .form-control {
            border-radius: 8px;
            padding: 12px 15px;
            border: 1px solid #ddd;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            box-shadow: 0 0 0 3px rgba(118, 75, 162, 0.2);
            border-color: #764ba2;
        }

        .btn-primary {
            background: #764ba2;
            border: none;
            padding: 12px;
            border-radius: 8px;
            font-weight: 600;
            transition: transform 0.2s ease;
        }

        .btn-primary:hover {
            background: #5a397e;
            transform: translateY(-1px);
        }

        .brand-logo {
            font-size: 2.5rem;
            color: #764ba2;
            margin-bottom: 15px;
        }

        .input-group-text {
            background: transparent;
            border-right: none;
            color: #777;
        }

        .form-control {
            border-left: none;
        }

        .input-group:focus-within .input-group-text {
            border-color: #764ba2;
            color: #764ba2;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-8 col-md-6 col-lg-4">
                <div class="login-card">
                    <div class="card-header">
                        <div class="brand-logo">
                            <i class="fas fa-user-shield"></i>
                        </div>
                        <h3>Admin Login</h3>
                        <p class="text-muted small">Silakan masuk ke panel kendali</p>
                    </div>

                    <div class="card-body">
                        <!-- Alert Errors -->
                        @if($errors->any())
                            <div class="alert alert-danger border-0 small">
                                <ul class="mb-0 ps-3">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('admin.login.post') }}">
                            @csrf
                            
                            <!-- Username -->
                            <div class="mb-3">
                                <label for="username" class="form-label small fw-bold">Username</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username" required autofocus>
                                </div>
                            </div>

                            <!-- Password -->
                            <div class="mb-4">
                                <label for="password" class="form-label small fw-bold">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="••••••••" required>
                                </div>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">
                                    Masuk Ke Dashboard <i class="fas fa-sign-in-alt ms-1"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer bg-light border-0 py-3 text-center">
                        <small class="text-muted">&copy; 2026 CMS Dashboard</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>