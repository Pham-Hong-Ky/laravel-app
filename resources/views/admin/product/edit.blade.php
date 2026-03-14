@extends('layout.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $title }}</h3>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="/admin/product/edit/{{ $product['id'] }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="sku">SKU (*)</label>
                                    <input type="text" class="form-control" id="sku" name="sku" 
                                           value="{{ old('sku', $product->sku) }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="category_id">Danh mục (*)</label>
                                    <select class="form-control" id="category_id" name="category_id" required>
                                        <option value="">Chọn danh mục</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" 
                                                    {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="name">Tên sản phẩm (*)</label>
                                    <input type="text" class="form-control" id="name" name="name" 
                                           value="{{ old('name', $product->name) }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="price">Giá (*)</label>
                                    <input type="number" class="form-control" id="price" name="price" 
                                           value="{{ old('price', $product->price) }}" step="0.01" min="0" required>
                                </div>

                                <div class="form-group">
                                    <label for="sale_price">Giá khuyến mãi</label>
                                    <input type="number" class="form-control" id="sale_price" name="sale_price" 
                                           value="{{ old('sale_price', $product->sale_price) }}" step="0.01" min="0">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="stock">Số lượng (*)</label>
                                    <input type="number" class="form-control" id="stock" name="stock" 
                                           value="{{ old('stock', $product->stock) }}" min="0" required>
                                </div>

                                <div class="form-group">
                                    <label for="image">Hình ảnh</label>
                                    @if($product->image)
                                        <div class="mb-2">
                                            <img src="{{ asset('storage/' . $product->image) }}" 
                                                 alt="Current image" style="max-width: 200px; max-height: 150px;">
                                            <p class="small text-muted">Hình ảnh hiện tại</p>
                                        </div>
                                    @endif
                                    <input type="file" class="form-control-file" id="image" name="image" 
                                           accept="image/*">
                                    <small class="form-text text-muted">Cho phép: jpeg, png, jpg, gif. Tối đa: 2MB</small>
                                </div>

                                <div class="form-group">
                                    <label for="description">Mô tả</label>
                                    <textarea class="form-control" id="description" name="description" 
                                              rows="5">{{ old('description', $product->description) }}</textarea>
                                </div>

                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="is_active" 
                                               name="is_active" value="1" 
                                               {{ old('is_active', $product->is_active) ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="is_active">Kích hoạt</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Cập nhật sản phẩm</button>
                            <a href="/admin/product/" class="btn btn-secondary">Hủy</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
