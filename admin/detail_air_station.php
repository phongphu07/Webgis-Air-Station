<?php
session_start();
    include "../connect.php";
?>

    <!DOCTYPE html>
    <html lang="en">

    <?php include "header.php"; ?>

    <body id="page-top">
        <!-- Page Wrapper -->
        <div id="wrapper">
            <?php include "menu_sidebar.php"; ?>
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                    <?php include "menu_topbar.php"; ?>

                    <?php
                    $id = $_GET['id'];
                    $query = mysqli_query($connect, "select * from air_station where id='$id'");
                    $data  = mysqli_fetch_array($query);
                    ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Chi tiết <?php echo $data['name']; ?></h1>
                    </div>
                    <div style="display: flex; align-items: center;"> <!-- Thêm thuộc tính align-items: center; để căn giữa hình ảnh -->
                        <div style="margin-right: 20px;"> <!-- Thêm margin để tạo khoảng cách giữa hình ảnh và card -->
                            <img src="<?php echo $data['img']; ?>" alt="">
                        </div>
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Details</h6>
                            </div>
                            <div class="card-body">
                                <div class="panel-body">
                                    <table id="example" class="table table-hover table-bordered">
                                        <tr>
                                            <td width="250">Name</td>
                                            <td width="550"><?php echo $data['name']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Address</td>
                                            <td><?php echo $data['address']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Latitude</td>
                                            <td><?php echo $data['longitude']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Longitude</td>
                                            <td><?php echo $data['latitude']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Describe</td>
                                            <td><?php echo $data['details']; ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    <!-- DataTales Example -->
                </div>

                <!-- /.container-fluid -->
                </div>
                <!-- End of Main Content -->
                <?php include "footer.php"; ?>
            </div>
            <!-- End of Content Wrapper -->
        </div>
        <!-- End of Page Wrapper -->
    </body>

    </html>