<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
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
  </form>
</body>
</html>