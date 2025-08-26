<?php
require_once __DIR__ . '/../database/connect.php';
require_once __DIR__ . '/../core/function.php';
?>

<header class="site-header">
    <div class="container header-inner">
        <a class="brand" href="<?php echo BASE_URL; ?>/index.php">ShoeShop</a>
        <nav class="main-nav">
            <a href="#">Sản phẩm</a>
            <a href="#">Giới thiệu</a>
            <a href="#">Liên hệ</a>
        </nav>
        <div class="header-actions">
            <a href="#" class="cart-btn">Giỏ (<span id="cart-count">0</span>)</a>
            <?php if(isset($_SESSION['user'])): ?>
                <!--neu co session user -->
                <div class="btn-link">
                    <a href="<?php echo BASE_URL; ?>/public/profile.php"><i class="fa fa-user"></i>
                    <?php echo htmlspecialchars($_SESSION['user']['name']); ?></a>
                </div>
                <a href="<?php echo BASE_URL; ?>/public/logout.php" class="btn small">Đăng xuất</a>
            <?php else: ?>
                <!-- Hien thi nut login khi session = null -->
                <a href="<?php echo BASE_URL; ?>/public/login.php" class="btn-link">
                    <i class="fa fa-user"></i>
                </a>
            <?php endif; ?>
        </div>
    </div>
</header>