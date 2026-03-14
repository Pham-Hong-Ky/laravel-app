@extends('layout.customer')

@section('title', 'Trang chủ - ShopStore')

@section('content')
<!-- Hero Banner -->
<section class="hero-banner">
    <div class="container">
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h1 class="display-4 fw-bold">Sale cuối năm</h1>
                            <p class="fs-5">Giảm giá lên đến 70% cho tất cả sản phẩm</p>
                            <a href="/products" class="btn btn-light btn-lg">Mua ngay</a>
                        </div>
                        <div class="col-md-6 text-center">
                            <img src="https://via.placeholder.com/500x300?text=Sale+Banner" alt="Sale Banner" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h1 class="display-4 fw-bold">Sản phẩm mới</h1>
                            <p class="fs-5">Khám phá những sản phẩm mới nhất trong tuần</p>
                            <a href="/products" class="btn btn-light btn-lg">Xem ngay</a>
                        </div>
                        <div class="col-md-6 text-center">
                            <img src="https://via.placeholder.com/500x300?text=New+Products" alt="New Products" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h1 class="display-4 fw-bold">Miễn phí vận chuyển</h1>
                            <p class="fs-5">Cho tất cả đơn hàng trên 500.000đ</p>
                            <a href="/products" class="btn btn-light btn-lg">Mua sắm</a>
                        </div>
                        <div class="col-md-6 text-center">
                            <img src="https://via.placeholder.com/500x300?text=Free+Shipping" alt="Free Shipping" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
</section>

