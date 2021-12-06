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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IR-Acer - Whitelist Add</title>

    <!-- Custom fonts for this template-->
    <link href="../../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../../css/sb-admin-2.min.css" rel="stylesheet">

</head>

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
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Adding Car to Whitelist</h6>
                    </div>
                    <div class="card-body p-0">

                        <!-- Nested Row within Card Body -->
                        <div class="row" >
                            <div class="col-lg-5 d-none d-lg-block bg-password-image" ></div>
                            <div class="col-lg-7">
                                <div class="p-5">
                                    <br>
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Input IR-Acer Car Code to Whitelist</h1>
                                    </div>
                                    <br>
                                    <br>

                                    <form action="../../processors/whitelistAdd.process.php" method="post" class="user">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="carId" name="carId"
                                                   pattern="(?=.*\d)(?=.*[a-zA-Z]).{8,}" title="Car Code should have at least 1 letter, 1 digit and min 8 characters!" required placeholder="Car Code to Add">
                                        </div>
                                        <?php
                                        if (isset($_GET['result'])){
                                            if($_GET['result'] == "success"){
                                                ?>
                                                <a style="color: #28a745">The Car has been successfully Whitelisted!</a> <br>
                                                <?php
                                            }
                                            else if ($_GET['result'] == "unsuccessful"){
                                                ?>
                                                <a style="color: #b21d22">Something went wrong, the Car was not Whitelisted.</a> <br>
                                                <?php
                                            }
                                            else if ($_GET['result'] == "duplicateEntry"){
                                                ?>
                                                <a style="color: #b21d22">The Car is already Whitelisted!</a> <br>
                                                <?php
                                            }
                                            else if ($_GET['result'] == "emptyinput"){
                                                ?>
                                                <a style="color: #b21d22">Invalid Input! Do not leave any fields empty!</a> <br>
                                                <?php
                                            }
                                        }
                                        ?>
                                        <br>
                                        <button class="btn btn-primary btn-user btn-block" name=addcar type="submit">Add</button>
                                    </form>
                                    <br>
                                    <div class="text-center">
                                        <a class="small" href="whitelistSettings.php">Go Back</a>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <?php
        include '../../../includes/footer.php'
        ?>
    </div>
</div>
<script>
    function goBack() {
        window.history.back();
    }
</script>
<?php
include '../../../includes/javascriptSrc.php'
?>

</body>

</html>