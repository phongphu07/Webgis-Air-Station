<?php
// connect database
include '../connect.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id'];


// menghapus data dari database
$query = mysqli_query($connect, "delete from admin where id='$id'");
if ($query) {
    echo "<script>alert('Delete Data Successful!'); window.location = 'list_user.php'</script>";
} else {
    echo "<script>alert('Delete Data Failed!'); window.location = 'list_user.php'</script>";
}
