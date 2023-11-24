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


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Air Monitoring Station Data</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th style="width:5%">ID</th>
                                            <th style="width:30%">Name </th>
                                            <th style="width:10%">meta_description</th>
                                            <th style="width:10%">Create At</th>
                                            <th style="width:5%">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 0;
                                        $data = mysqli_query($connect, "select * from post_news");
                                        while ($d = mysqli_fetch_array($data)) {
                                            $no++;
                                        ?>
                                            <tr>
                                                <td style="text-align: center; vertical-align: middle;"><?php echo $no ?></td>
                                                <td style="vertical-align: middle;"><b><?php echo $d['name']; ?></b></td>
                                                <td style="text-align: center; vertical-align: middle;"><?php echo $d['meta_description']; ?></td>
                                                <td style="text-align: center; vertical-align: middle;"><?php echo $d['created_at']?></td>
                                                <td style="text-align: center; vertical-align: middle;">
                                                    <a href="edit_post_news.php?id=<?php echo $d['id']; ?> " class="btn-sm btn-primary"><span class="fas fa-edit"></a>
                                                    <a href="delete_post_news.php?id=<?php echo $d['id']; ?>" class="btn-sm btn-danger"><span class="fas fa-trash"></a>
                                                </td>
                                            </tr>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        <?php include "footer.php"; ?>

    </div>
    <!-- End of Page Wrapper -->
</body>