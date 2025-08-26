<?php
require_once __DIR__ . '/../database/connect.php';
require_once __DIR__ . '/../core/function.php';
session_destroy();
redirect('/index.php');