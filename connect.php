<?php
$host = "localhost:3307";
$user = "root";
$pass = "";
$name = "sig_map4";

$connect = mysqli_connect($host, $user, $pass, $name);
if (mysqli_connect_errno()) {
    echo "Connecting mysqli database failed!!!: " . mysqli_connect_error();
}

