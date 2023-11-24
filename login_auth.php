<?php
session_start();

include './connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($connect, "select * from admin where username='$username' and password='$password'");

$auth = mysqli_num_rows($data);

if ($auth > 0) {
    // Lấy thông tin về vai trò của người dùng từ cơ sở dữ liệu
    $query = mysqli_query($connect, "SELECT role_as FROM admin WHERE username='$username'");
    $user = mysqli_fetch_assoc($query);

    // Lưu vai trò vào session
    $_SESSION['role_as'] = $user['role_as'];

    // Chuyển hướng đến index.php
    header("location:index.php");
} else {
    header("location:login.php");
}
