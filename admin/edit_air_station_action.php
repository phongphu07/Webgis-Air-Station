<?php
// connect database
include '../connect.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$name = $_POST['name'];
$address = $_POST['address'];
$details = $_POST['details'];
$longitude = $_POST['longitude'];
$latitude = $_POST['latitude'];
$img = $_POST['img'];

// update data ke database
mysqli_query($connect, "update air_station set name='$name', address='$address', details='$details', longitude='$longitude', latitude='$latitude', img='$img' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:list_air_station.php");
