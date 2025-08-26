<?php
require_once __DIR__ . '/../core/register.php';

?>

<!doctype html>
<html lang="vi">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Đăng ký</title>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <header class="site-header">
    <div class="container header-inner">
      <a class="brand" href="..">ShoeShop</a>
    </div>
  </header>

  <main class="container auth">
    <h1>Đăng ký</h1>
    <form id="register-form" method="post" action="register.php">
      <label>Họ và tên<input name="name" type="text" required></label>
      <label>Email<input name="email" type="email" required></label>
      <label>Mật khẩu<input name="password" type="password" required></label>
      <button class="btn" type="submit">Đăng ký</button>
    </form>
    <p>Chưa có tài khoản? <a href="login.php">Đăng nhập</a></p>
    <div id="auth-result" class="notice"></div>
  </main>

</body>
</html>
