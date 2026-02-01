<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1 >{{ $title }}</h1>
  <button style="margin-bottom: 5px" >
    <a href="{{ route('add') }}">Add new product</a>
  </button>
  <br>
  <table border="1" cellpadding="10" cellspacing="0">
      <th>ID</th>
      <th>Name</th>
      <th>Stock</th>
      <th>Price</th>
      <th>Actions</th>
      @foreach ($products as $product)
          <tr>
              <td>{{ $product['id'] }}</td>
              <td>{{ $product['name'] }}</td>
              <td>{{ $product['stock']}}</td>
              <td>{{ $product['price'] }}</td>
              <td>
                  <button onclick="window.location.href='/product/editView/{{ $product['id'] }}'">Edit</button>
                  <form action="/product/delete/{{ $product['id'] }}" method="POST" style="display:inline;">
                      @csrf
                      @method('DELETE')
                      <button type="submit" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                  </form>
              </td>
          </tr>
      @endforeach
  </table>
</body>
</html>