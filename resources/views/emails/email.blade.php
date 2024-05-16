<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
</head>
<body>
    <h1>SMART STORE</h1>
    <p>Mã OTP để bạn có thể đổi mật khẩu <a href="{{ route('forget.index') }}">smartstore.com</a> là: {{ $pass }}</p>
</body>
</html>