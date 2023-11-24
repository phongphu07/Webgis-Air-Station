<?php
session_start();
if ($_SESSION['status'] != "login") {
    header("location:../category_news.php.php?pesan=belum_login");
}
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
                                            <th style="width:18%">Name </th>
                                            <th style="width:18%">Description</th>
                                            <th style="width:55%">Title</th>
                                            <th style="width:5%">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 0;
                                        $data = mysqli_query($connect, "select * from category_news");
                                        while ($d = mysqli_fetch_array($data)) {
                                            $no++;
                                        ?>
                                            <tr>
                                                <td><?php echo $no ?></td>
                                                <td><b><?php echo $d['name']; ?></b></td>
                                                <td><?php echo $d['meta_title']; ?></td>
                                                <td><?php echo $d['description']; ?></td>
                                                <td>
                                                    <a href="edit_category_news.php?id=<?php echo $d['id']; ?> " class="btn-sm btn-primary"><span class="fas fa-edit"></a>
                                                    <a href="delete_category_news.php?id=<?php echo $d['id']; ?>" class="btn-sm btn-danger"><span class="fas fa-trash"></a>
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