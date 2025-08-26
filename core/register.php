<?php
require_once __DIR__ . '/../database/connect.php';
require_once __DIR__ . '/../database/user.php';

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // neu email khong ton tai -> cho phep dang ky
    if (!getUserByEmail($email)) {
        if (createUser($name, $email, $password)) {
            echo "<script>
            alert('Đăng ký thành công! Vui lòng đăng nhập.');
            window.location.href = 'login.php';
            </script>";
            exit();
        } else {
            echo "<script>alert('Đăng ký thất bại! Vui lòng thử lại.');</script>";
        }
    } else {
        echo "<script>alert('Email đã tồn tại!');
        </script>";
    }
}
