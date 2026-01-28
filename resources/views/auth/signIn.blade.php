<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>

    <form action="/auth/signIn" method="POST">
        @csrf

        <label>User Name:</label>
        <input type="text" name="account" required>
        <br><br>

        <label>MSSV:</label>
        <input type="text" name="mssv" required>
        <br><br>

        <label>Lớp:</label>
        <input type="text" name="class" required>
        <br><br>

        <label>Giới tính:</label>
        <select name="gender" required>
            <option value="">-- Chọn giới tính --</option>
            <option value="male">Nam</option>
            <option value="female">Nữ</option>
        </select>
        <br><br>

        <label>Password:</label>
        <input type="password" name="pass" required>
        <br><br>

        <label>Confirm Password:</label>
        <input type="password" name="passcf" required>
        <br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
