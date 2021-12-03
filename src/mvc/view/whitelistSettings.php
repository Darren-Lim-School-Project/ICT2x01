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
    <title>Whitelist Settings</title></head>

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
                        <h6 class="m-0 font-weight-bold text-primary">IR-Acer Whitelist Settings</h6>
                    </div>
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-5 d-none d-lg-block bg-password-image"></div>
                            <div class="col-lg-7">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Add or Remove an IR-Acer Device?</h1>
                                    </div>
                                    <br>
                                    <br>
                                    <br>

                                    <form class="user">
                                        <a href="whitelistView.php" class="btn btn-primary btn-user btn-block">
                                            <i class="fas fa-list-ul"></i> &nbsp;View Whitelist
                                        </a>
                                        <hr>
                                        <a href="whitelistAdd.php" class="btn btn-primary btn-user btn-block">
                                            <i class="fas fa-plus"></i> &nbsp;Add Car to Whitelist
                                        </a>
                                        <hr>
                                        <a href="whitelistRemove.php" class="btn btn-primary btn-user btn-block">
                                            <i class="fas fa-minus"></i> &nbsp;Remove Car from Whitelist
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