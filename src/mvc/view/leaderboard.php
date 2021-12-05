<?php
include '../../processors/session.process.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

<?php
include '../controller/leaderboardController.php';
include '../../../includes/head.php';
?>

<title>IR-Acer - Leaderboard</title>


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

                <!-- navbar -->
                <?php
                include '../../../includes/nav.php';
                ?>
                <!-- End of navbar -->

				<!-- Begin Page Content -->
				<div class="container-fluid">

					<!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Leaderboard</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Game Scores List</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Score</th>
                                        <th>Ranking</th>
                                        <th>UserName</th>
                                        <th>Car Code</th>
                                        <th>Difficulty</th>

                                    </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Score</th>
                                            <th>Ranking</th>
                                            <th>UserName</th>
                                            <th>Car Code</th>
                                            <th>Difficulty</th>

                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                    $data = new leaderboardController();
                                    $ranking = $data->getTableData(1);
                                    $username = $data->getTableData(2);
                                    $score = $data->getTableData(3);
                                    $carIdScore = $data->getTableData(4);
                                    $difficulty = $data->getTableData(5);
                                    foreach ($ranking as $index => $rankingum) :
                                    ?>
                                    <tr>

                                        <td><?php echo $score[$index] ?></td>
                                        <td> <?php echo $rankingum ?></td>
                                        <td><?php echo $username[$index] ?></td>
                                        <td><?php echo $carIdScore[$index] ?></td>
                                        <td><?php echo $difficulty[$index] ?></td>
                                        <?php endforeach; ?>
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
		<!-- End of Content Wrapper -->

	</div>
	<!-- End of Page Wrapper -->

	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top"> <i
		class="fas fa-angle-up"></i>
	</a>

	<!-- Logout Modal-->
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
		aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
					<button class="close" type="button" data-dismiss="modal"
						aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">Select "Logout" below if you are ready to
					end your current session.</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button"
						data-dismiss="modal">Cancel</button>
					<a class="btn btn-primary" href="login.html">Logout</a>
				</div>
			</div>
		</div>
	</div>

    <!-- Bootstrap core JavaScript-->
    <script src="../../../vendor/jquery/jquery.min.js"></script>
    <script src="../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../../../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../../../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../../../js/demo/datatables-demo.js"></script>

</body>

</html>