<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    include '../../../includes/head.php';
    include '../../processors/session.process.php';
    include '../../mvc/model/dashboardClass.php';
    $dashboard = new dashboardClass();
    if(isset($_SESSION['carId'])){
        $carId = $_SESSION['carId'];
    } else {
        $carId = "Unset";
    }

    ?>

    <title>IR-Acer - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="../../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

    <!-- Custom styles for this template-->
    <!--     <link href="../css/sb-admin-2.min.css" rel="stylesheet"> -->
</head>

<body id="page-top">

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

                <!-- Content Row -->
                <div class="row">

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Speed (Last Detected)
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php
                                            if(isset($_SESSION['carId'])){
                                                echo $dashboard->getSpeed($carId); ?> MPH <?php
                                            } else {
                                                echo "Not Connected!";
                                            }
                                            ?>
                                        </div>

                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-tachometer-alt fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Default Obstacle Detection (Last Detected)
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php
                                            if(isset($_SESSION['carId'])){
                                                echo $dashboard->getObstacle($carId); ?> CM <?php
                                            } else {
                                                echo "Not Connected!";
                                            }
                                            ?>

                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-microchip fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                            WIFI (ESP8266)
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php
                                            if(isset($_SESSION['carId'])){
                                                if ($dashboard->getIsConnected($carId) == True) {echo 'Connected!';} else {echo 'Not Connected!';}?> <?php
                                            } else {
                                                echo "Not Connected!";
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-wifi fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Row -->

                <div class="row">

                    <!-- Area Chart -->
                    <div class="col-xl-8 col-lg-7">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Challenges Completed</h6>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="chart-bar">
                                    <canvas id="myBarChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pie Chart -->
                    <div class="col-xl-4 col-lg-5">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Wins / Loses </h6>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="chart-pie pt-4 pb-2">
                                    <canvas id="myPieChart"></canvas>
                                </div>
                                <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i> Wins
                                        </span>
                                    <span class="mr-2">
                                            <i class="fas fa-circle text-info"></i> Losses
                                        </span>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Pie Chart -->
                    <div class="col-xl-4 col-lg-5">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Game Completion </h6>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="chart-pie pt-4 pb-2">
                                    <canvas id="myPieChart2"></canvas>
                                </div>
                                <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i> Completed
                                        </span>
                                    <span class="mr-2">
                                            <i class="fas fa-circle text-info"></i> Incompleted
                                        </span>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Content Row -->

                    <!-- Content Column -->
                    <div class="col-xl-8 col-lg-5">

                        <!-- Project Card Example -->
                        <?php
                        if(isset($_SESSION['carId'])){
                            ?>
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Sensors Required</h6>
                                </div>
                                <div class="card-body">
                                    <h4 class="small font-weight-bold">DC Gear Motor <span
                                                class="float-right">Connected!</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                             aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Motor Driver (L298N) <span
                                                class="float-right">Connected!</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Ultrasonic Ranging Module (HC-SR04) <span
                                                class="float-right">Connected!</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                             aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">IR Line Tracking Module <span
                                                class="float-right">Connected!</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                             aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">IR Optical Speed Sensor <span
                                                class="float-right">Connected!</span></h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                             aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <br>
                                    <h4 class="small font-weight-bold">WiFi Serial Transceiver Module (ESP8266) <span
                                                class="float-right">Connected!</span></h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                             aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        else
                        {
                            ?>
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Sensors Required</h6>
                                </div>
                                <div class="card-body">
                                    <h4 class="small font-weight-bold">DC Gear Motor <span
                                                class="float-right">Not Connected!</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%"
                                             aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Motor Driver (L298N) <span
                                                class="float-right">Not Connected!</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%"
                                             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Ultrasonic Ranging Module (HC-SR04) <span
                                                class="float-right">Not Connected!</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%"
                                             aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">IR Line Tracking Module <span
                                                class="float-right">Not Connected!</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%"
                                             aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">IR Optical Speed Sensor <span
                                                class="float-right">Not Connected!</span></h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%"
                                             aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <br>
                                    <h4 class="small font-weight-bold">WiFi Serial Transceiver Module (ESP8266) <span
                                                class="float-right">Not Connected!</span></h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%"
                                             aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>

                    </div>
                    <!-- /.container-fluid -->

                </div>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php
            include '../../../includes/footer.php';
            ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <?php
    include "../../../includes/javascriptSrc.php";
    ?>

    <!-- Page level plugins -->
    <script src="../../../vendor/chart.js/Chart.min.js"></script>
    <script src="../../../vendor/chart.js/Chart.bundle.min.js"></script>

    <?php
    if(isset($_SESSION['carId'])){
        $completion = $dashboard->getCompletion($carId);
        $incomplete = $dashboard->getGameLevel() - $dashboard->getCompletion($carId);
        $wins = $dashboard->getWins($carId);
        $losses= $dashboard->getLosses($carId);
        $easy = $dashboard->getEasy($carId);
        $medium= $dashboard->getMedium($carId);
        $difficult = $dashboard->getDifficult($carId);
    } else {
        $completion = 0;
        $incomplete = 0;
        $wins = 0;
        $losses= 0;
        $easy = 0;
        $medium= 0;
        $difficult = 0;
    }

    ?>

    <script type="text/javascript">
        var completion = "<?= $completion ?>";
        var incomplete = "<?= $incomplete ?>";
        var wins = "<?= $wins ?>";
        var losses = "<?= $losses ?>";
        var easy = "<?= $easy ?>";
        var medium = "<?= $medium ?>";
        var difficult = "<?= $difficult ?>";
    </script>

    <!-- Page level custom scripts -->
    <script src="../../../js/demo/chart-area-demo.js"></script>
    <script src="../../../js/demo/chart-pie-demo.js"></script>
    <script src="../../../js/demo/chart-bar-demo.js"></script>

</body>

</html>