<!-- Quick Categories -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-6 mb-3">
                <a href="/products" class="text-decoration-none">
                    <div class="text-center p-3 bg-white rounded shadow-sm h-100">
                        <i class="fas fa-mobile-alt fa-2x text-primary mb-2"></i>
                        <h6>Điện thoại</h6>
                    </div>
                </a>
            </div>
            <div class="col-md-2 col-6 mb-3">
                <a href="/products" class="text-decoration-none">
                    <div class="text-center p-3 bg-white rounded shadow-sm h-100">
                        <i class="fas fa-laptop fa-2x text-primary mb-2"></i>
                        <h6>Laptop</h6>
                    </div>
                </a>
            </div>
            <div class="col-md-2 col-6 mb-3">
                <div class="text-center p-3 bg-white rounded shadow-sm h-100">
                    <i class="fas fa-tshirt fa-2x text-primary mb-2"></i>
                    <h6>Thời trang</h6>
                </div>
            </div>
            <div class="col-md-2 col-6 mb-3">
                <div class="text-center p-3 bg-white rounded shadow-sm h-100">
                    <i class="fas fa-home fa-2x text-primary mb-2"></i>
                    <h6>Gia dụng</h6>
                </div>
            </div>
            <div class="col-md-2 col-6 mb-3">
                <div class="text-center p-3 bg-white rounded shadow-sm h-100">
                    <i class="fas fa-gamepad fa-2x text-primary mb-2"></i>
                    <h6>Đồ chơi</h6>
                </div>
            </div>
            <div class="col-md-2 col-6 mb-3">
                <div class="text-center p-3 bg-white rounded shadow-sm h-100">
                    <i class="fas fa-dumbbell fa-2x text-primary mb-2"></i>
                    <h6>Thể thao</h6>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Flash Sale -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center mb-4">
            <div class="col-md-6">
                <h2 class="section-title text-start">⚡ Flash Sale</h2>
            </div>
            <div class="col-md-6 text-end">
                <div class="d-inline-flex align-items-center">
                    <span class="text-muted me-2">Kết thúc trong:</span>
                    <span class="badge bg-danger fs-6">12:34:56</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-6 mb-4">
                <div class="card product-card h-100">
                    <div class="position-relative">
                        <img src="https://via.placeholder.com/250x250?text=Product+1" class="card-img-top" alt="Product">
                        <span class="badge-discount">-50%</span>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">iPhone 15 Pro Max</h6>
                        <div class="mb-2">
                            <span class="text-danger fw-bold">15.990.000đ</span>
                            <small class="text-muted text-decoration-line-through">31.980.000đ</small>
                        </div>
                        <div class="progress mb-2" style="height: 6px;">
                            <div class="progress-bar bg-danger" style="width: 75%"></div>
                        </div>
                        <small class="text-muted">Đã bán 75/100</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="card product-card h-100">
                    <div class="position-relative">
                        <img src="https://via.placeholder.com/250x250?text=Product+2" class="card-img-top" alt="Product">
                        <span class="badge-discount">-30%</span>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">Laptop Dell XPS 13</h6>
                        <div class="mb-2">
                            <span class="text-danger fw-bold">21.000.000đ</span>
                            <small class="text-muted text-decoration-line-through">30.000.000đ</small>
                        </div>
                        <div class="progress mb-2" style="height: 6px;">
                            <div class="progress-bar bg-danger" style="width: 60%"></div>
                        </div>
                        <small class="text-muted">Đã bán 60/100</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="card product-card h-100">
                    <div class="position-relative">
                        <img src="https://via.placeholder.com/250x250?text=Product+3" class="card-img-top" alt="Product">
                        <span class="badge-discount">-40%</span>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">Áo sơ mi nam</h6>
                        <div class="mb-2">
                            <span class="text-danger fw-bold">299.000đ</span>
                            <small class="text-muted text-decoration-line-through">499.000đ</small>
                        </div>
                        <div class="progress mb-2" style="height: 6px;">
                            <div class="progress-bar bg-danger" style="width: 90%"></div>
                        </div>
                        <small class="text-muted">Đã bán 90/100</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="card product-card h-100">
                    <div class="position-relative">
                        <img src="https://via.placeholder.com/250x250?text=Product+4" class="card-img-top" alt="Product">
                        <span class="badge-discount">-25%</span>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">Tai nghe AirPods Pro</h6>
                        <div class="mb-2">
                            <span class="text-danger fw-bold">4.500.000đ</span>
                            <small class="text-muted text-decoration-line-through">6.000.000đ</small>
                        </div>
                        <div class="progress mb-2" style="height: 6px;">
                            <div class="progress-bar bg-danger" style="width: 45%"></div>
                        </div>
                        <small class="text-muted">Đã bán 45/100</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Best Sellers -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title">🔥 Sản phẩm bán chạy</h2>
        <div class="row">
            <div class="col-md-3 col-6 mb-4">
                <div class="card product-card h-100">
                    <div class="position-relative">
                        <img src="https://via.placeholder.com/250x250?text=Best+Seller+1" class="card-img-top" alt="Product">
                        <span class="badge bg-warning text-dark position-absolute" style="top: 10px; left: 10px;">Best Seller</span>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">Samsung Galaxy S24</h6>
                        <div class="mb-2">
                            <div class="text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <small class="text-muted">(120 đánh giá)</small>
                            </div>
                        </div>
                        <p class="text-primary fw-bold mb-0">22.990.000đ</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="card product-card h-100">
                    <div class="position-relative">
                        <img src="https://via.placeholder.com/250x250?text=Best+Seller+2" class="card-img-top" alt="Product">
                        <span class="badge bg-warning text-dark position-absolute" style="top: 10px; left: 10px;">Best Seller</span>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">MacBook Air M2</h6>
                        <div class="mb-2">
                            <div class="text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <small class="text-muted">(95 đánh giá)</small>
                            </div>
                        </div>
                        <p class="text-primary fw-bold mb-0">28.990.000đ</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="card product-card h-100">
                    <div class="position-relative">
                        <img src="https://via.placeholder.com/250x250?text=Best+Seller+3" class="card-img-top" alt="Product">
                        <span class="badge bg-warning text-dark position-absolute" style="top: 10px; left: 10px;">Best Seller</span>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">Váy maxi hoa</h6>
                        <div class="mb-2">
                            <div class="text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <small class="text-muted">(87 đánh giá)</small>
                            </div>
                        </div>
                        <p class="text-primary fw-bold mb-0">599.000đ</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="card product-card h-100">
                    <div class="position-relative">
                        <img src="https://via.placeholder.com/250x250?text=Best+Seller+4" class="card-img-top" alt="Product">
                        <span class="badge bg-warning text-dark position-absolute" style="top: 10px; left: 10px;">Best Seller</span>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">Nồi cơm điện Toshiba</h6>
                        <div class="mb-2">
                            <div class="text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <small class="text-muted">(203 đánh giá)</small>
                            </div>
                        </div>
                        <p class="text-primary fw-bold mb-0">1.890.000đ</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- New Products -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title">✨ Sản phẩm mới</h2>
        <div class="row">
            <div class="col-md-3 col-6 mb-4">
                <div class="card product-card h-100">
                    <div class="position-relative">
                        <img src="https://via.placeholder.com/250x250?text=New+Product+1" class="card-img-top" alt="Product">
                        <span class="badge-new">Mới</span>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">iPhone 16 Pro</h6>
                        <div class="mb-2">
                            <div class="text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <small class="text-muted">(5 đánh giá)</small>
                            </div>
                        </div>
                        <p class="text-primary fw-bold mb-0">35.990.000đ</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="card product-card h-100">
                    <div class="position-relative">
                        <img src="https://via.placeholder.com/250x250?text=New+Product+2" class="card-img-top" alt="Product">
                        <span class="badge-new">Mới</span>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">Gaming Chair RGB</h6>
                        <div class="mb-2">
                            <div class="text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <small class="text-muted">(8 đánh giá)</small>
                            </div>
                        </div>
                        <p class="text-primary fw-bold mb-0">4.500.000đ</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="card product-card h-100">
                    <div class="position-relative">
                        <img src="https://via.placeholder.com/250x250?text=New+Product+3" class="card-img-top" alt="Product">
                        <span class="badge-new">Mới</span>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">Smartwatch Apple Ultra 2</h6>
                        <div class="mb-2">
                            <div class="text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <small class="text-muted">(12 đánh giá)</small>
                            </div>
                        </div>
                        <p class="text-primary fw-bold mb-0">19.990.000đ</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="card product-card h-100">
                    <div class="position-relative">
                        <img src="https://via.placeholder.com/250x250?text=New+Product+4" class="card-img-top" alt="Product">
                        <span class="badge-new">Mới</span>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">Túi xách Louis Vuitton</h6>
                        <div class="mb-2">
                            <div class="text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <small class="text-muted">(3 đánh giá)</small>
                            </div>
                        </div>
                        <p class="text-primary fw-bold mb-0">45.000.000đ</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h3>Đăng ký nhận tin khuyến mãi</h3>
                <p>Nhận thông báo về các chương trình khuyến mãi mới nhất</p>
            </div>
            <div class="col-md-6">
                <form class="d-flex">
                    <input type="email" class="form-control me-2" placeholder="Nhập email của bạn">
                    <button class="btn btn-light" type="submit">Đăng ký</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    // Countdown timer for flash sale
    function updateCountdown() {
        const now = new Date().getTime();
        const endTime = now + (12 * 60 * 60 * 1000) + (34 * 60 * 1000) + (56 * 1000); // 12:34:56
        
        setInterval(function() {
            const now = new Date().getTime();
            const distance = endTime - now;
            
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
            document.querySelector('.badge.bg-danger').innerHTML = 
                (hours < 10 ? "0" + hours : hours) + ":" +
                (minutes < 10 ? "0" + minutes : minutes) + ":" +
                (seconds < 10 ? "0" + seconds : seconds);
        }, 1000);
    }
    
    updateCountdown();
</script>
@endsection