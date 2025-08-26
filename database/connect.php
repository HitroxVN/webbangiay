<?php

// Khởi tạo session nếu chưa có
if (!isset($_SESSION)) {
    session_start();
}

// cau hinh db
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'webbangiay';  //rename database

// ket noi db
$connect = new mysqli($host, $username, $password, $dbname);

// check neu error
if ($connect->connect_error) {
    die("Kết nối thất bại: " . $connect->connect_error);
}

echo "Kết nối thành công";

?>