<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>Register</h1>
  <form action="/auth/register" method="POST">
    @csrf
    <label > Account :</label>
  <input type="text" name="account">
  <br>
  <label >Password:</label>
  <input type="password" name="pass">
  <br>
  <label >Comfirm Password:</label>
  <input type="password" name="passcf">
  <br>
  <button type="submit">Submit</button>
  </form>
</body>
</html>