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
      <th>Price</th>
      <th>Actions</th>
      @foreach ($products as $product)
          <tr>
              <td>{{ $product['id'] }}</td>
              <td>{{ $product['name'] }}</td>
              <td>{{ $product['price'] }}</td>
              <td>
                  <a href="">Edit</a>
                  <a href="">Delete</a>
              </td>
          </tr>
      @endforeach
  </table>
</body>
</html>