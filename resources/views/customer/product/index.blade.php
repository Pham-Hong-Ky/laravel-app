@extends('layout.customer')

@section('title', 'Danh sách sản phẩm - ShopStore')

@section('content')
<!-- Breadcrumb -->
<nav aria-label="breadcrumb" class="bg-light py-3">
    <div class="container">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Trang chủ</a></li>
            <li class="breadcrumb-item active">Sản phẩm</li>
        </ol>
    </div>
</nav>

<!-- Main Content -->
<section class="py-4">
    <div class="container">
        <div class="row">
            <!-- Sidebar Filters -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Bộ lọc</h5>
                    </div>
                    <div class="card-body">
                        <!-- Categories Filter -->
                        <div class="filter-section mb-4">
                            <h6>Danh mục</h6>
                            <div class="filter-options">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="phone">
                                    <label class="form-check-label" for="phone">
                                        Điện thoại <span class="text-muted">(156)</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="laptop">
                                    <label class="form-check-label" for="laptop">
                                        Laptop <span class="text-muted">(89)</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="fashion">
                                    <label class="form-check-label" for="fashion">
                                        Thời trang <span class="text-muted">(234)</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="home">
                                    <label class="form-check-label" for="home">
                                        Gia dụng <span class="text-muted">(142)</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Price Filter -->
                        <div class="filter-section mb-4">
                            <h6>Khoảng giá</h6>
                            <div class="filter-options">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="priceRange" id="price1">
                                    <label class="form-check-label" for="price1">
                                        Dưới 1 triệu
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="priceRange" id="price2">
                                    <label class="form-check-label" for="price2">
                                        1 - 5 triệu
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="priceRange" id="price3">
                                    <label class="form-check-label" for="price3">
                                        5 - 10 triệu
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="priceRange" id="price4">
                                    <label class="form-check-label" for="price4">
                                        10 - 20 triệu
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="priceRange" id="price5">
                                    <label class="form-check-label" for="price5">
                                        Trên 20 triệu
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Rating Filter -->
                        <div class="filter-section mb-4">
                            <h6>Đánh giá</h6>
                            <div class="filter-options">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="rating5">
                                    <label class="form-check-label" for="rating5">
                                        <div class="text-warning">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="rating4">
                                    <label class="form-check-label" for="rating4">
                                        <div class="text-warning">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            trở lên
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="rating3">
                                    <label class="form-check-label" for="rating3">
                                        <div class="text-warning">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            trở lên
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Brand Filter -->
                        <div class="filter-section mb-4">
                            <h6>Thương hiệu</h6>
                            <div class="filter-options">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="apple">
                                    <label class="form-check-label" for="apple">
                                        Apple
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="samsung">
                                    <label class="form-check-label" for="samsung">
                                        Samsung
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="xiaomi">
                                    <label class="form-check-label" for="xiaomi">
                                        Xiaomi
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="oppo">
                                    <label class="form-check-label" for="oppo">
                                        OPPO
                                    </label>
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-primary w-100">Áp dụng bộ lọc</button>
                        <button class="btn btn-outline-secondary w-100 mt-2">Xóa bộ lọc</button>
                    </div>
                </div>
            </div>

            <!-- Products Grid -->
            <div class="col-md-9">
                <!-- Search Results Header -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                        <h4>Kết quả tìm kiếm</h4>
                        <p class="text-muted mb-0">Hiển thị 1-20 trong 156 sản phẩm</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <label class="me-2">Sắp xếp:</label>
                        <select class="form-select" style="width: auto;">
                            <option>Phổ biến nhất</option>
                            <option>Mới nhất</option>
                            <option>Giá thấp đến cao</option>
                            <option>Giá cao đến thấp</option>
                            <option>Đánh giá cao nhất</option>
                        </select>
                        <div class="ms-3">
                            <button class="btn btn-outline-secondary btn-sm" id="gridView" title="Lưới">
                                <i class="fas fa-th"></i>
                            </button>
                            <button class="btn btn-outline-secondary btn-sm ms-1" id="listView" title="Danh sách">
                                <i class="fas fa-list"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Products Grid -->
                <div class="row" id="productsGrid">
                    <div class="col-lg-4 col-md-6 col-6 mb-4">
                        <div class="card product-card h-100">
                            <div class="position-relative">
                                <img src="https://via.placeholder.com/250x250?text=Product+1" class="card-img-top" alt="Product">
                                <span class="badge-discount">-30%</span>
                                <div class="product-overlay">
                                    <a href="/details?id=1" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                                    <button class="btn btn-outline-light btn-sm"><i class="far fa-heart"></i></button>
                                    <button class="btn btn-success btn-sm"><i class="fas fa-cart-plus"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">iPhone 15 Pro Max 256GB</h6>
                                <div class="mb-2">
                                    <div class="text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <small class="text-muted">(125)</small>
                                    </div>
                                </div>
                                <div class="price">
                                    <span class="text-danger fw-bold">31.990.000đ</span>
                                    <small class="text-muted text-decoration-line-through d-block">35.990.000đ</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-6 mb-4">
                        <div class="card product-card h-100">
                            <div class="position-relative">
                                <img src="https://via.placeholder.com/250x250?text=Product+2" class="card-img-top" alt="Product">
                                <span class="badge-new">Mới</span>
                                <div class="product-overlay">
                                    <a href="/details?id=2" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                                    <button class="btn btn-outline-light btn-sm"><i class="far fa-heart"></i></button>
                                    <button class="btn btn-success btn-sm"><i class="fas fa-cart-plus"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">Samsung Galaxy S24 Ultra</h6>
                                <div class="mb-2">
                                    <div class="text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <small class="text-muted">(98)</small>
                                    </div>
                                </div>
                                <div class="price">
                                    <span class="text-danger fw-bold">29.990.000đ</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-6 mb-4">
                        <div class="card product-card h-100">
                            <div class="position-relative">
                                <img src="https://via.placeholder.com/250x250?text=Product+3" class="card-img-top" alt="Product">
                                <div class="product-overlay">
                                    <a href="/details?id=3" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                                    <button class="btn btn-outline-light btn-sm"><i class="far fa-heart"></i></button>
                                    <button class="btn btn-success btn-sm"><i class="fas fa-cart-plus"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">MacBook Air M2 2022</h6>
                                <div class="mb-2">
                                    <div class="text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <small class="text-muted">(76)</small>
                                    </div>
                                </div>
                                <div class="price">
                                    <span class="text-danger fw-bold">28.990.000đ</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-6 mb-4">
                        <div class="card product-card h-100">
                            <div class="position-relative">
                                <img src="https://via.placeholder.com/250x250?text=Product+4" class="card-img-top" alt="Product">
                                <span class="badge-discount">-25%</span>
                                <div class="product-overlay">
                                    <a href="/details?id=4" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                                    <button class="btn btn-outline-light btn-sm"><i class="far fa-heart"></i></button>
                                    <button class="btn btn-success btn-sm"><i class="fas fa-cart-plus"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">Xiaomi 13 Pro 256GB</h6>
                                <div class="mb-2">
                                    <div class="text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <small class="text-muted">(143)</small>
                                    </div>
                                </div>
                                <div class="price">
                                    <span class="text-danger fw-bold">18.990.000đ</span>
                                    <small class="text-muted text-decoration-line-through d-block">24.990.000đ</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-6 mb-4">
                        <div class="card product-card h-100">
                            <div class="position-relative">
                                <img src="https://via.placeholder.com/250x250?text=Product+5" class="card-img-top" alt="Product">
                                <div class="product-overlay">
                                    <a href="/details?id=5" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                                    <button class="btn btn-outline-light btn-sm"><i class="far fa-heart"></i></button>
                                    <button class="btn btn-success btn-sm"><i class="fas fa-cart-plus"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">Dell XPS 13 2023</h6>
                                <div class="mb-2">
                                    <div class="text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <small class="text-muted">(67)</small>
                                    </div>
                                </div>
                                <div class="price">
                                    <span class="text-danger fw-bold">32.990.000đ</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-6 mb-4">
                        <div class="card product-card h-100">
                            <div class="position-relative">
                                <img src="https://via.placeholder.com/250x250?text=Product+6" class="card-img-top" alt="Product">
                                <span class="badge-discount">-40%</span>
                                <div class="product-overlay">
                                    <a href="/details?id=6" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                                    <button class="btn btn-outline-light btn-sm"><i class="far fa-heart"></i></button>
                                    <button class="btn btn-success btn-sm"><i class="fas fa-cart-plus"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">OPPO Find X5 Pro</h6>
                                <div class="mb-2">
                                    <div class="text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <small class="text-muted">(89)</small>
                                    </div>
                                </div>
                                <div class="price">
                                    <span class="text-danger fw-bold">15.990.000đ</span>
                                    <small class="text-muted text-decoration-line-through d-block">26.990.000đ</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Add more products as needed -->
                </div>

                <!-- Pagination -->
                <nav aria-label="Product pagination" class="mt-4">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Trước</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <span class="page-link">...</span>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">8</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">Sau</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<style>
    .product-overlay {
        position: absolute;
        top: 10px;
        right: 10px;
        display: flex;
        flex-direction: column;
        gap: 5px;
        opacity: 0;
        transition: opacity 0.3s;
    }
    
    .product-card:hover .product-overlay {
        opacity: 1;
    }
    
    .filter-section {
        border-bottom: 1px solid #eee;
        padding-bottom: 1rem;
    }
    
    .filter-section:last-child {
        border-bottom: none;
    }
    
    .form-check-label {
        cursor: pointer;
    }
    
    .product-card {
        transition: all 0.3s ease;
    }
    
    .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }
    
    @media (max-width: 768px) {
        .product-overlay {
            opacity: 1;
            position: static;
            flex-direction: row;
            justify-content: center;
            margin-top: 10px;
        }
    }
</style>

<script>
    // View toggle functionality
    document.getElementById('gridView').addEventListener('click', function() {
        this.classList.add('active');
        document.getElementById('listView').classList.remove('active');
        
        const grid = document.getElementById('productsGrid');
        grid.className = 'row';
        
        // Change column classes back to grid view
        const cards = grid.querySelectorAll('.col-lg-4');
        cards.forEach(card => {
            card.className = 'col-lg-4 col-md-6 col-6 mb-4';
        });
    });
    
    document.getElementById('listView').addEventListener('click', function() {
        this.classList.add('active');
        document.getElementById('gridView').classList.remove('active');
        
        const grid = document.getElementById('productsGrid');
        grid.className = 'row';
        
        // Change to list view
        const cards = grid.querySelectorAll('.col-lg-4');
        cards.forEach(card => {
            card.className = 'col-12 mb-4';
            
            // Modify card structure for list view
            const cardContent = card.querySelector('.card');
            cardContent.classList.add('d-md-flex', 'flex-md-row');
            
            const cardImg = cardContent.querySelector('.card-img-top');
            if (cardImg) {
                cardImg.style.maxWidth = '200px';
                cardImg.style.objectFit = 'cover';
            }
        });
    });
</script>
@endsection