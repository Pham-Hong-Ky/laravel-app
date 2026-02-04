@extends('layout.admin')
@section('content')
    <form action="/product/edit/{{ $product['id'] }}" method="POST">
        @csrf
        @method('PUT')
        <label>Product name</label>
        <input type="text" name="product_name" value="{{ $product['name'] }}" required>
        <br>
        <label>Product price</label>
        <input type="text" name="product_price" value="{{ $product['price'] }}" required>
        <br>
        <label>Stock:</label>
        <input type="number" name="product_stock" value="{{ $product['stock'] }}" required>
        <br>
        <button type="submit">Edit </button>
        <button>
            <a href="/product">Cancel</a>
        </button>
    </form>
@endsection
