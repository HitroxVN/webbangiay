<?php
require_once __DIR__ . '/../core/userupdate.php';
if (!isset($_SESSION['user'])) {
    redirect('/public/login.php');
    exit;
}
$user = $_SESSION['user'];
?>
<!doctype html>
<html lang="vi">
<head>
<meta charset="utf-8">
<title>Tài khoản của tôi</title>
<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?php require_once __DIR__ . '/header.php'; ?>

<main class="container account">
  <h1>Xin chào, <?php echo htmlspecialchars($user['name']); ?></h1>
  <form action="" method="post">
    <label>Họ tên:</label>
    <input type="text" name="name" value="<?php echo htmlspecialchars($user['name']); ?>" required>
    <br>
    <label>Địa chỉ:</label>
    <input type="text" name="address" value="<?php echo htmlspecialchars($user['address']); ?>"> <br>
    <label>Số điện thoại:</label>
    <input type="text" name="phone" value="<?php echo htmlspecialchars($user['phone']); ?>"> <br>
    <label>Email:</label>
    <input type="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required> <br>
    <button type="submit">Cập nhật</button>
  </form>

  <br>
  
</main>

<?php require_once __DIR__ . '/footer.php'; ?>
</body>
</html>
