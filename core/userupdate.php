<?php

require_once __DIR__ . '/../database/connect.php';
require_once __DIR__ . '/../core/function.php';
require_once __DIR__ . '/../database/user.php';

if (isset($_POST['name'], $_POST['address'], $_POST['phone'], $_POST['email'])) {
    $id = $_SESSION['user']['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    // Cập nhật thông tin người dùng
    if (!getUserByEmail($email) || $email === $_SESSION['user']['email']) {
    if (updateUser($id, $name, $address, $phone, $email)) {
        echo "<script>alert('Cập nhật thông tin thành công.');</script>";
        // new session
        $_SESSION['user'] = getUserByEmail($email);
        redirect('/public/profile.php');
        exit;
    } else {
        echo "Cập nhật thông tin thất bại.";
    }
} else {
    echo "<script>alert('Email đã tồn tại. Vui lòng sử dụng email khác.');</script>";}
}