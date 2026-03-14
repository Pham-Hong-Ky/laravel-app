<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'E-Commerce Store')</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        .navbar-brand {
            font-weight: bold;
            color: #007bff !important;
        }
        
        .search-box {
            max-width: 500px;
        }
        
        .category-dropdown {
            background: #f8f9fa;
            border-radius: 8px;
        }
        
        .hero-banner {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 80px 0;
        }
        
        .product-card {
            transition: transform 0.2s;
            border: none;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 20px rgba(0,0,0,0.15);
        }
        
        .badge-discount {
            position: absolute;
            top: 10px;
            left: 10px;
            background: #ff4757;
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
        }
        
        .badge-new {
            position: absolute;
            top: 10px;
            right: 10px;
            background: #2ed573;
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
        }
        
        .section-title {
            position: relative;
            font-weight: bold;
            margin-bottom: 40px;
            text-align: center;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: #007bff;
        }
        
        .cart-icon {
            position: relative;
        }
        
        .cart-badge {
            position: absolute;
            top: -5px;
            right: -10px;
            background: #ff4757;
            color: white;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
        }
        
        footer {
            background: #2c3e50;
            color: white;
            padding: 40px 0 20px;
        }
        
        .footer-links a {
            color: #bdc3c7;
            text-decoration: none;
            margin-bottom: 10px;
            display: block;
        }
        
        .footer-links a:hover {
            color: white;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <!-- Top Bar -->
        <div class="bg-dark text-white py-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <small><i class="fas fa-phone"></i> +84 123 456 789 | <i class="fas fa-envelope"></i> info@store.com</small>
                    </div>
                    <div class="col-md-6 text-end">
                        <small>Miễn phí vận chuyển cho đơn hàng trên 500k</small>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Main Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <i class="fas fa-store"></i> ShopStore
                </a>
                
                <!-- Search Form -->
                <div class="search-box mx-auto d-none d-lg-block">
                    <form class="d-flex">
                        <div class="input-group">
                            <select class="form-select" style="max-width: 150px;">
                                <option>Tất cả</option>
                                <option>Điện thoại</option>
                                <option>Laptop</option>
                                <option>Thời trang</option>
                                <option>Gia dụng</option>
                            </select>
                            <input class="form-control" type="search" placeholder="Tìm kiếm sản phẩm..." style="min-width: 300px;">
                            <button class="btn btn-primary" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
                
                <!-- Right Menu -->
                <div class="d-flex align-items-center">
                    <a href="#" class="text-decoration-none me-3">
                        <i class="fas fa-heart"></i>
                        <span class="d-none d-md-inline">Yêu thích</span>
                    </a>
                    <a href="#" class="text-decoration-none me-3 cart-icon">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="cart-badge">3</span>
                        <span class="d-none d-md-inline">Giỏ hàng</span>
                    </a>
                    <div class="dropdown">
                        <a href="#" class="text-decoration-none dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fas fa-user"></i>
                            <span class="d-none d-md-inline">Tài khoản</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Đăng nhập</a></li>
                            <li><a class="dropdown-item" href="#">Đăng ký</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        
        <!-- Categories Menu -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#categoryNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="categoryNav">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                <i class="fas fa-bars"></i> Danh mục sản phẩm
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><i class="fas fa-mobile-alt"></i> Điện thoại & Tablet</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-laptop"></i> Laptop & Máy tính</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-tshirt"></i> Thời trang Nam</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-female"></i> Thời trang Nữ</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-home"></i> Đồ gia dụng</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-gamepad"></i> Đồ chơi & Giải trí</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Khuyến mãi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/products">Sản phẩm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sản phẩm mới</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Bán chạy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Liên hệ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h5><i class="fas fa-store"></i> ShopStore</h5>
                    <p>Địa chỉ mua sắm trực tuyến tin cậy với hàng ngàn sản phẩm chất lượng.</p>
                    <div class="social-links">
                        <a href="#" class="text-light me-3"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-md-3">
                    <h6>Hỗ trợ khách hàng</h6>
                    <div class="footer-links">
                        <a href="#">Trung tâm trợ giúp</a>
                        <a href="#">Hướng dẫn mua hàng</a>
                        <a href="#">Hướng dẫn bán hàng</a>
                        <a href="#">Chính sách bảo hành</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <h6>Về chúng tôi</h6>
                    <div class="footer-links">
                        <a href="#">Giới thiệu</a>
                        <a href="#">Tuyển dụng</a>
                        <a href="#">Chính sách bảo mật</a>
                        <a href="#">Điều khoản sử dụng</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <h6>Liên hệ</h6>
                    <p><i class="fas fa-map-marker-alt"></i> 123 Đường ABC, Quận 1, TP.HCM</p>
                    <p><i class="fas fa-phone"></i> +84 123 456 789</p>
                    <p><i class="fas fa-envelope"></i> info@shopstore.com</p>
                </div>
            </div>
            <hr class="mt-4">
            <div class="row">
                <div class="col-12 text-center">
                    <p>&copy; 2026 ShopStore. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    @yield('scripts')
</body>
</html>