@extends('layout.customer')

@section('title', 'Chi tiết sản phẩm - ShopStore')

@section('content')
<!-- Breadcrumb -->
<nav aria-label="breadcrumb" class="bg-light py-3">
    <div class="container">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="/products" class="text-decoration-none">Sản phẩm</a></li>
            <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Điện thoại</a></li>
            <li class="breadcrumb-item active">iPhone 15 Pro Max</li>
        </ol>
    </div>
</nav>

<!-- Product Detail -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <!-- Product Images -->
            <div class="col-md-6">
                <div class="product-gallery">
                    <div class="main-image mb-3">
                        <img id="mainImage" src="https://via.placeholder.com/500x500?text=iPhone+15+Pro+Max" alt="Product" class="img-fluid rounded shadow">
                    </div>
                    <div class="thumbnail-images d-flex gap-2">
                        <img src="https://via.placeholder.com/100x100?text=1" alt="Thumb 1" class="img-thumbnail thumbnail-img active" onclick="changeMainImage(this.src)">
                        <img src="https://via.placeholder.com/100x100?text=2" alt="Thumb 2" class="img-thumbnail thumbnail-img" onclick="changeMainImage(this.src)">
                        <img src="https://via.placeholder.com/100x100?text=3" alt="Thumb 3" class="img-thumbnail thumbnail-img" onclick="changeMainImage(this.src)">
                        <img src="https://via.placeholder.com/100x100?text=4" alt="Thumb 4" class="img-thumbnail thumbnail-img" onclick="changeMainImage(this.src)">
                    </div>
                </div>
            </div>
            
            <!-- Product Info -->
            <div class="col-md-6">
                <div class="product-info">
                    <h1 class="h2 mb-3">iPhone 15 Pro Max 256GB - Natural Titanium</h1>
                    
                    <!-- Rating -->
                    <div class="rating mb-3">
                        <div class="d-flex align-items-center">
                            <div class="text-warning me-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span class="text-dark ms-1">4.5</span>
                            </div>
                            <span class="text-muted">|</span>
                            <a href="#reviews" class="text-decoration-none ms-2">125 đánh giá</a>
                            <span class="text-muted mx-2">|</span>
                            <span class="text-muted">Đã bán 243</span>
                        </div>
                    </div>
                    
                    <!-- Price -->
                    <div class="price mb-4">
                        <div class="d-flex align-items-center">
                            <h2 class="text-danger mb-0 me-3">31.990.000đ</h2>
                            <span class="text-muted text-decoration-line-through">35.990.000đ</span>
                            <span class="badge bg-danger ms-2">-11%</span>
                        </div>
                        <small class="text-muted">Giá đã bao gồm VAT</small>
                    </div>
                    
                    <!-- Product Options -->
                    <div class="product-options mb-4">
                        <!-- Color Options -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Màu sắc:</label>
                            <div class="d-flex gap-2">
                                <button class="btn btn-outline-secondary active" type="button">Natural Titanium</button>
                                <button class="btn btn-outline-secondary" type="button">Blue Titanium</button>
                                <button class="btn btn-outline-secondary" type="button">White Titanium</button>
                                <button class="btn btn-outline-secondary" type="button">Black Titanium</button>
                            </div>
                        </div>
                        
                        <!-- Storage Options -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Dung lượng:</label>
                            <div class="d-flex gap-2">
                                <button class="btn btn-outline-secondary" type="button">128GB <br><small>29.990.000đ</small></button>
                                <button class="btn btn-outline-secondary active" type="button">256GB <br><small>31.990.000đ</small></button>
                                <button class="btn btn-outline-secondary" type="button">512GB <br><small>37.990.000đ</small></button>
                                <button class="btn btn-outline-secondary" type="button">1TB <br><small>43.990.000đ</small></button>
                            </div>
                        </div>
                        
                        <!-- Quantity -->
                        <div class="mb-4">
                            <label class="form-label fw-bold">Số lượng:</label>
                            <div class="d-flex align-items-center">
                                <button class="btn btn-outline-secondary" type="button" onclick="decreaseQuantity()">-</button>
                                <input type="number" class="form-control text-center mx-2" value="1" min="1" max="10" style="width: 80px;" id="quantity">
                                <button class="btn btn-outline-secondary" type="button" onclick="increaseQuantity()">+</button>
                                <small class="text-muted ms-3">Còn 15 sản phẩm</small>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Action Buttons -->
                    <div class="action-buttons mb-4">
                        <button class="btn btn-primary btn-lg me-2 px-4">
                            <i class="fas fa-cart-plus"></i> Thêm vào giỏ
                        </button>
                        <button class="btn btn-danger btn-lg px-4">
                            Mua ngay
                        </button>
                        <button class="btn btn-outline-secondary btn-lg ms-2">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>
                    
                    <!-- Product Features -->
                    <div class="product-features">
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Bảo hành chính hãng 12 tháng</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Miễn phí vận chuyển toàn quốc</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Hỗ trợ trả góp 0% lãi suất</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Đổi trả trong 30 ngày</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Product Details Tabs -->
<section class="py-5 bg-light">
    <div class="container">
        <ul class="nav nav-tabs justify-content-center mb-4" id="productTabs">
            <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#description">Mô tả sản phẩm</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#specifications">Thông số kỹ thuật</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#reviews">Đánh giá (125)</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#shipping">Vận chuyển</button>
            </li>
        </ul>
        
        <div class="tab-content">
            <!-- Description -->
            <div class="tab-pane fade show active" id="description">
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <div class="bg-white p-4 rounded shadow-sm">
                            <h4>iPhone 15 Pro Max - Titanium. Mạnh mẽ. Pro.</h4>
                            <p>iPhone 15 Pro Max. Được chế tác từ titanium cấp hàng không vũ trụ và có nút Tác Vụ mới có thể tùy biến, cùng hệ thống camera tiên tiến nhất từ trước đến nay trên iPhone.</p>
                            
                            <h5>Tính năng nổi bật:</h5>
                            <ul>
                                <li><strong>Thiết kế Titanium:</strong> Nhẹ hơn, bền hơn và cao cấp hơn bao giờ hết</li>
                                <li><strong>Chip A17 Pro:</strong> Hiệu năng đồ họa vượt trội với GPU 6 lõi</li>
                                <li><strong>Hệ thống camera Pro:</strong> Camera Chính 48MP, Ultra Wide và Telephoto với zoom quang học 5x</li>
                                <li><strong>Nút Tác Vụ:</strong> Có thể tùy biến để truy cập nhanh các tính năng yêu thích</li>
                                <li><strong>USB-C:</strong> Kết nối đa năng và truyền dữ liệu nhanh</li>
                            </ul>
                            
                            <img src="https://via.placeholder.com/600x300?text=Product+Features" alt="Features" class="img-fluid rounded mt-3">
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Specifications -->
            <div class="tab-pane fade" id="specifications">
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <div class="bg-white p-4 rounded shadow-sm">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td><strong>Màn hình</strong></td>
                                        <td>6.7 inch, Super Retina XDR OLED, 120Hz</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Chipset</strong></td>
                                        <td>Apple A17 Pro (3 nm)</td>
                                    </tr>
                                    <tr>
                                        <td><strong>RAM</strong></td>
                                        <td>8GB</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Dung lượng lưu trữ</strong></td>
                                        <td>256GB</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Camera sau</strong></td>
                                        <td>48MP + 12MP + 12MP</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Camera trước</strong></td>
                                        <td>12MP</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Pin</strong></td>
                                        <td>4422 mAh</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Hệ điều hành</strong></td>
                                        <td>iOS 17</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Kích thước</strong></td>
                                        <td>159.9 x 76.7 x 8.25 mm</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Trọng lượng</strong></td>
                                        <td>221g</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Reviews -->
            <div class="tab-pane fade" id="reviews">
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <div class="bg-white p-4 rounded shadow-sm">
                            <!-- Rating Summary -->
                            <div class="row mb-4">
                                <div class="col-md-4 text-center">
                                    <h2 class="display-4 text-warning">4.5</h2>
                                    <div class="text-warning mb-2">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <p class="text-muted">125 đánh giá</p>
                                </div>
                                <div class="col-md-8">
                                    <div class="mb-2">
                                        <div class="d-flex align-items-center">
                                            <span class="me-2">5</span>
                                            <div class="progress flex-grow-1 me-2">
                                                <div class="progress-bar bg-warning" style="width: 70%"></div>
                                            </div>
                                            <span class="text-muted">70%</span>
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <div class="d-flex align-items-center">
                                            <span class="me-2">4</span>
                                            <div class="progress flex-grow-1 me-2">
                                                <div class="progress-bar bg-warning" style="width: 20%"></div>
                                            </div>
                                            <span class="text-muted">20%</span>
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <div class="d-flex align-items-center">
                                            <span class="me-2">3</span>
                                            <div class="progress flex-grow-1 me-2">
                                                <div class="progress-bar bg-warning" style="width: 7%"></div>
                                            </div>
                                            <span class="text-muted">7%</span>
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <div class="d-flex align-items-center">
                                            <span class="me-2">2</span>
                                            <div class="progress flex-grow-1 me-2">
                                                <div class="progress-bar bg-warning" style="width: 2%"></div>
                                            </div>
                                            <span class="text-muted">2%</span>
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <div class="d-flex align-items-center">
                                            <span class="me-2">1</span>
                                            <div class="progress flex-grow-1 me-2">
                                                <div class="progress-bar bg-warning" style="width: 1%"></div>
                                            </div>
                                            <span class="text-muted">1%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <hr>
                            
                            <!-- Individual Reviews -->
                            <div class="reviews-list">
                                <div class="review-item mb-4">
                                    <div class="d-flex">
                                        <div class="avatar me-3">
                                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center text-white" style="width: 50px; height: 50px;">
                                                N
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-between">
                                                <h6 class="mb-1">Nguyễn Văn A</h6>
                                                <small class="text-muted">2 ngày trước</small>
                                            </div>
                                            <div class="text-warning mb-2">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <p class="mb-2">Sản phẩm rất tuyệt vời, chất lượng cao và giao hàng nhanh. Camera chụp ảnh rất đẹp, màn hình sáng và sắc nét. Rất hài lòng với chiếc iPhone này!</p>
                                            <div class="d-flex gap-2">
                                                <img src="https://via.placeholder.com/60x60?text=Img1" alt="Review image" class="rounded">
                                                <img src="https://via.placeholder.com/60x60?text=Img2" alt="Review image" class="rounded">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="review-item mb-4">
                                    <div class="d-flex">
                                        <div class="avatar me-3">
                                            <div class="bg-success rounded-circle d-flex align-items-center justify-content-center text-white" style="width: 50px; height: 50px;">
                                                T
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-between">
                                                <h6 class="mb-1">Trần Thị B</h6>
                                                <small class="text-muted">1 tuần trước</small>
                                            </div>
                                            <div class="text-warning mb-2">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <p class="mb-2">iPhone 15 Pro Max thực sự đáng đồng tiền bát gạo. Thiết kế titanium rất cao cấp, pin trâu, camera zoom xa rất tốt.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <button class="btn btn-outline-primary">Xem thêm đánh giá</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Shipping -->
            <div class="tab-pane fade" id="shipping">
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <div class="bg-white p-4 rounded shadow-sm">
                            <h4>Thông tin vận chuyển</h4>
                            
                            <div class="shipping-options">
                                <div class="d-flex justify-content-between align-items-center p-3 border rounded mb-3">
                                    <div>
                                        <h6 class="mb-1">Giao hàng tiêu chuẩn</h6>
                                        <small class="text-muted">3-5 ngày làm việc</small>
                                    </div>
                                    <span class="badge bg-success">Miễn phí</span>
                                </div>
                                
                                <div class="d-flex justify-content-between align-items-center p-3 border rounded mb-3">
                                    <div>
                                        <h6 class="mb-1">Giao hàng nhanh</h6>
                                        <small class="text-muted">1-2 ngày làm việc</small>
                                    </div>
                                    <span class="text-muted">30.000đ</span>
                                </div>
                                
                                <div class="d-flex justify-content-between align-items-center p-3 border rounded mb-3">
                                    <div>
                                        <h6 class="mb-1">Giao hàng hỏa tốc</h6>
                                        <small class="text-muted">Trong ngày (TP.HCM, Hà Nội)</small>
                                    </div>
                                    <span class="text-muted">50.000đ</span>
                                </div>
                            </div>
                            
                            <hr>
                            
                            <h5>Chính sách đổi trả</h5>
                            <ul>
                                <li>Đổi trả miễn phí trong 30 ngày</li>
                                <li>Sản phẩm còn nguyên tem, hộp</li>
                                <li>Bảo hành chính hãng 12 tháng</li>
                                <li>Hỗ trợ kỹ thuật 24/7</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Products -->
