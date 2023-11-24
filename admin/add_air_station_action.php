<?php
// connect database
include '../connect.php';

// menangkap data yang di kirim dari form
$name = $_POST['name'];
$address = $_POST['address'];
$details = $_POST['details'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];
$img = $_POST['img'];

// menginput data ke database
mysqli_query($connect, "insert into air_station values('','$name','$address','$details','$latitude','$longitude','$img')");

// mengalihkan halaman kembali ke index.php
header("location:add_air_station.php");
