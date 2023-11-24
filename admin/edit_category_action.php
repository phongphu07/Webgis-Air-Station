<?php
// connect database
include '../connect.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$meta_title = $_POST['meta_title'];
// menginput data ke database
mysqli_query($connect, "update category_news set name='$name', description='$description', meta_title='$meta_title' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:category_news.php");