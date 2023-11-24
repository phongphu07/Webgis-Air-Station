<?php
// connect database
include '../connect.php';

// menangkap data yang di kirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
$role_as = $_POST['role_as'];


// menginput data ke database
mysqli_query($connect, "insert into admin values('','$username','$password','$role_as')");

// mengalihkan halaman kembali ke index.php
header("location:list_user.php");
