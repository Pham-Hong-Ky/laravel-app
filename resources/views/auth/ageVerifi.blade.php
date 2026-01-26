<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Xác minh tuổi</title>
  <style>
    .error {
      color: red;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  @if(session('error'))
    <div class="error">{{ session('error') }}</div>
  @endif
  
  <form action="/auth/ageVerifi" method="POST">
    @csrf
    <label for="age">Enter your age:</label>
    <input type="number" id="age" name="age" required>
    <button type="submit">Submit</button>
  </form>
</body>
</html>