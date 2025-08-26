<?php

require_once __DIR__ . '/../database/connect.php';
require_once __DIR__ . '/../database/user.php';
require_once __DIR__ . '/../core/function.php';

// check du thong tin chua?
if (isset($_POST['email']) && isset($_POST['password'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user = getUserByEmail($email);

    // Neu ton tai email trong db thi check pass
    if ($user){
        // echo "Email đã tồn tại";
        if (password_verify($password, $user['password'])){
            // echo "Đăng nhập thành công";

            // Luu phien cua nguoi dung va back ra trang chu
            $_SESSION['user'] = $user;
            // echo "<script>
            // alert('Đăng nhập thành công!');
            // </script>";
            redirect('/index.php');
            exit();
        } else {
            echo "<script>
            alert('Mật khẩu không đúng');
            </script>";
        }
    } else {
        echo "<script>
        alert('Tài khoản không tồn tại trên hệ thống');
        </script>";
    }

}