<?php
// connect database
include '../connect.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$role_as = $_POST['role_as'];


// update data ke database
mysqli_query($connect, "update admin set username='$username', password='$password', role_as='$role_as' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:list_user.php");
