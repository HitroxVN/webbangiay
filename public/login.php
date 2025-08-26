<?php
require_once __DIR__ . '/../core/login.php';

?>

<!doctype html>
<html lang="vi">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Đăng nhập</title>
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
    <h1>Đăng nhập</h1>
    <form id="login-form" method="post" action="login.php">
      <label>Email<input name="email" type="email" required></label>
      <label>Mật khẩu<input name="password" type="password" required></label>
      <button class="btn" type="submit">Đăng nhập</button>
    </form>
    <p>Chưa có tài khoản? <a href="register.php">Đăng ký</a></p>
    <div id="auth-result" class="notice"></div>
  </main>

</body>
</html>
