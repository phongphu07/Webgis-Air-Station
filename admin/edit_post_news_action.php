<?php
// connect database
include '../connect.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$meta_description = $_POST['meta_description'];
// menginput data ke database
mysqli_query($connect, "update post_news set name='$name', description='$description', meta_description='$meta_description' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:post_news.php");