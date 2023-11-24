<?php
// connect database
include '../connect.php';

// menangkap data yang di kirim dari form
$name = $_POST['name'];
$description = $_POST['description'];
$meta_title = $_POST['meta_title'];
$meta_description = $_POST['meta_description'];

// menginput data ke database
mysqli_query($connect, "insert into category_news values('','$name','$description','$meta_title','$meta_description')");

// mengalihkan halaman kembali ke index.php
header("location:category_news.php");
