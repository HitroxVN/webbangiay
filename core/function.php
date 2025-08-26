<?php
// Folder goc
define('BASE_URL', '/web_baitaplon');

function redirect($path) {
    $url = BASE_URL . '/' . ltrim($path, '/');
    header("Location: $url");
    exit;
}

