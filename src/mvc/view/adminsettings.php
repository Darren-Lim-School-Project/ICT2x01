<?php
include '../../processors/session.process.php';
include '../../processors/sessionsec.process.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include '../../../includes/head.php';
    ?>

</head>
<style>

</style>
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

            <!-- Topbar -->
            <?php
            include '../../../includes/nav.php';
            ?>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">IR-Acer Admin Settings</h6>
                    </div>
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                            <div class="col-lg-7">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">What Will you do Today?</h1>
                                    </div>
                                    <br>
                                    <br>
                                    <br>

                                    <form class="user">

                                        <a href="updateAdmin.php" class="btn btn-primary btn-user btn-block">
                                            <i class="fas fa-key fa-fw"></i> &nbsp;Change Password
                                        </a>
                                        <hr>
                                        <a href="whitelistSettings.php" class="btn btn-primary btn-user btn-block">
                                            <i class="fas fa-car-alt fa-fw"></i> &nbsp;Whitelist Car
                                        </a>
                                    </form>


                                    <br>
                                    <br>
                                    <br>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php
include '../../../includes/javascriptSrc.php'
?>

</body>

</html>