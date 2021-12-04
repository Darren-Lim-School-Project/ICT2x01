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
                        <div class="col-lg-12 d-none d-lg-block"><img src="../../../img/gifs/Connect.gif" alt="IR-Acer Login Gif"></div>
                    </div>
                </div>
                <div class="card-body p-1">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <?php
                                if (isset($_GET['result'])){
                                    if($_GET['result'] == "unsuccessful"){
                                        ?>
                                        <a style="color: #b21d22">Car is not Whitelisted! Check with the Administrator!</a> <br>
                                        <?php
                                    }
                                    else if($_GET['result'] == "emptyinput"){
                                        ?>
                                        <a style="color: #b21d22">There is no such entry in the Whitelist!</a> <br>
                                        <?php
                                    }
                                }
                                if (isset($_GET['disconnect'])){
                                    if($_GET['disconnect'] == "true"){
                                        ?>
                                        <a style="color: #28a745">Car is successfully disconnected!</a> <br>
                                        <?php
                                    }
                                }
                                else
                                {
                                    ?>
                                    <br>
                                    <?php
                                }
                                ?>
                                <form action="../../processors/connect.process.php" method="post" class="user">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                               id="carId" name="carId" aria-describedby="carId" required placeholder="Enter Car Code" >
                                    </div>
                                    <button class="btn btn-primary btn-user btn-block" name="connect" type="submit">CONNECT</button>
                                </form>
                                <hr>
                                <?php
                                if(!isset($_SESSION['role'])){ ?>
                                    <div class="text-center">
                                        <a class="small" href="login.php">Login as Administrator</a>
                                    </div>
                                <?php
                                } else
                                { ?>
                                    <div class="text-center">
                                        <a class="small" href="javascript:history.back()">Go Back</a>
                                    </div>

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

</body>

<?php
include '../../../includes/javascriptSrc.php'
?>

</html>