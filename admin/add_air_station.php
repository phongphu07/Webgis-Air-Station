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

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Add Data of Air Stations</h1>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Add Data</h6>
                        </div>
                        <div class="card-body">

                            <!-- Main content -->
                            <form class="form-horizontal style-form" style="margin-top: 10px;" action="add_air_station_action.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Name</label>
                                    <div class="col-sm-6">
                                        <input name="name" type="text" class="form-control" placeholder="Name" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-4 control-label">Address</label>
                                    <div class="col-sm-6">
                                        <input name="address" class="form-control" type="text" placeholder="Address" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-4 control-label">Describe</label>
                                    <div class="col-sm-6">
                                        <input name="details" class="form-control" type="text" placeholder="Describe" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-4 control-label">Latitude</label>
                                    <div class="col-sm-6">
                                        <input name="latitude" class="form-control" id="latitude" type="text" placeholder="7.3811577" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-4 control-label">Longitude</label>
                                    <div class="col-sm-6">
                                        <input name="longitude" class="form-control" type="text" type="text" placeholder="106.235685" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-4 control-label">Image</label>
                                    <div class="col-sm-6">
                                        <input name="img" class="form-control" type="text" placeholder="https:image.jpg" required />
                                    </div>
                                </div>
                                <div class="form-group" style="margin-bottom: 20px;margin-left:22%">
                                    <label class="col-sm-2 col-sm-4 control-label"></label>
                                    <div class="col-sm-8">
                                        <input type="submit" value="Save" class="btn btn-sm btn-primary" />
                                    </div>
                                </div>
                                <div style="margin-top: 20px;"></div>
                            </form>


                        </div>
                    </div>

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