<?php
session_start();

include './connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($connect, "select * from admin where username='$username' and password='$password'");

$auth = mysqli_num_rows($data);

if ($auth > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:index.php");
} else {
    header("location:login.php");
}
