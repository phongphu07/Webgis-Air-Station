<?php
session_start();

session_destroy();

header("location:/Air_Station/login.php?pesan=logout");
