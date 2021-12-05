<?php
include '../../processors/session.process.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include '../../../includes/head.php'
    ?>
</head>

<body class="bg-gradient-primary">

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block"><img src="../../../img/gifs/Login.gif" alt="IR-Acer Login Gif"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">IR-Acer Admin</h1>
                                </div>
                                <form action="../../processors/login.process.php" method="post" class="user">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                               id="username" name="username" aria-describedby="username" required placeholder="Enter Admin Username" >
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                               id="password" name="password" required placeholder="Password" >
                                    </div>
                                    <button class="btn btn-primary btn-user btn-block" name="login" type="submit">Login</button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <?php
                                    if (isset($_GET['login'])){
                                        if($_GET['login'] == "false"){
                                            ?>
                                            <a style="color: #b21d22">Invalid Credentials. Login Unsuccessful</a> <br>
                                            <?php
                                        }
                                    }
                                    if(isset($_SESSION['carId'])){
                                        ?>
                                        <a class="small" href="javascript:history.back()">Go Back</a>
                                        <?php
                                    } else { ?>
                                    <a class="small" href="connect.php">Connect Device</a>
                                    <?php
                                    }
                                    ?>
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

</html>