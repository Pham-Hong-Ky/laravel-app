@extends('layout.admin')
@section('content')
    <form action="/product/store" method="POST">
        @csrf
        <label>Product name</label>
        <input type="text" name="product_name" required>
        <br>
        <label>Product price</label>
        <input type="text" name="product_price" required>
        <br>
        <label>Stock:</label>
        <input type="number" name="product_stock" required>
        <br>
        <button type="submit">Add </button>
        <button>
          <a href="/product">Cancel</a>
        </button>
    </form>
@endsection
