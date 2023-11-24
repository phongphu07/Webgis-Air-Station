
<?php
session_start();

session_destroy();

header("location:/webgis-air-station/login.php?pesan=logout");
