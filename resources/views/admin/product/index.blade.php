@extends('layout.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $title }}</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.add') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Thêm sản phẩm mới
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>SKU</th>
                                    <th>Hình ảnh</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Danh mục</th>
                                    <th>Giá</th>
                                    <th>Giá KM</th>
                                    <th>Tồn kho</th>
                                    <th>Trạng thái</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($products as $product)
                                    <tr>
                                        <td>{{ $product['id'] }}</td>
                                        <td>{{ $product['sku'] }}</td>
                                        <td>
                                            @if($product['image'])
                                                <img src="{{ asset('storage/' . $product['image']) }}" 
                                                     alt="Product image" 
                                                     style="width: 50px; height: 50px; object-fit: cover;">
                                            @else
                                                <span class="text-muted">Không có ảnh</span>
                                            @endif
                                        </td>
                                        <td>{{ $product['name'] }}</td>
                                        <td>
                                            @if($product->category)
                                                {{ $product->category->name }}
                                            @else
                                                <span class="text-muted">Chưa phân loại</span>
                                            @endif
                                        </td>
                                        <td>{{ number_format($product['price'], 0, ',', '.') }}đ</td>
                                        <td>
                                            @if($product['sale_price'])
                                                {{ number_format($product['sale_price'], 0, ',', '.') }}đ
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td>{{ $product['stock'] }}</td>
                                        <td>
                                            @if($product['is_active'])
                                                <span class="badge badge-success">Kích hoạt</span>
                                            @else
                                                <span class="badge badge-secondary">Không kích hoạt</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="/admin/product/editView/{{ $product['id'] }}" 
                                               class="btn btn-sm btn-warning">
                                                <i class="fas fa-edit"></i> Sửa
                                            </a>
                                            <form action="/admin/product/delete/{{ $product['id'] }}" 
                                                  method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')">
                                                    <i class="fas fa-trash"></i> Xóa
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="10" class="text-center">Không có sản phẩm nào</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