<section class="py-5">
    <div class="container">
        <h3 class="text-center mb-4">Sản phẩm tương tự</h3>
        <div class="row">
            <div class="col-md-3 col-6 mb-4">
                <div class="card product-card h-100">
                    <div class="position-relative">
                        <img src="https://via.placeholder.com/250x250?text=iPhone+15+Pro" class="card-img-top" alt="Product">
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">iPhone 15 Pro</h6>
                        <div class="mb-2">
                            <div class="text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <small class="text-muted">(87 đánh giá)</small>
                            </div>
                        </div>
                        <p class="text-primary fw-bold mb-0">27.990.000đ</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="card product-card h-100">
                    <div class="position-relative">
                        <img src="https://via.placeholder.com/250x250?text=iPhone+15" class="card-img-top" alt="Product">
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">iPhone 15</h6>
                        <div class="mb-2">
                            <div class="text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <small class="text-muted">(65 đánh giá)</small>
                            </div>
                        </div>
                        <p class="text-primary fw-bold mb-0">22.990.000đ</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="card product-card h-100">
                    <div class="position-relative">
                        <img src="https://via.placeholder.com/250x250?text=iPhone+14+Pro+Max" class="card-img-top" alt="Product">
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">iPhone 14 Pro Max</h6>
                        <div class="mb-2">
                            <div class="text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <small class="text-muted">(156 đánh giá)</small>
                            </div>
                        </div>
                        <p class="text-primary fw-bold mb-0">25.990.000đ</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="card product-card h-100">
                    <div class="position-relative">
                        <img src="https://via.placeholder.com/250x250?text=Samsung+S24+Ultra" class="card-img-top" alt="Product">
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">Samsung Galaxy S24 Ultra</h6>
                        <div class="mb-2">
                            <div class="text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <small class="text-muted">(92 đánh giá)</small>
                            </div>
                        </div>
                        <p class="text-primary fw-bold mb-0">29.990.000đ</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    // Change main product image
    function changeMainImage(src) {
        document.getElementById('mainImage').src = src;
        
        // Update active thumbnail
        document.querySelectorAll('.thumbnail-img').forEach(img => {
            img.classList.remove('active');
        });
        event.target.classList.add('active');
    }
    
    // Quantity controls
    function increaseQuantity() {
        const quantityInput = document.getElementById('quantity');
        const currentValue = parseInt(quantityInput.value);
        if (currentValue < 10) {
            quantityInput.value = currentValue + 1;
        }
    }
    
    function decreaseQuantity() {
        const quantityInput = document.getElementById('quantity');
        const currentValue = parseInt(quantityInput.value);
        if (currentValue > 1) {
            quantityInput.value = currentValue - 1;
        }
    }
    
    // Option selection
    document.addEventListener('DOMContentLoaded', function() {
        // Color selection
        document.querySelectorAll('.product-options .btn').forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from siblings
                this.parentNode.querySelectorAll('.btn').forEach(btn => {
                    btn.classList.remove('active');
                });
                // Add active class to clicked button
                this.classList.add('active');
            });
        });
    });
</script>

<style>
    .thumbnail-img {
        cursor: pointer;
        transition: all 0.3s;
    }
    
    .thumbnail-img.active {
        border-color: #007bff !important;
        border-width: 2px !important;
    }
    
    .product-options .btn {
        margin-bottom: 10px;
    }
    
    .product-options .btn.active {
        background-color: #007bff;
        color: white;
        border-color: #007bff;
    }
    
    .rating .fa-star {
        color: #ffc107;
    }
    
    .reviews-list {
        max-height: 600px;
        overflow-y: auto;
    }
    
    .review-item {
        border-bottom: 1px solid #eee;
        padding-bottom: 1rem;
    }
    
    .review-item:last-child {
        border-bottom: none;
    }
</style>
@endsection