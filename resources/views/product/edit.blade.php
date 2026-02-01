<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
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
  </form>
</body>
</html>