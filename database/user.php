<?php

require_once __DIR__ . '/../database/connect.php';

// Lấy thông tin người dùng theo email
function getUserByEmail($email) {
    global $connect;

    $stmt = $connect->prepare("SELECT * FROM tb_users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return null;
    }
}

// Tạo người dùng mới
function createUser($name, $email, $password) {
    global $connect;

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);  // mã hoas mật khẩu

    $stmt = $connect->prepare("INSERT INTO tb_users (name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $passwordHash);
    
    if ($stmt->execute()) {
        return True;
    } else {
        return False; // Error
    }
}

function updateUser($id, $name, $address, $phone, $email) {
    global $connect;

    $stmt = $connect->prepare("UPDATE tb_users SET name = ?, address = ?, phone = ?, email = ? WHERE id = ?");
    $stmt->bind_param("ssssi", $name, $address, $phone, $email, $id);
    
    if ($stmt->execute()) {
        return True;
    } else {
        return False; // Error
    }
}

// function customUpdateUser($var)