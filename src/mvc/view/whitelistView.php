<?php
include '../../processors/session.process.php';
include '../../processors/sessionsec.process.php';
include '../controller/whitelistController.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include '../../../includes/head.php';
    ?>
    <title>View Whitelist</title></head>

<body class="bg-gradient-primary">

<!-- Page Wrapper -->
<div id="wrapper">

    <?php
    include '../../../includes/sidebar.php';
    ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- navbar -->
            <?php
            include '../../../includes/nav.php';
            ?>
            <!-- End of navbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Whitelisted IR-Acer Devices</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>ID No.</th>
                                    <th>Car Code</th>
                                </tr>
                                <?php
                                $data = new whitelistController("//");
                                $idData = $data->getTableData(1);
                                $carIdData = $data->getTableData(2);
                                ?>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>ID No.</th>
                                    <th>Car Code</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                <?php foreach ($idData as $index => $idDatum) : ?>
                                <tr>
                                    <td>
                                        <?php echo $idDatum ?>
                                    </td>
                                    <td>
                                        <?php echo $carIdData[$index] ?>
                                    </td>


                                    <?php endforeach;?>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <?php
        include '../../../includes/footer.php';
        ?>
        <!-- End of Footer -->

    </div>
</div>

<?php
include '../../../includes/javascriptSrc.php'
?>

</body>

</html>